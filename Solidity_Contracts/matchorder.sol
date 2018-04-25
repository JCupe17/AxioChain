pragma solidity ^0.4.2;
import "./matchfactory.sol";
import "./axiocoin.sol";

contract MatchOrder is MatchFactory , AxioTestCoin {

    uint32 initialAmount = 500;
    
    mapping(address => string  ) addressToPseudo;
    mapping(string  => address ) pseudoToAddress;
    
    event NewUser(address indexed _from, string _pseudo, uint8 _status);

    mapping(uint=>Bet) public bets;

    struct Bet {
        // The necessary information for each bet
        uint32 betID;
        uint32 stake;
        uint8 win;
        address sender;
    }
    
    modifier betRequirement(uint _gameID) {
        require(bets[uint32(keccak256(_gameID+uint(keccak256(msg.sender))))].betID==0);
        require(games[_gameID].result==3);
        require(bytes(addressToPseudo[msg.sender]).length!=0);
        _;
    }
    
    function setInitialAmount(uint32 _amount) external onlyOwner {
        initialAmount = _amount;
    }

    function placeOrder (uint _gameID,uint8 win,uint32 _value) external betRequirement(_gameID)  {
        // On crée d'abord le pari
        
        uint32 betID=uint32(keccak256(_gameID+uint(keccak256(msg.sender))));
        games[_gameID].betIDs.push(betID);
        bets[betID]=Bet(betID,_value, win, msg.sender);
        
        // On met le pari dans la blockchain
        transfer(this, _value);
        
        emit NewBlokkEvent(addressToPseudo[msg.sender],0,_value,win,_gameID,block.number);
    }

    function register(string _pseudo) external{
        // Verify if the pseudo is still available and
        // verify if the crypto-wallet does not have another pseudo already attached to it
        //require(pseudoToAddress[_pseudo] == 0);
        if (pseudoToAddress[_pseudo] != 0) {
            NewUser(msg.sender, _pseudo, uint8(1));
            return;
        }

        //require(bytes(addressToPseudo[msg.sender]).length == 0);
        if (bytes(addressToPseudo[msg.sender]).length != 0) {
            NewUser(msg.sender, _pseudo, uint8(2));
            return;
        }

        // Creating the new user - pseudo
        addressToPseudo[msg.sender] = _pseudo;
        pseudoToAddress[_pseudo] = msg.sender;

        // Transfer 
        reward(initialAmount,msg.sender);
        NewUser(msg.sender, _pseudo, uint8(0));
    }

    function getPseudoFromAddress(address _from) external view returns(address){
        return addressToPseudo[_from];
    }

    function getAddresssFromPseudo(string _pseudo) external view returns(string){
        return pseudoToAddress[_pseudo];
    }


}
