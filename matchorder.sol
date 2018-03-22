pragma solidity ^0.4.2;
import "./matchfactory.sol";
import "./axiocoin.sol";

contract MatchOrder is MatchFactory , AxioTestCoin {

    mapping(uint=>Bet) public bets;
    event NewBetEvent(uint32 betID,uint32 stake, uint8 win, address sender);
    struct Bet {
        // The necessary information for each bet
        uint32 betID;
        uint32 stake;
        uint8 win;
        address sender;
    }
    
    modifier neverBet(uint _gameID) {
        require(bets[uint32(keccak256(_gameID+uint(keccak256(msg.sender))))].betID==0);
        _;
    }
    
    modifier matchNotOver(uint _gameID){
        require(games[_gameID].result==3);
        _;
    }
    
    modifier isRegistered{
        require(bytes(pseudos[msg.sender]).length!=0);
        _;
    }
    
    function placeOrder (uint _gameID,uint8 win,uint32 _value) external  {
        // On crée d'abord le pari
        require(games[_gameID].result==3 && bytes(pseudos[msg.sender]).length!=0 && bets[uint32(keccak256(_gameID+uint(keccak256(msg.sender))))].betID==0);
        uint32 betID=uint32(keccak256(_gameID+uint(keccak256(msg.sender))));
        games[_gameID].betIDs.push(betID);
        bets[betID]=Bet(betID,_value, win, msg.sender);
        emit NewBetEvent(betID, _value, win, msg.sender);
        //emit Info("Le pari a été créé");
        
        
        // On met le pari dans la blockchain
        transfer(this, _value);
        
        emit NewBlokkEvent(pseudos[msg.sender],0,_value,win,_gameID,block.number);
        //emit Info("La cote a été mise à jour");
    }
}