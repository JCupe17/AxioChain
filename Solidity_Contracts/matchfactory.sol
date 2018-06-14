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
        uint16[3] odds;
        uint32[] betIDs;
    }
    
    function() public payable{}

    mapping(uint => Match)  public games;
    mapping(uint => uint )  numberBetsPerMatch;

    uint16 numberGames = 0;

    // This event returns an error status:
    // 0 : Everythin is OK
    // 1 : The pseudo is already used
    // 2 : The wallet was already registered with another pseudo
    // 3 : The bet for this match was already done
    // 4 : The game has finished
    // 5 : The wallet address is not registered/allowed to play in the blockchain
    // 6 : The match was already created
    event ErrorEvent(address indexed _from, string _pseudo, uint8 _status);

    event NewGameEvent(uint8 gameID, uint blockNumber);
    
    function createMatch(uint8 _gameID) public onlyOwner{
        if (numberBetsPerMatch[_gameID] != 0) {
            emit ErrorEvent(msg.sender, "", uint8(6));
            return;
        }        
        uint32[] memory betIDs;
        games[_gameID]=Match(_gameID, 0,0,3,[uint16(100),uint16(100),uint16(100)],betIDs);
        numberGames++;

        emit NewGameEvent(_gameID,block.number);
    }

    function getNumberGames() external view returns(uint16){
        return numberGames;
    }

}
