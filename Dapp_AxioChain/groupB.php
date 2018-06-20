<?php include '_head.php'; ?>

<div class="match-area bg wrapper">

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
                    Bet on your favorite Teams of <br/>the Group B <br/><span class="dark">AxioChain</span>
                    <img src="img/logo-coin.png" alt=""/>
                </h1>
            </div>

            <div class="action">
                <a href="./whole.php" class="btn secondary full">
                    <img src="img/link.png" alt=""/>
                    Ranking
                </a>
            </div>

            <div class="action">
                <a href="./groupB.php" class="btn secondary full">
                    <img src="img/refresh.png" alt=""/>
                    Update
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <a href="./listGroups.php" class="back">
            <img src="img/arrow-left.png" alt=""/>
            Back to the Group List
        </a>
    </div>

    <div class="date-area">
        <div class="container">
            <div class="title">
            <span id="txStatus" class="inner">NOTE: Only one bet per match and per pseudo is allowed.</span>
            </div>
        </div>
    </div>

    <?php
        $team1 = array("Morocco","Portugal","Portugal","IR Iran","IR Iran" ,"Spain"  );
        $team2 = array("IR Iran","Spain"   ,"Morocco" ,"Spain"  ,"Portugal","Morocco");
        $flagTeam1 = array("img/mar.png","img/por.png","img/por.png","img/irn.png","img/irn.png","img/esp.png");
        $flagTeam2 = array("img/irn.png","img/esp.png","img/mar.png","img/esp.png","img/por.png","img/mar.png");
        $dateMatch = array("15 Jun, 17:00","15 Jun, 20:00","20 Jun, 14:00","20 Jun, 20:00","25 Jun, 20:00","25 Jun, 20:00");
        $cityMatch = array("St Petersburg","Sochi","Moscow","Kazan","Kaliningrad","Saransk");
        $oddTeam1  = array(2.25,4.60,1.62,17.00,8.75,1.35);
        $oddDraw   = array(2.95,3.30,3.70, 6.00,4.60,4.50);
        $oddTeam2  = array(3.85,1.92,5.75, 1.19,1.35,9.00);

        for($i = 0; $i < count($team1); $i++){
            $gameID   = $i + 1 + 6;
            $winnerID = 'winner' . $gameID;
            $amountID = 'betAmount' . $gameID;
            $textID   = 'txStatus' . $gameID;
            $itemID   = 'items' . $gameID;

            echo " <div class='container'>
                <div class='content-area'>
                    <div class='head'>
                        <span class='time'>$dateMatch[$i]</span>
                        <span class='name'><img src='img/ball.png' alt=''/>$cityMatch[$i]</span>
                    </div>

                    <h1 class='title'>$team1[$i] <img src='$flagTeam1[$i]' alt='' width='50' height='auto'/> vs <img src='$flagTeam2[$i]' alt='' width='50' height='auto'/>$team2[$i]</h1>

                    <form class='form'>

                        <div class='panel input'>
                            <div class='group'>
                                <label class='label'><img src='$flagTeam1[$i]' alt='' width='50' height='auto'/></label>
                                <label type='text' class='control'><strong>$oddTeam1[$i]</strong></label>
                            </div>

                            <div class='group'>
                                <label class='label'>Draw</label>
                                <label type='text' class='control'><strong>$oddDraw[$i]</strong></label>
                            </div>

                            <div class='group'>
                                <label class='label'><img src='$flagTeam2[$i]' alt='' width='50' height='auto'/></label>
                                <label type='text' class='control'><strong>$oddTeam2[$i]</strong></label>
                            </div>
                        </div>

                        <div class='panel submit'>
                            <div class='group winner'>
                                <label class='label'>Winner</label>
                                <div class='select'>
                                    <select id=$winnerID class='control'>
                                        <option value='1'>$team1[$i]</option>
                                        <option value='2'>$team2[$i]</option>
                                        <option value='0'>Draw</option>
                                    </select>
                                </div>
                            </div>

                            <div class='group amount'>
                                <label class='label'>Amount</label>
                                <div class='half'>
                                    <input id=$amountID type='text' class='control' placeholder='10'/>
                                    <img src='img/logo-coin.png' alt=''/>
                                </div>
                            </div>

                            <div class='group action'>
                                <label class='label hidden-phone'>&nbsp;</label>
                                <button id ='buttonBet' type='button' class='btn primary full' onclick='betFunction($gameID)'>BET !</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>";

            echo "<div class='matches-area'>
                <div class='container'>
                    <div id=$itemID class='items'>

                        <div class='item'>
                            <div class='meta'>
                                <label class='label hidden-phone'>&nbsp;</label>
                                <button id ='buttonBet' type='button' class='btn secondary' onclick='showMyBet($gameID)'>Show my BET on this match</button>
                            </div>
                            <div class='meta'>
                                <label class='label hidden-phone'>&nbsp;</label>
                                <button id ='buttonBet' type='button' class='btn secondary' onclick='showBetsMatch($gameID)'>Show ALL BETS on this match</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>";

            echo "<div class='date-area'>
                <div class='container'>
                    <div class='title'>
                    <span id=$textID class='inner'>---</span>
                    </div>
                </div>
            </div>";

        }

    ?>

    <!--<div class="container">
        <h2 class="block-title">
            <img src="img/link2.png" alt=""/>
            <img src="img/link2.png" alt=""/>
            <span class="text">Bets for this Group</span>
            <img src="img/link2.png" alt=""/>
            <img src="img/link2.png" alt=""/>
        </h2>
    </div>

    <div class="matches-area">
        <div class="container">
            <div id="items" class="items">

                <div class="item">
                    <div class="meta">
                        <div class="inner">
                            <span id="date2" class="date">29/03/2018</span>
                            <span class="dash">-</span>
                            <span id="time2" class="time">10h00</span>
                        </div>
                    </div>

                    <div class="name">
                        <div id="blocknumber" class="inner">
                            Block N°2014050
                        </div>
                    </div>

                    <div class="info">
                        <div class="inner">
                            <div id="part1" class="text">
                                Massi bet 20 Axiocoin on a draw
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>-->

