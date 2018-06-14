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


    <div class="matches-area">
        <div class="container">
            <div id="items1" class="items">

                <div class='item'>
                    <div class='meta'>
                        <label class='label hidden-phone'>&nbsp;</label>
                        <button id ='buttonBet' type='button' class='btn secondary' onclick='showAllMyBets()'>Show ALL MY BETS</button>
                    </div>
                </div>

                <div class="item">
                    <div class="name">
                        <div class="inner">
                            <u>USER</u>
                        </div>
                    </div>

                    <div class="name">
                        <div class="inner">
                             <u>MatchID</u>
                        </div>
                    </div>

                    <div class="info">
                        <div class="inner">
                            <u><strong>INFO</strong></u>
                        </div>
                    </div>
                </div>
            </div>
               
            <div id="items2" class="items">
                <div class='item'>
                    <div class='meta'>
                        <label class='label hidden-phone'>&nbsp;</label>
                        <button id ='buttonBet' type='button' class='btn secondary' onclick='showAllUsers()'>Show ALL USERS</button>
                    </div>
                </div>

                <div class="item">
                    <div class="name">
                        <div class="inner">
                            USER
                        </div>
                    </div>

                    <div class="name">
                        <div class="inner">
                            Total Number of Bets
                        </div>
                    </div>

                    <div class="name">
                        <div class="inner">
                            Number of Winning Bets
                        </div>
                    </div>

                    <div class="info">
                        <div class="inner">
                            <strong>Balance</strong>
                        </div>
                    </div>
                </div>

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

    var team1 = ["Russia"      ,"Egypt"  ,"Russia","Uruguay"     ,"Uruguay","Saudi Arabia","Morocco","Portugal","Portugal","IR Iran","IR Iran" ,"Spain"  ,"France"   ,"Peru"   ,"Denmark"  ,"France","Denmark","Australia","Argentina","Croatia","Argentina","Nigeria","Nigeria"  ,"Iceland","Costa Rica","Brazil"     ,"Brazil"    ,"Serbia"     ,"Serbia","Switzerland","Germany","Sweden"        ,"Korea Republic","Germany","Korea Republic","Mexico","Belgium","Tunisia","Belgium","England","Panama" ,"England","Colombia","Poland" ,"Japan"  ,"Poland"  ,"Japan" ,"Senegal" ];

    var team2 = ["Saudi Arabia","Uruguay","Egypt" ,"Saudi Arabia","Russia" ,"Egypt"       ,"IR Iran","Spain"   ,"Morocco" ,"Spain"  ,"Portugal","Morocco","Australia","Denmark","Australia","Peru"  ,"France" ,"Peru"     ,"Iceland"  ,"Nigeria","Croatia"  ,"Iceland","Argentina","Croatia","Serbia"    ,"Switzerland","Costa Rica","Switzerland","Brazil","Costa Rica" ,"Mexico" ,"Korea Republic","Mexico"        ,"Sweden" ,"Germany"       ,"Sweden","Panama" ,"England","Tunisia","Panama" ,"Tunisia","Belgium","Japan"   ,"Senegal","Senegal","Colombia","Poland","Colombia"];

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

    function addBetDetails2(pseudo,numberTotalBets,numberWinningBets,balance){
        var divItem   = document.createElement('div');
        var divName1  = document.createElement('div');
        var divInner1 = document.createElement('div');
        var divName2  = document.createElement('div');
        var divInner2 = document.createElement('div');
        var divName3  = document.createElement('div');
        var divInner3 = document.createElement('div');
        var divInfo   = document.createElement('div');
        var divInner4 = document.createElement('div');

        var d = new Date();

        divItem.className   = 'item';
        divName1.className  = 'name';
        divInner1.className = 'inner';
        divName2.className  = 'name';
        divInner2.className = 'inner';
        divName3.className  = 'name';
        divInner3.className = 'inner';
        divInfo.className   = 'info';
        divInner4.className = 'inner';

        var text1 = document.createTextNode(pseudo);
        var text2 = document.createTextNode(numberTotalBets);
        var text3 = document.createTextNode(numberWinningBets);
        var text4 = document.createTextNode(balance + " AxioTokens.");

        divItem.appendChild(divName1);
        divName1.appendChild(divInner1);
        divInner1.appendChild(text1);
        divItem.appendChild(divName2);
        divName2.appendChild(divInner2);
        divInner2.appendChild(text2);
        divItem.appendChild(divName3);
        divName3.appendChild(divInner3);
        divInner3.appendChild(text3);
        divItem.appendChild(divInfo);
        divInfo.appendChild(divInner4);
        divInner4.appendChild(text4);

        document.getElementById('items2').appendChild(divItem);
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

                        messageBet = getMessageBet(user.winner,user.matchID);
                        addBetDetails1(user.pseudo,user.matchID,user.stake,messageBet);
                    });
                }
            } else {
                $("#txStatus").text("YOU HAVE NOT BET ON ANY MATCH YET.");
            }

        });
    }

    function showAllUsers() {
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
                        user.balance = result[4] % 20000;

                        addBetDetails2(user.pseudo,user.numberBets,user.numberWinBets,user.balance);
                    });
                }
            } else {
                $("#txStatus").text("THERE IS NO USERS IN THIS BLOCKCHAIN.");
            }

        });
    }

</script>

<?php include '_foot.php'; ?>
