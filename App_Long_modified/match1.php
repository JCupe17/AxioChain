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
                        <a id ="button" type="submit" class="btn primary full">BET !</a>
                    </div>
                </div>

            </form>
        </div>
    </div>


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
<script>





if (typeof web3 !== 'undefined') {
    web3 = new Web3(web3.currentProvider);
} else {
    // set the provider you want from Web3.providers
    web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:3000"));
}

web3.eth.defaultAccount = web3.eth.accounts[0];

var axiochainContract = web3.eth.contract([{"constant":true,"inputs":[],"name":"name","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_value","type":"uint256"}],"name":"approve","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"","type":"address"}],"name":"pseudos","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"games","outputs":[{"name":"gameID","type":"uint8"},{"name":"homeTeamGoals","type":"uint8"},{"name":"awayTeamGoals","type":"uint8"},{"name":"result","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_gameID","type":"uint8"}],"name":"updateCote","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"gameIDs","outputs":[{"name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"bets","outputs":[{"name":"betID","type":"uint32"},{"name":"stake","type":"uint32"},{"name":"win","type":"uint8"},{"name":"sender","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_from","type":"address"},{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transferFrom","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"version","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"result","type":"uint8"},{"name":"_betIds","type":"uint32[]"}],"name":"getSum","outputs":[{"name":"sum","type":"uint32"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"}],"name":"balanceOf","outputs":[{"name":"balance","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_gameID","type":"uint256"},{"name":"win","type":"uint8"},{"name":"_value","type":"uint32"}],"name":"placeOrder","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transfer","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_value","type":"uint256"},{"name":"_extraData","type":"bytes"}],"name":"approveAndCall","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_gameID","type":"uint8"}],"name":"createMatch","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"},{"name":"_spender","type":"address"}],"name":"allowance","outputs":[{"name":"remaining","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_gameID","type":"uint256"},{"name":"homeGoals","type":"uint8"},{"name":"awayGoals","type":"uint8"}],"name":"updateStatus","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_gameID","type":"uint256"}],"name":"retribute","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_gameID","type":"uint8"}],"name":"getCote","outputs":[{"name":"","type":"uint16[3]"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"pseudo","type":"string"}],"name":"register","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"payable":true,"stateMutability":"payable","type":"fallback"},{"anonymous":false,"inputs":[{"indexed":false,"name":"coted","type":"uint16"},{"indexed":false,"name":"coteh","type":"uint16"},{"indexed":false,"name":"cotea","type":"uint16"}],"name":"Cote","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"a","type":"uint32"},{"indexed":false,"name":"_reward","type":"uint32"},{"indexed":false,"name":"cote","type":"uint16"}],"name":"DebugEvent","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"_from","type":"address"},{"indexed":true,"name":"_to","type":"address"},{"indexed":false,"name":"_value","type":"uint256"}],"name":"Transfer","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"_owner","type":"address"},{"indexed":true,"name":"_spender","type":"address"},{"indexed":false,"name":"_value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"pseudo","type":"string"},{"indexed":false,"name":"tipe","type":"uint256"},{"indexed":false,"name":"value","type":"uint256"},{"indexed":false,"name":"win","type":"uint8"},{"indexed":false,"name":"gameID","type":"uint256"},{"indexed":false,"name":"blocknumber","type":"uint256"}],"name":"NewBlokkEvent","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"previousOwner","type":"address"},{"indexed":true,"name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"}]);
var Match = axiochainContract.at('0xecf2cfa7166e229d03ea2bd54558455a7696a5f1');
console.log(Match);

var blokkEvent = Match.NewBlokkEvent({},'latest');

blokkEvent.watch(function(error, result){
    if (!error && result.args.tipe==0 && result.args.gameID==1)
        {
            vh="the victory of Juventus";
            va="the victory of Real";
            vd="a draw";
            l="";
            if(result.args.win==0){l=vd;}
            else{ if(result.args.win==1){l=vh;}
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

$("#button").click(function() {
    






    l=$("#winner").val();

    
    
    console.log(l);
    Match.placeOrder(1,l, $("#value").val(), function(error, result){
        if(!error){
            console.log(result);}
        else{
            console.error(error);}
    });
});


</script>






<?php include '_foot.php'; ?>