</div>

<script src="axiochain.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="functions.js"></script>
<script>

    var userAccount;
    var axiochainContract = web3.eth.contract(axiochainABI);
    var axioChain = axiochainContract.at(axiochainAddress);

    var team1 = ["Morocco","Portugal","Portugal","IR Iran","IR Iran" ,"Spain"  ];
    var team2 = ["IR Iran","Spain"   ,"Morocco" ,"Spain"  ,"Portugal","Morocco"];

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

    function betFunction(gameID){
        // Interact with AxioChain Smart Contract
        $("#txStatus"+gameID).text("Processing bet into the blockchain. This may take a while...");

        var stake = parseInt($("#betAmount"+gameID).val());

        axioChain.games(gameID,function(error,result) {
            if (result[3] == 3) {
                axioChain.balanceOf(userAccount,function(error,result) {
                    if (result >= stake) {
                        axioChain.placeOrder(gameID,$("#winner"+gameID).val(), $("#betAmount"+gameID).val(), function(error, result) {
                            if(!error)
                                console.log(result);
                            else
                                console.error(error);
                        });
                    } else {
                        $("#txStatus"+gameID).text("REJECTED TRANSACTION - You do not have enough Tokens.");
                    }
                });
            } else {
                $("#txStatus"+gameID).text("REJECTED TRANSACTION - The match has finished or the bet was already closed.");
            }
        });

        var myEvent = axioChain.ErrorEvent({address: userAccount});
        myEvent.watch(function(error,result){
            if (!error) {
                console.log(result);
                switch (result.args._status.c["0"]) {
                    case 0: 
                        $("#txStatus"+gameID).text("Successful BET.");
                        break;
                    case 3:
                        $("#txStatus"+gameID).text("REJECTED TRANSACTION - You cannot bet twice for this match!");
                        break;
                    case 4:
                        $("#txStatus"+gameID).text("REJECTED TRANSACTION - You cannot bet for this match, The match has finished or has not been created.");
                        break;
                    case 5:
                        $("#txStatus"+gameID).text("REJECTED TRANSACTION - Your wallet address is not register in the smart contract of AxioChain.");
                        break;
                    default:
                        $("#txStatus"+gameID).text("ERROR - An unexpected status has ocurred.");
                }
            } else {
                console.log(error);
            }
        });

        var betEvent = axioChain.BetEvent({},'latest');
        betEvent.watch(function(error, result){
            if (!error && result.args.tipe==0 && result.args.gameID==gameID)
            {
                if(result.args.win==0) {
                    messageBet = "a DRAW";
                } else{
                    if(result.args.win==1) {
                        messageBet = "the victory of " + team1[gameID-1-6];
                    } else {
                        messageBet = "the victory of " + team2[gameID-1-6];
                    }
                }

                $("#txStatus"+gameID).text("Successful BET!");
                addBetDetails(gameID,result.args.blocknumber,result.args.pseudo,result.args.value,messageBet);

            } else {
                console.log(error);
            }
        });

    }

    function getUser(){
        // Interact with AxioChain Smart Contract
        var gameID = 1;
    }

    function addBetDetails(gameID,blockNumber,pseudo,stake,message){
        var divItem   = document.createElement('div');
        var divMeta   = document.createElement('div');
        var divInner1 = document.createElement('div');
        var divSpan1  = document.createElement('span');
        var divSpan2  = document.createElement('span');
        var divSpan3  = document.createElement('span');
        var divName   = document.createElement('div');
        var divSpan4  = document.createElement('span');
        var divInfo   = document.createElement('div');
        var divInner2 = document.createElement('div');
        var divSpan5  = document.createElement('span');

        var d = new Date();

        divItem.className   = 'item';
        divMeta.className   = 'meta';
        divInner1.className = 'inner';
        divSpan1.className  = 'date';
        divSpan2.className  = 'dash';
        divSpan3.className  = 'time';
        divName.className   = 'name';
        divSpan4.className  = 'inner';
        divInfo.className   = 'info';
        divInner2.className = 'inner';
        divSpan5.className  = 'text';

        var text1 = document.createTextNode(checkTime(d.getDay()) + '/' + checkTime(d.getMonth()) + '/' + d.getFullYear());
        var text2 = document.createTextNode("-");
        var text3 = document.createTextNode(checkTime(d.getHours()) + 'h' + checkTime(d.getMinutes()));
        var text4 = document.createTextNode("Block N° " + blockNumber);
        var text5 = document.createTextNode(pseudo + " bet " + stake + " AxioCoin on a " + message);

        divItem.appendChild(divMeta);
        divMeta.appendChild(divInner1);
        divInner1.appendChild(divSpan1);
        divSpan2.appendChild(text1);
        divInner1.appendChild(divSpan2);
        divSpan2.appendChild(text2);
        divInner1.appendChild(divSpan3);
        divSpan3.appendChild(text3);
        divItem.appendChild(divName);
        divName.appendChild(divSpan4);
        divSpan4.appendChild(text4);
        divItem.appendChild(divInfo);
        divInfo.appendChild(divInner2);
        divInner2.appendChild(divSpan5);
        divSpan5.appendChild(text5);

        document.getElementById('items'+gameID).appendChild(divItem);
    }

    function getBetDetails(betID) {
        var user = {};
        axioChain.bets(betID,function(error,result) {
            user.pseudo = result[4];
            user.matchID = result[3].c[0];
            user.winner = result[2].c[0];
            user.stake = result[1].c[0];

            addBetDetails(user.matchID,user.matchID,user.pseudo,user.stake,user.winner);
        });
    }

    function getBetsMatch(gameID){
        var betList = [];
        var i;
        axioChain.getBetsMatch(gameID,function(error,result) {
            for (i = 0; i < result.length; i++) {
                betList.push(result[i].c[0]);
            }
            console.log(betList.length);
        });
    }

    function getBetsUser(){
        var betList = [];
        var i;
        axioChain.getBetsUser(userAccount,function(error,result) {
            console.log(result);
            for (i = 0; i < result.length; i++) {
                betList.push(result[i].c[0]);
            }
            console.log(betList.length);
        });
    }

    function showBetsMatch(gameID) {
        var betList = [];
        var i;
        var user = {};
        axioChain.getBetsMatch(gameID,function(error,result) {
            for (i = 0; i < result.length; i++) {
                betList.push(result[i].c[0]);
            }

            for (betID of betList) {
                axioChain.bets(betID,function(error,result) {
                    user.pseudo = result[4];
                    user.matchID = result[3].c[0];
                    user.winner = result[2].c[0];
                    user.stake = result[1].c[0] % 1000;

                    messageBet = getMessageBet(user.winner,gameID-6);
                    addBetDetails(user.matchID,user.matchID,user.pseudo,user.stake,messageBet);
                });
            }

        });
    }

    function showMyBet(gameID) {
        var betList = [];
        var betID;
        var i;
        var user = {};
        var messageBet;

        axioChain.getBetsUser(userAccount,function(error,result) {
            if (result.length > 0) {
                for (i = 0; i < result.length; i++) {
                    betList.push(result[i].c[0]);
                    betID = result[i].c[0];
                    axioChain.bets(betID,function(error,result) {
                        user.pseudo = result[4];
                        user.matchID = result[3].c[0];
                        user.winner = result[2].c[0];
                        user.stake = result[1].c[0] % 1000;

                        if (user.matchID == gameID) {
                            messageBet = getMessageBet(user.winner,gameID-6);
                            addBetDetails(user.matchID,user.matchID,user.pseudo,user.stake,messageBet);
                        }
                    });
                }
            } else {
                $("#txStatus"+gameID).text("You have not bet on this match yet.");
            }

        });
    }

</script>

<?php include '_foot.php'; ?>
