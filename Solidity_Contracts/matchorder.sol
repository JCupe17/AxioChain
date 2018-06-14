pragma solidity ^0.4.2;
import "./matchfactory.sol";
import "./axiocoin.sol";

contract MatchOrder is MatchFactory , AxioCoin {

    uint32 initialAmount = 1000;
    
    mapping(address => string  ) addressToPseudo;
    mapping(string  => address ) pseudoToAddress;
    mapping(address => uint    ) numberBetsPerUser;
    mapping(uint    => address ) userIDtoAddress;
    mapping(address => uint8   ) addressToUserID;
    mapping(uint    => User    ) public users;
    mapping(uint    => Bet     ) public bets;

    uint8 userID = 0;
    
    event BetEvent(string pseudo,uint tipe,uint256 value,uint8 win,uint gameID,uint blocknumber);

    struct Bet {
        // The necessary information for each bet
        uint32 betID;
        uint32 stake;
        uint8  win;
        uint8  matchID;
        string pseudo;
    }

    struct User {
        string  pseudo;
        uint8   userID;
        uint16  numberBets;
        uint16  numberWinBets;
        uint256 balance;
    }
    
    modifier betRequirement(uint _gameID) {
        //require(bets[uint32(keccak256(_gameID+uint(keccak256(msg.sender))))].betID==0);
        if (bets[uint32(keccak256(_gameID+uint(keccak256(msg.sender))))].betID != 0) {
            ErrorEvent(msg.sender, "", uint8(3));
            return;
        }

        //require(games[_gameID].result==3);
        if (games[_gameID].result != 3) {
            ErrorEvent(msg.sender, "", uint8(4));
            return;
        }

        //require(bytes(addressToPseudo[msg.sender]).length!=0);
        if (bytes(addressToPseudo[msg.sender]).length == 0) {
            ErrorEvent(msg.sender, "", uint8(5));
            return;
        }
        _;
    }
    
    function setInitialAmount(uint32 _amount) external onlyOwner {
        initialAmount = _amount;
    }

    function placeOrder (uint8 _gameID,uint8 win,uint32 _value) external betRequirement(_gameID)  {
        // Create the bet
        
        uint32 _betID=uint32(keccak256(_gameID+uint(keccak256(msg.sender))));
        games[_gameID].betIDs.push(_betID);
        bets[_betID]=Bet(_betID,_value, win, _gameID, addressToPseudo[msg.sender]);

        numberBetsPerMatch[_gameID]++;
        numberBetsPerUser[msg.sender]++;
        
        // On met le pari dans la blockchain
        transfer(this, _value);
        
        emit BetEvent(addressToPseudo[msg.sender],0,_value,win,_gameID,block.number);

        uint8 _userID = addressToUserID[msg.sender];
        users[_userID].numberBets++;
        users[_userID].balance = balanceOf(msg.sender);

    }

    function register(string _pseudo) external{
        // Verify if the pseudo is still available and
        // verify if the crypto-wallet does not have another pseudo already attached to it
        //require(pseudoToAddress[_pseudo] == 0);
        if (pseudoToAddress[_pseudo] != 0) {
            ErrorEvent(msg.sender, _pseudo, uint8(1));
            return;
        }

        //require(bytes(addressToPseudo[msg.sender]).length == 0);
        if (bytes(addressToPseudo[msg.sender]).length != 0) {
            ErrorEvent(msg.sender, _pseudo, uint8(2));
            return;
        }

        // Creating the new user - pseudo
        userID++;
        addressToPseudo[msg.sender] = _pseudo;
        pseudoToAddress[_pseudo] = msg.sender;
        userIDtoAddress[userID] = msg.sender;
        addressToUserID[msg.sender] = userID;

        users[userID] = User(_pseudo,userID,0,0,initialAmount);

        // Transfer 
        reward(initialAmount,msg.sender);
        ErrorEvent(msg.sender, _pseudo, uint8(0));

    }

    function getNumberUsers() external view returns(uint8) {
        return userID;
    }

    function getUserIDFromAddress(address _from) external view returns(uint8){
        return addressToUserID[_from];
    }

    function getPseudoFromAddress(address _from) external view returns(string){
        return addressToPseudo[_from];
    }

    function getAddresssFromPseudo(string _pseudo) external view returns(address){
        return pseudoToAddress[_pseudo];
    }

    function getBetsUser(address _from) external view returns(uint[]) {
        uint[] memory result = new uint[](numberBetsPerUser[_from]);
        uint count = 0;
        // There are only 64 matches for the World Cup
        for (uint gameID =1; gameID < 65; gameID++) {
            uint32 betID=uint32(keccak256(gameID+uint(keccak256(_from))));
            if (keccak256(bets[betID].pseudo) == keccak256(addressToPseudo[_from])) {
                result[count] = betID;
                count++;
            }
        } 
        return result;
    }

    //function getUserbyID(uint8 _userID) external view returns(User) {
    //}

    function getBetsMatch(uint _gameID) external view returns(uint32[]) {
        return games[_gameID].betIDs;
    }

    function getNumberBetsPerMatch(uint _gameID) external view returns(uint) {
        return numberBetsPerMatch[_gameID];
    }

    function getNumberBetsPerUser(address _from) external view returns(uint) {
        return numberBetsPerUser[_from];
    }


}
