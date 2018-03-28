<?php include '_head.php'; ?>
<script src="./node_modules/web3/dist/web3.min.js"></script>
<div class="login-area bg wrapper">
	<div class="container">

		<div class="logo">
			<img src="img/logo-home.png" alt=""/>
		</div>

		<div class="description">The first online betting service based on a blockchain</div>

		<div class="title">Connection</div>

		<div class="items">
			<div class="item login">
				<form class="form validate" method="post">
					<div class="group">
						<input id="pseudo" type="text" name="username" class="control" placeholder="Pseudo" required/>
					</div>

					<div class="group">
						<input id="walladdress" type="text" name="address" class="control" placeholder="Wallet Address" required/>
					</div>

					
					<a id="button" href='./list.php' type="submit"  class="btn secondary full">
						<img src="img/v-green.png" alt=""/>
						CONFIRM
					</a>
				</form>
			</div>

			<div class="item register">
				<div class="inner">
					<div class="text">Not yet registered ?</div>

					<a href="#" class="btn info full">
						I'M REGISTERING
						<img src="img/arrow-right.png" alt=""/>
					</a>
				</div>
			</div>
		</div>

	</div>
</div>

<?php include '_foot.php'; ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

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


console.log('a');

$("#button").click(function() {
	console.log("on a cliqué");	
	
	
	Match.register($("#pseudo").val(), function(error, result){
		if(!error){
			console.log(result);
			}
		else{
			console.error(error);}
		
	});
});


</script>