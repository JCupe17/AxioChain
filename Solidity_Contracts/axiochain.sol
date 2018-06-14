pragma solidity ^0.4.2;
import "./matchupdate.sol";

contract Axiochain is MatchUpdate{
    
    function getCote(uint8 _gameID) public view returns(uint16[3]) {
        uint16 a=uint16(getSum(0,games[_gameID].betIDs));
        uint16 b=uint16(getSum(1,games[_gameID].betIDs));
        uint16 c=uint16(getSum(2,games[_gameID].betIDs));
        return([100+(b+c)*100/(a+100),100+(a+c)*100/(b+100),100+(a+b)*100/(c+100)]);
    }
    
    event Cote(uint16 coted,uint16 coteh,uint16 cotea);
    
    function updateCote(uint8 _gameID) external{
        games[_gameID].odds=getCote(_gameID);
        emit Cote(games[_gameID].odds[0],games[_gameID].odds[1],games[_gameID].odds[2]);
    }
    
}
