pragma solidity ^0.4.2;
import "./matchorder.sol";


contract MatchUpdate is MatchOrder{
    function updateStatus(uint _gameID,uint8 homeGoals,uint8 awayGoals) public onlyOwner{
        
        // On change les buts
        games[_gameID].homeTeamGoals=homeGoals;
        games[_gameID].awayTeamGoals=awayGoals;
        // On change le résultat
        if (homeGoals>awayGoals) {games[_gameID].result=1;}
        if (homeGoals==awayGoals) {games[_gameID].result=0;}
        if (homeGoals<awayGoals) {games[_gameID].result=2;}
        
    }

    
    
    function getLength(uint _gameID) view internal returns(uint8){
        return uint8(games[_gameID].betIDs.length);
    }
    
    function isWinner(uint _betID,uint result) view internal returns(bool){
        bool a;
        
        if(bets[_betID].win==result){
        a = true;
        } else{
            a= false;
        }
        return (a);
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
    event DebugEvent(uint32 a,uint32 _reward,uint16 cote);
    
    function retribute(uint _gameID) public onlyOwner{
        uint32 a=getSum(games[_gameID].result,games[_gameID].betIDs);
        
        for (uint iter=0;iter<getLength(_gameID);iter++){
            uint32 _betID=games[_gameID].betIDs[iter];
            if(isWinner(_betID,games[_gameID].result)){
                //transfer l'argent
                uint32 _reward=getReward(games[_gameID].result,bets[_betID].stake,games[_gameID].cote,a);
                reward(bets[_betID].stake*2,bets[_betID].sender);
                emit DebugEvent(a,_reward,games[_gameID].cote[games[_gameID].result]);
                emit NewBlokkEvent(pseudos[msg.sender],1,bets[_betID].stake*2,bets[_betID].win,_gameID,block.number);
            }
        }
    }
    
    function getReward(uint8 _result, uint32 _stake ,uint16[3] _cote, uint32 _sum)pure internal returns (uint32){
        return(_stake+(_stake*uint32(_cote[_result])*100*(_sum+100))/_sum/100);
    }
    
  
    
    
    
    

    
}