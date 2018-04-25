<?php include '_head.php'; ?>

<div class="match-area bg wrapper">

	<div class="search-area">
		<div class="container">
			<div class="date">Thursday March, 29th</div>

			<div id="time" class="time"></div>

			<form class="form search">
				<input type="search" name="s" class="control" placeholder="Search a team or a day"/>
				<button type="submit"><img src="img/glass.png" alt=""/></button>
			</form>
		</div>
	</div>

	<div class="heading-area">
		<div class="container">
			<div class="content">
				<h1 class="main-title">
					Bet on your favorite Teams with <span class="dark">AxioChain</span>
					<img src="img/logo-coin.png" alt=""/>
				</h1>
			</div>

			<div class="action">
				<a href="./whole.php" class="btn secondary full">
					<img src="img/link.png" alt=""/>
					Ledger
				</a>
			</div>

			<div class="action">
				<a href="./match1.php" class="btn secondary full">
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
            <span class="inner">WEDNESDAY APRIL, 03rd</span>
			</div>
		</div>
	</div>

    <div class="container">
        <div class="content-area">
            <div class="head">
                <span class="time">20:45</span>

                <span class="name">
                    <img src="img/ball.png" alt=""/>
                    Champions League
                </span>
            </div>

            <h1 class="title">Juventus Turin / Real Madrid</h1>

            <form class="form">

                <div class="panel input">
                    <div class="group">
                        <label class="label">1</label>
                        <label type="text" class="control">2,80</label>
                    </div>

                    <div class="group">
                        <label class="label">Draw</label>
                        <label type="text" class="control">3,10</label>
                    </div>

                    <div class="group">
                        <label class="label">2</label>
                        <label type="text" class="control">2,55</label>
                    </div>
                </div>

                <div class="panel submit">
                    <div class="group winner">
                        <label class="label">Winner</label>
                        <div class="select">
                            <select id="winner" class="control">
                                <option value="1">Juventus</option>
                                <option value="2">Real</option>
                                <option value="0">Draw</option>
                            </select>
                        </div>
                    </div>

                    <div class="group amount">
                        <label class="label">Amount</label>
                        <div class="half">
                            <input id="value" type="text" class="control" value="50"/>
                            <img src="img/logo-coin.png" alt=""/>
                        </div>
                    </div>

                    <div class="group action">
                        <label class="label hidden-phone">&nbsp;</label>
                        <button id ="buttonBet" type="button" class="btn primary full" onclick="bet()">BET !</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <div id="txStatus">NOTE: Remember, only one bet per match and per pseudo is allowed!!!</div>

    <div class="container">
        <h2 class="block-title">
            <img src="img/link2.png" alt=""/>
            <img src="img/link2.png" alt=""/>
            <span class="text">Blockchain for this Match</span>
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
                            <span class="date">29/03/2018</span>
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

                <div class="item">
                    <div class="meta">
                        <div class="inner">
                            <span class="date">27/03/2018</span>
                            <span class="dash">-</span>
                            <span class="time">15h41</span>
                        </div>
                    </div>

                    <div class="name">
                        <div class="inner">
                        Block N°2005870
                        </div>
                    </div>

                    <div class="info">
                        <div class="inner">
                            <div class="text">
                                Othmane bet 30 Axiocoin on the victory of Real
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="meta">
                        <div class="inner">
                            <span class="date">27/03/2018</span>
                            <span class="dash">-</span>
                            <span class="time">15h24</span>
                        </div>
                    </div>

                    <div class="name">
                        <div class="inner">
                            Block N°2005785 
                        </div>
                    </div>

                    <div class="info">
                        <div class="inner">
                            <div class="text">
                                vincent bet 50 Axiocoin a draw
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="axiochain.js"></script>
<script>

    var axioChain;
    var userAccount;

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

    function bet(){
        // Interact with AxioChain Smart Contract
        var axiochainContract = web3.eth.contract(axiochainABI);
        var gameID = 1;
        axioChain = axiochainContract.at(axiochainAddress);
        $("#txStatus").text("Processing bet!!!" + ($("#pseudo").val()) + " to the blockchain. This may take a while...");

        axioChain.placeOrder(gameID,$("#winner").val(), $("#value").val(), function(error, result){
            if(!error)
                console.log(result);
            else
                console.error(error);
        });

        var blokkEvent = axioChain.NewBlokkEvent({},'latest');
        blokkEvent.watch(function(error, result){
            if (!error && result.args.tipe==0 && result.args.gameID==gameID)
            {
                vh="the victory of Juventus";
                va="the victory of Real";
                vd="a draw";
                l="";
                if(result.args.win==0){l=vd;}
                else{
                    if(result.args.win==1){l=vh;}
                    else{l=va;}
                }
                $("#blocknumber").html('Block N°'+result.args.blocknumber);
                $("#part1").html(result.args.pseudo +' bet '+result.args.value+' Axiocoin on ' +l);
                var d= new Date();
                $("#time2").html(d.getHours()+'h'+d.getMinutes());
            } else {
                console.log(error);
            }
        });
    }

</script>

<?php include '_foot.php'; ?>
