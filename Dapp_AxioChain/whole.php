<?php include '_head.php'; ?>

<div class="whole-area bg wrapper">

    <div class="search-area">
        <div class="container">
            <div id="date" class="date">DATE</div>

            <div id="time" class="time">TIME</div>

            <!--<form class="form search">
                <input type="search" name="s" class="control" placeholder="Search a team or a day"/>
                <button type="submit"><img src="img/glass.png" alt=""/></button>
            </form>-->
        </div>
    </div>

    <div class="heading-area">
        <div class="container">
            <div class="content">
                <h1 class="main-title">
                    <br>Ranking<br>
                    <img src="img/link2.png" alt=""/>
                    <img src="img/link2.png" alt=""/>
                    <img src="img/logo-coin.png" alt=""/>
                    <img src="img/link2.png" alt=""/>
                    <img src="img/link2.png" alt=""/>
                </h1>
            </div>

            <div class="action">
                <a href="#" class="btn secondary full disabled">
                    <img src="img/link.png" alt=""/>
                    Ranking
                </a>
            </div>

            <div class="action">
                <a href="./whole.php" class="btn secondary full">
                    <img src="img/refresh.png" alt=""/>
                    Update
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <a href="./list.php" class="back">
            <img src="img/arrow-left.png" alt=""/>
            Back to the Bet List
        </a>
    </div>

    <div class="date-area">
        <div class="container">
            <div class="title">
            <span id="txStatus" class="inner"></span>
            </div>
        </div>
    </div>

    <!--<div class="match-area container">
        <h2 class="block-title">
            <img src="img/link2.png" alt=""/>
            <img src="img/link2.png" alt=""/>
            <span >RESULTS FOR GROUP PHASE</span>
            <img src="img/link2.png" alt=""/>
            <img src="img/link2.png" alt=""/>
        </h2>
    </div>

    <div class="matches-area">
        <div class="container">

            <div class="items">

                <div class='group action'>
                    <label class='label hidden-phone'>&nbsp;</label>
                    <button id ='buttonBet' type='button' class='btn secondary full' onclick='showAllMyBets()'>SHOW ALL MY BETS IN GROUP PHASE</button>
                </div>

                <div class="item">
                    <div class="meta">
                        <div class="inner">
                            <span class='date'>Pseudo</span>
                        </div>
                    </div>

                    <div class="meta">
                        <div class="inner">
                             <span class='date'>Bet</span>
                        </div>
                    </div>

                    <div class='meta'>
                        <div class='inner'>
                            <span class='date'>User's Winner</span>
                        </div>
                    </div>

                    <div class='meta'>
                        <div class='inner'>
                            <span class='date'>Match Result</span>
                        </div>
                    </div>

                    <div class='info'>
                        <div class='inner'>
                            <div class='text'>
                                <b>Result</b>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
               
            <div id="items1" class="items">
            </div>

            <div class="items">
                <div class='group action'>
                    <div class='meta'>
                        <label class='label hidden-phone'>&nbsp;</label>
                        <button id ='buttonBet' type='button' class='btn secondary full' onclick='showRanking()'>SHOW RANKING ONLY IN GROUP PHASE</button>
                    </div>
                </div>

                <div class="item">
                    <div class="meta">
                        <div class="inner">
                            <span class='date'>Pseudo</span>
                        </div>
                    </div>

                    <div class="meta">
                        <div class="inner">
                            <span class='date'>Nb of Bets</span>
                        </div>
                    </div>

                    <div class="meta">
                        <div class="inner">
                            <span class='date'>Nb of Winning Bets</span>
                        </div>
                    </div>

                    <div class="meta">
                        <div class="inner">
                            <span class='date'>Bet Ratio</span>
                        </div>
                    </div>

                    <div class="info">
                        <div class="inner">
                            <strong>Balance</strong>
                        </div>
                    </div>
                </div>

            </div>

            <div id="items2" class="items">
            </div>

        </div>
    </div>

    <div class="match-area container">
        <h2 class="block-title">
            <img src="img/link2.png" alt=""/>
            <img src="img/link2.png" alt=""/>
            <span >RESULTS FOR KNOCKOUT PHASE</span>
            <img src="img/link2.png" alt=""/>
            <img src="img/link2.png" alt=""/>
        </h2>
    </div>
    -->
    <div class="matches-area">
        <div class="container">
            <div class="items">

                <div class='group action'>
                    <label class='label hidden-phone'>&nbsp;</label>
                    <button id ='buttonBet' type='button' class='btn secondary full' onclick='showAllMyBets1()'>SHOW ALL MY BETS IN KNOCKOUT PHASE</button>
                </div>

                <div class="item">
                    <div class="meta">
                        <div class="inner">
                            <span class='date'>Pseudo</span>
                        </div>
                    </div>

                    <div class="meta">
                        <div class="inner">
                             <span class='date'>Bet</span>
                        </div>
                    </div>

                    <div class='meta'>
                        <div class='inner'>
                            <span class='date'>User's Winner</span>
                        </div>
                    </div>

                    <div class='meta'>
                        <div class='inner'>
                            <span class='date'>Match Result</span>
                        </div>
                    </div>

                    <div class='info'>
                        <div class='inner'>
                            <div class='text'>
                                <b>Result</b>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
               
            <div id="items3" class="items">
            </div>

            <div class="items">
                <div class='group action'>
                    <div class='meta'>
                        <label class='label hidden-phone'>&nbsp;</label>
                        <button id ='buttonBet' type='button' class='btn secondary full' onclick='showRanking1()'>SHOW RANKING ONLY IN KNOCKOUT PHASE</button>
                    </div>
                </div>

                <div class="item">
                    <div class="meta">
                        <div class="inner">
                            <span class='date'>Pseudo</span>
                        </div>
                    </div>

                    <div class="meta">
                        <div class="inner">
                            <span class='date'>Nb of Bets</span>
                        </div>
                    </div>

                    <div class="meta">
                        <div class="inner">
                            <span class='date'>Nb of Winning Bets</span>
                        </div>
                    </div>

                    <div class="meta">
                        <div class="inner">
                            <span class='date'>Bet Ratio</span>
                        </div>
                    </div>

                    <div class="info">
                        <div class="inner">
                            <strong>Balance</strong>
                        </div>
                    </div>
                </div>

            </div>

            <div id="items4" class="items">
            </div>

        </div>
    </div>

