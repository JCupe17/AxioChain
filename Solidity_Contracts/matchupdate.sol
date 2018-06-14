pragma solidity ^0.4.2;
import "./matchorder.sol";


contract MatchUpdate is MatchOrder{

    function updateStatus(uint _gameID,uint8 homeGoals,uint8 awayGoals) public onlyOwner{
        
        // Update the Match's result - number of goals
        games[_gameID].homeTeamGoals = homeGoals;
        games[_gameID].awayTeamGoals = awayGoals;

        // Update the variable result:
        // 3 : Ongoing
        // 2 : Visitor team has won
        // 1 : Home team has won
        // 0 : Draw
        if (homeGoals >  awayGoals) {games[_gameID].result = 1;}
        if (homeGoals == awayGoals) {games[_gameID].result = 0;}
        if (homeGoals <  awayGoals) {games[_gameID].result = 2;}
    }
    
   
    function isWinner(uint _betID,uint result) view internal returns(bool){
        return (bets[_betID].win == result);
    }

    function retribute(uint _gameID, uint16 odd) public onlyOwner{
        // The odd is an integer number. This number was multiply by 100 before to use this function
        // That is why the reward is equal to stake*odd/100
        
        for (uint iter = 0; iter < numberBetsPerMatch[_gameID]; iter++) {
            uint32 _betID = games[_gameID].betIDs[iter];
            if(isWinner(_betID,games[_gameID].result)){
                // Transfer Tokesn
                reward((bets[_betID].stake*odd/100),pseudoToAddress[bets[_betID].pseudo]);
                emit BetEvent(addressToPseudo[msg.sender],1,bets[_betID].stake*2,bets[_betID].win,_gameID,block.number);

                uint8 _userID = addressToUserID[pseudoToAddress[bets[_betID].pseudo]];
                users[_userID].numberWinBets++;
                users[_userID].balance = balanceOf(pseudoToAddress[bets[_betID].pseudo]);
            }
        }
    }

    // Function that get the total amount of a list of bets.
    function getTotalBetPerMatch(uint8 _gameID) external view returns(uint32){
        uint32 total = 0;

        for(uint iter = 0; iter < numberBetsPerMatch[_gameID]; iter++) {
            uint32 betID = games[_gameID].betIDs[iter];
            total = total + bets[betID].stake;
        }
        return total;
    }

    //--------------------------------------------------------
    // OLD FUNCTIONS : SEE IF THEY CAN BE REMOVED
    //--------------------------------------------------------

    event DebugEvent(uint32 a,uint32 _reward,uint16 cote);

    function getLength(uint _gameID) view internal returns(uint8){
        return uint8(games[_gameID].betIDs.length);
    }
 
    // Function that get the total amount of a list of bets.
    function getSum(uint8 result, uint32[] _betIds) public view returns(uint32 sum){
        sum=0;
        uint a=_betIds.length;
        for(uint iter = 0; iter < a; iter++) {
            if (bets[_betIds[iter]].win==result){
                
                sum=sum+bets[_betIds[iter]].stake;
            }
        }
        return sum;
    }

    function retributeOld(uint _gameID) public onlyOwner{
        uint32 a=getSum(games[_gameID].result,games[_gameID].betIDs);
        
        for (uint iter=0;iter<getLength(_gameID);iter++){
            uint32 _betID=games[_gameID].betIDs[iter];
            if(isWinner(_betID,games[_gameID].result)){
                //transfer l'argent
                uint32 _reward=getReward(games[_gameID].result,bets[_betID].stake,games[_gameID].odds,a);
                reward(bets[_betID].stake*2,pseudoToAddress[bets[_betID].pseudo]);
                emit DebugEvent(a,_reward,games[_gameID].odds[games[_gameID].result]);
                emit BetEvent(addressToPseudo[msg.sender],1,bets[_betID].stake*2,bets[_betID].win,_gameID,block.number);
            }
        }
    }
    
    function getReward(uint8 _result, uint32 _stake ,uint16[3] _odd, uint32 _sum)pure internal returns (uint32){
        return(_stake+(_stake*uint32(_odd[_result])*100*(_sum+100))/_sum/100);
    }
    
}
