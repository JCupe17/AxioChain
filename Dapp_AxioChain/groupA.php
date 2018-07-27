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
                    Bet on your favorite Teams of <br/>the Group A <br/><span class="dark">AxioChain</span>
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
                <a href="./groupA.php" class="btn secondary full">
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
        $team1 = array("Russia"      ,"Egypt"  ,"Russia","Uruguay"     ,"Uruguay","Saudi Arabia");
        $team2 = array("Saudi Arabia","Uruguay","Egypt" ,"Saudi Arabia","Russia" ,"Egypt"       );
        $flagTeam1 = array("img/rus.png","img/egy.png","img/rus.png","img/uru.png","img/uru.png","img/ksa.png");
        $flagTeam2 = array("img/ksa.png","img/uru.png","img/egy.png","img/ksa.png","img/rus.png","img/egy.png");
        $dateMatch = array("14 Jun, 17:00","15 Jun, 14:00","19 Jun, 20:00","20 Jun, 17:00","25 Jun, 16:00","25 Jun, 16:00");
        $cityMatch = array("Moscow","Ekaterinburg","St Petersburg","Rostov-On-Don","Samara","Volgograd");
        $oddTeam1  = array(1.44,7.00,2.05, 1.20,2.25,5.00);
        $oddDraw   = array(4.30,3.70,3.15, 5.75,3.10,3.50);
        $oddTeam2  = array(9.00,1.60,3.80,15.00,3.40,1.72);

        for($i = 0; $i < count($team1); $i++){
            $gameID   = $i + 1;
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
                                <button id ='buttonBet' type='button' class='btn primary full disabled' onclick='betFunction($gameID)'>BET !</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>";

            echo "<div class='matches-area'>
                <div class='container'>
                    <div class='items'>

                        <div class='item'>
                            <div class='meta'>
                                <label class='label hidden-phone'>&nbsp;</label>
                                <button id ='buttonBet' type='button' class='btn secondary disabled' onclick='showMyBet($gameID)'>Show my BET on this match</button>
                            </div>
                            <div class='meta'>
                                <label class='label hidden-phone'>&nbsp;</label>
                                <button id ='buttonBet' type='button' class='btn secondary' onclick='showBetsMatch($gameID)'>Show ALL BETS on this match</button>
                            </div>
                        </div>

                    </div>

                    <div id=$itemID class='items'>
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

</div>

<script src="axiochain.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="functions.js"></script>
<script>

    var userAccount;
    var axiochainContract = web3.eth.contract(axiochainABI);
    var axioChain = axiochainContract.at(axiochainAddress);

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
                messageBet = getMessageBet(result.args.win,gameID);

                $("#txStatus"+gameID).text("Successful BET!");
                addBetDetails(gameID,result.args.blocknumber,result.args.pseudo,result.args.value,messageBet);

            } else {
                console.log(error);
            }
        });

    }

    function showBetsMatch(gameID) {
        // Cleaning div block
        document.getElementById('items'+gameID).innerHTML = "";

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
                    user.stake = result[1].c[0];

                    messageBet = getMessageBet(user.winner,gameID);
                    addBetDetails(user.matchID,user.matchID,user.pseudo,user.stake,messageBet);
                });
            }

        });
    }

    function showMyBet(gameID) {
        // Cleaning div block
        document.getElementById('items'+gameID).innerHTML = "";

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
                        user.stake = result[1].c[0];

                        if (user.matchID == gameID) {
                            messageBet = getMessageBet(user.winner,gameID);
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