</div>

<script src="axiochain.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="functions.js"></script>
<script>

    var userAccount;
    var axiochainContract = web3.eth.contract(axiochainABI);
    var axioChain = axiochainContract.at(axiochainAddress);

    var team1 = ["Russia"      ,"Egypt"  ,"Russia","Uruguay"     ,"Uruguay","Saudi Arabia","Morocco","Portugal","Portugal","IR Iran","IR Iran" ,"Spain"  ,"France"   ,"Peru"   ,"Denmark"  ,"France","Denmark","Australia","Argentina","Croatia","Argentina","Nigeria","Nigeria"  ,"Iceland","Costa Rica","Brazil"     ,"Brazil"    ,"Serbia"     ,"Serbia","Switzerland","Germany","Sweden"        ,"Korea Rep.","Germany","Korea Rep.","Mexico","Belgium","Tunisia","Belgium","England","Panama" ,"England","Colombia","Poland" ,"Japan"  ,"Poland"  ,"Japan" ,"Senegal" ,"France","Uruguay","Spain","Croatia","Brazil","Belgium","Sweden","Colombia","Uruguay","Brazil" ,"Sweden" ,"Russia" ];

    var team2 = ["Saudi Arabia","Uruguay","Egypt" ,"Saudi Arabia","Russia" ,"Egypt"       ,"IR Iran","Spain"   ,"Morocco" ,"Spain"  ,"Portugal","Morocco","Australia","Denmark","Australia","Peru"  ,"France" ,"Peru"     ,"Iceland"  ,"Nigeria","Croatia"  ,"Iceland","Argentina","Croatia","Serbia"    ,"Switzerland","Costa Rica","Switzerland","Brazil","Costa Rica" ,"Mexico" ,"Korea Rep.","Mexico"        ,"Sweden" ,"Germany"       ,"Sweden","Panama" ,"England","Tunisia","Panama" ,"Tunisia","Belgium","Japan"   ,"Senegal","Senegal","Colombia","Poland","Colombia","Argentina","Portugal","Russia","Denmark","Mexico","Japan","Switzerland","England","France" ,"Belgium","England","Croatia"];

    var odds = [[4.30,3.70,3.15, 5.75,3.10,3.50,2.95,3.30,3.70, 6.00,4.60,4.50, 6.50,3.10,3.60,4.40,3.70,3.20, 4.60,3.50,3.30,3.00,4.30,3.40,3.20,4.50, 6.25,3.00,4.60,3.30,4.10,3.10,3.40,4.40, 5.25,3.10, 6.50,4.20,4.90, 5.75,3.15,3.25,3.50,3.10,3.20,3.15,3.50,3.25,1.55,1.75,1.22,1.35,1.19,1.16,1.95,2.45,2.65,1.52,2.75,2.35],[1.44,7.00,2.05, 1.20,2.25,5.00,2.25,4.60,1.62,17.00,8.75,1.35, 1.25,3.15,1.65,1.45,5.50,3.60, 1.32,1.68,1.95,2.50,7.00,4.70,4.60,1.38, 1.17,2.95,8.50,1.85,1.48,2.05,4.70,1.40,10.50,2.45, 1.16,8.25,1.32, 1.20,3.60,2.85,1.65,2.30,3.50,3.25,4.25,3.90,1.55,1.75,1.22,1.35,1.19,1.16,1.95,2.45,2.65,1.52,2.75,2.35],[9.00,1.60,3.80,15.00,3.40,1.72,3.85,1.92,5.75, 1.19,1.35,9.00,14.00,2.35,5.25,7.00,1.62,2.05,10.00,5.25,4.00,2.95,1.45,1.78,1.85,8.00,18.00,2.50,1.35,4.40,6.75,3.90,1.78,7.50, 1.27,2.95,19.00,1.40,9.25,16.00,2.10,2.40,5.50,3.20,2.10,2.25,1.85,1.95,2.15,1.85,3.41,2.75,3.71,4.25,1.72,1.48,1.38,2.25,1.35,1.52]];

    var result1     = [5,0,3,1,3,2,0,3,1,0,1,2,2,0,1,1,0,0,1,2,0,2,1,1,0,1,2,1,0,2,0,1,1,2,2,0,3,1,5,6,1,0,1,1,2,0,0,0,4,2,'1(3)','1(3)',2,3,1,'1(3)',0,1,0,'2(3)'];
    var result2     = [0,1,1,0,0,1,1,3,0,1,1,2,1,1,1,0,0,2,1,0,3,0,2,2,1,1,0,2,2,2,1,0,2,1,0,3,0,2,2,1,2,1,2,2,2,3,1,1,3,1,'1(4)','1(2)',0,2,0,'1(4)',2,2,2,'2(4)'];
    var matchResult = [1,2,1,1,1,1,2,0,1,2,0,0,1,2,0,1,0,2,0,1,2,1,2,2,2,0,1,2,2,0,2,1,2,1,1,2,1,2,1,1,2,2,2,2,0,2,2,2,1,1,2,1,1,1,1,2,2,2,2,2];

    setHour("time","date");

    // Checking if Web3 has been injected by the browser (Mist/Metamask)
    if (typeof web3 !== 'undefined') {
        // Use Mist/Metamask's provider
        web3 = new Web3(web3.currentProvider);
    } else {
        // Handle the case where the user doesn't have Metamask installed
        // Probably show them a message prompting them to install Metamask
        // set the provider you want from Web3.providers
        web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:3000"));
    }

    // Update the default User-account
    var accountInterval = setInterval(function () {
        // Check if account has changed
        if (web3.eth.accounts[0] !== userAccount) {
            userAccount = web3.eth.accounts[0];
        }
    }, 1000);

    function addBetDetails1(pseudo,matchID,stake,message){
        var divItem   = document.createElement('div');
        var divName1  = document.createElement('div');
        var divInner1 = document.createElement('div');
        var divName2  = document.createElement('div');
        var divInner2 = document.createElement('div');
        var divInfo   = document.createElement('div');
        var divInner3 = document.createElement('div');

        var d = new Date();

        divItem.className   = 'item';
        divName1.className  = 'name';
        divInner1.className = 'inner';
        divName2.className  = 'name';
        divInner2.className = 'inner';
        divInfo.className   = 'info';
        divInner3.className = 'inner';

        var text1 = document.createTextNode(pseudo);
        var text2 = document.createTextNode(team1[matchID-1] + " vs " + team2[matchID-1]);
        var text3 = document.createTextNode("You bet " + stake + " on " + message);

        divItem.appendChild(divName1);
        divName1.appendChild(divInner1);
        divInner1.appendChild(text1);
        divItem.appendChild(divName2);
        divName2.appendChild(divInner2);
        divInner2.appendChild(text2);
        divItem.appendChild(divInfo);
        divInfo.appendChild(divInner3);
        divInner3.appendChild(text3);

        document.getElementById('items1').appendChild(divItem);
    }

    function addBetDetails2(elementID,pseudo,matchID,stake,userWinner){
        var divItem   = document.createElement('div');
        var divName1  = document.createElement('div');
        var divInner1 = document.createElement('div');
        var divName2  = document.createElement('div');
        var divInner2 = document.createElement('div');
        var divName3  = document.createElement('div');
        var divInner3 = document.createElement('div');
        var divName4  = document.createElement('div');
        var divInner4 = document.createElement('div');
        var divInfo   = document.createElement('div');
        var divInner5 = document.createElement('div');

        var d = new Date();

        divItem.className   = 'item';
        divName1.className  = 'name';
        divInner1.className = 'inner';
        divName2.className  = 'name';
        divInner2.className = 'inner';
        divName3.className  = 'name';
        divInner3.className = 'inner';
        divName4.className  = 'name';
        divInner4.className = 'inner';
        divInfo.className   = 'info';
        divInner5.className = 'inner';

        if (userWinner == 1) {
            var text3 = document.createTextNode(team1[matchID-1]);
        } else {
            if (userWinner == 0) {
                var text3 = document.createTextNode("DRAW");
            } else {
                var text3 = document.createTextNode(team2[matchID-1]);
            }
        }

        var text1 = document.createTextNode(pseudo);
        var text2 = document.createTextNode(stake + " AXC");

        if (matchResult[matchID-1] == 0) {
            var text4 = document.createTextNode("-");
            var text5 = document.createTextNode("The match has not started yet");
        } else {
            var text4 = document.createTextNode(team1[matchID-1] + " : " + result1[matchID-1] + " " + team2[matchID-1] + " : " + result2[matchID-1]);
            if (matchResult[matchID-1] == userWinner) {
                var text5 = document.createTextNode("You won " + parseInt(stake*odds[userWinner][matchID-1]) + " AXC");
            } else {
                var text5 = document.createTextNode("You lost " + stake + " AXC");
            }
        }

        divItem.appendChild(divName1);
        divName1.appendChild(divInner1);
        divInner1.appendChild(text1);
        divItem.appendChild(divName2);
        divName2.appendChild(divInner2);
        divInner2.appendChild(text2);
        divItem.appendChild(divName3);
        divName3.appendChild(divInner3);
        divInner3.appendChild(text3);
        divItem.appendChild(divName4);
        divName4.appendChild(divInner4);
        divInner4.appendChild(text4);
        divItem.appendChild(divInfo);
        divInfo.appendChild(divInner5);
        divInner5.appendChild(text5);

        document.getElementById(elementID).appendChild(divItem);
    }

    function addBetDetails3(elementID,pseudo,numberTotalBets,numberWinningBets,betRatio,balance){
        var divItem   = document.createElement('div');
        var divName1  = document.createElement('div');
        var divInner1 = document.createElement('div');
        var divName2  = document.createElement('div');
        var divInner2 = document.createElement('div');
        var divName3  = document.createElement('div');
        var divInner3 = document.createElement('div');
        var divName4  = document.createElement('div');
        var divInner4 = document.createElement('div');
        var divInfo   = document.createElement('div');
        var divInner5 = document.createElement('div');

        var d = new Date();

        divItem.className   = 'item';
        divName1.className  = 'name';
        divInner1.className = 'inner';
        divName2.className  = 'name';
        divInner2.className = 'inner';
        divName3.className  = 'name';
        divInner3.className = 'inner';
        divName4.className  = 'name';
        divInner4.className = 'inner';
        divInfo.className   = 'info';
        divInner5.className = 'inner';

        var text1 = document.createTextNode(pseudo);
        var text2 = document.createTextNode(numberTotalBets);
        var text3 = document.createTextNode(numberWinningBets);
        var text4 = document.createTextNode(betRatio);
        var text5 = document.createTextNode(balance);

        divItem.appendChild(divName1);
        divName1.appendChild(divInner1);
        divInner1.appendChild(text1);
        divItem.appendChild(divName2);
        divName2.appendChild(divInner2);
        divInner2.appendChild(text2);
        divItem.appendChild(divName3);
        divName3.appendChild(divInner3);
        divInner3.appendChild(text3);
        divItem.appendChild(divName4);
        divName4.appendChild(divInner4);
        divInner4.appendChild(text4);
        divItem.appendChild(divInfo);
        divInfo.appendChild(divInner5);
        divInner5.appendChild(text5);

        document.getElementById(elementID).appendChild(divItem);
    }

    function getMessageBet(prediction,gameID) {
        var messageBet;
        if (prediction == 0) {
            messageBet = "a DRAW";
        } else{
            if(prediction == 1) {
                messageBet = "the victory of " + team1[gameID-1];
            } else {
                messageBet = "the victory of " + team2[gameID-1];
            }
        }
        return messageBet;
    }

    function showAllMyBets() {
        // Cleaning div block
        document.getElementById('items1').innerHTML = "";

        var betList = [];
        var betID;
        var i;
        var user = {};
        var messageBet;

        axioChain.getBetsUser(userAccount,function(error,result) {
            console.log(result);
            if (result.length > 0) {
                for (i = 0; i < result.length; i++) {
                    betList.push(result[i].c[0]);
                    betID = result[i].c[0];
                    axioChain.bets(betID,function(error,result) {
                        user.pseudo = result[4];
                        user.matchID = result[3].c[0];
                        user.winner = result[2].c[0];
                        user.stake = result[1].c[0];

                        //messageBet = getMessageBet(user.winner,user.matchID);
                        //addBetDetails1(user.pseudo,user.matchID,user.stake,messageBet);
                        if (user.matchID < 49) {
                            addBetDetails2('items1',user.pseudo,user.matchID,user.stake,user.winner);
                        }

                    });
                }
            } else {
                $("#txStatus").text("YOU HAVE NOT BET ON ANY MATCH YET.");
            }
        });
    }

    function showAllMyBets1() {
        // Cleaning div block
        document.getElementById('items3').innerHTML = "";

        var betList = [];
        var betID;
        var i;
        var user = {};
        var messageBet;

        axioChain.getBetsUser(userAccount,function(error,result) {
            console.log(result);
            if (result.length > 0) {
                for (i = 0; i < result.length; i++) {
                    betList.push(result[i].c[0]);
                    betID = result[i].c[0];
                    axioChain.bets(betID,function(error,result) {
                        user.pseudo = result[4];
                        user.matchID = result[3].c[0];
                        user.winner = result[2].c[0];
                        user.stake = result[1].c[0];

                        //messageBet = getMessageBet(user.winner,user.matchID);
                        //addBetDetails1(user.pseudo,user.matchID,user.stake,messageBet);
                        if (user.matchID > 48) {
                            addBetDetails2('items3',user.pseudo,user.matchID,user.stake,user.winner);
                        }

                    });
                }
            } else {
                $("#txStatus").text("YOU HAVE NOT BET ON ANY MATCH YET.");
            }

        });
    }

    function showAllUsers() {
        // Cleaning div block
        document.getElementById('items4').innerHTML = "";

        var userID;
        var i;
        var user = {};
        var messageBet;

        axioChain.getNumberUsers(function(error,result) {
            console.log("getNumberUsers:"+result);
            if (result > 0) {
                for (i = 0; i < result; i++) {
                    userID = i + 1;
                    axioChain.users(userID,function(error,result) {
                        console.log("user:" + result[0]);
                        user.pseudo = result[0];
                        user.userID = result[1];
                        user.numberBets = result[2];
                        user.numberWinBets = result[3];
                        user.balance = result[4] % 10000;

                        addBetDetails3('items4',user.pseudo,user.numberBets,user.numberWinBets,user.balance);
                    });
                }
            } else {
                $("#txStatus").text("THERE IS NO USERS IN THIS BLOCKCHAIN.");
            }

        });
    }

    function showRanking() {
        // Cleaning div block
        document.getElementById('items2').innerHTML = "";

        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "rankingGroupPhase.csv",
                dataType: "text",
                success: function(data) {processData(data,'items2');}
             });
        });

    }

    function showRanking1() {
        // Cleaning div block
        document.getElementById('items4').innerHTML = "";

        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "rankingKnockoutPhase.csv",
                dataType: "text",
                success: function(data) {processData(data,'items4');}
             });
        });

    }

    function processData(allText,elementID) {
        var allTextLines = allText.split(/\r\n|\n/);
        var headers = allTextLines[0].split(';');
        var lines = [];

        for (var i=1; i<allTextLines.length; i++) {
            var data = allTextLines[i].split(';');
            if (data.length == headers.length) {

                var tarr = [];
                for (var j=0; j<headers.length; j++) {
                    tarr.push(data[j]);
                }
                lines.push(tarr);
            }
        }
        console.log(lines[0][0]);

        for (var i=0;i<lines.length;i++) {
            addBetDetails3(elementID,lines[i][0],lines[i][1],lines[i][2],lines[i][3],lines[i][4]);
        }
    }


</script>

<?php include '_foot.php'; ?>
