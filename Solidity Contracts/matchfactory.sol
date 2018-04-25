pragma solidity ^0.4.2;
import "./ownable.sol";
import "./safemath.sol";

contract MatchFactory is Ownable {
    
    using SafeMath for uint32;

    struct Match{
        uint8 gameID;
        uint8 homeTeamGoals;
        uint8 awayTeamGoals;
        uint8 result;
        uint16[3] cote;
        uint32[] betIDs;
    }
    
    function() public payable{}

    uint8[] public gameIDs; 

    mapping(uint=>Match) public games;
    event NewBlokkEvent(string pseudo,uint tipe,uint256 value,uint8 win,uint gameID,uint blocknumber);
    
    function createMatch(uint8 _gameID) public onlyOwner{
        gameIDs.push(_gameID);
       uint32[] memory a;
        games[_gameID]=Match(_gameID, 0,0,3,[uint16(100),uint16(100),uint16(100)],a);
        
    }

}
