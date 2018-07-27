<?php include '_headHome.php'; ?>
<div class="login-area bg wrapper">
    <div class="container">

        <div class="logo">
            <img src="img/logo-home.png" alt=""/>
        </div>

        <div class="description">An online betting service based on a blockchain</div>

        <div class="title">Connection</div>

        <div id="txStatus">Be sure that you use the same pseudo that you registered with your wallet address.</div>
        <div >---</div>

        <div class="items">
            <div class="item login">
                <form class="form validate" method="post">
                    <div class="group">
                        <input id="pseudo" type="text" name="username" class="control" placeholder="Pseudo" required/>
                    </div>

                    <div class="group">
                        <input id="walladdress" type="text" name="address" class="control" placeholder="Wallet Address" required/>
                    </div>

                    <button id="buttonConfirm" type="button"  class="btn secondary full disabled" onclick="register()">
                        <img src="img/v-green.png" alt=""/>
                        REGISTER
                    </button>

                </form>
            </div>

            <div class="item register">
                <div class="inner">
                    <!--<div class="text">
                        <input id="pseudoLog" type="text" name="username" class="control" placeholder="Pseudo" required/>
                    </div>

                    <button id="buttonLog" type="button" class="btn info full" onclick="logIn()">
                        LOG IN
                        <img src="img/arrow-right.png" alt=""/>
                    </button>-->

                    <a href="./list.php" class="btn info full">VISIT THE WEB PAGE</a>
                </div>
            </div>
        </div>

        <div >
            <p align="justify">
                <b><u>NOTE 1:</u></b> This website was implemented for the 2018 Soccer World Cup and it is not used anymore. 
                Only the transactions that use public information from the blockchain are still functional.
            </p>

            <p align="justify">
                <b><u>NOTE 2:</u></b> To navigate in this website you should still install the <b><a href="https://metamask.io/">METAMASK</a></b> plugin which will allow you to interact with
                the Ethereum blockchain. You do not need to create an account or a cryptowallet. All you have to do is to add the plugin, to accept the conditions and
                to change the default network to <b>Rinkeby Test Network</b>.
            </p>
        </div>

        <!--<div >
            If you want to participate and receive a wallet address to bet on your favorite team please fill the form available <strong><a href="https://docs.google.com/forms/d/e/1FAIpQLScyDhGpvenX-mjpjEvV6SqIVV31Dv0UlKNjM5ALFuLHh_TzBA/viewform">here</a></strong>. <br/>
            Once you received your wallet address, you are just a few clicks away from your first bet ! Just follow the tutorial <strong><a href="https://sites.google.com/axionable.com/axiochain-user-guide/accueil">here</a></strong>. <br/>
        </div>-->

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
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

    function register() {
        // Interact with AxioChain Smart Contract
        var axiochainContract = web3.eth.contract(axiochainABI);
        axioChain = axiochainContract.at(axiochainAddress);
        $("#txStatus").text("Adding the pseudo " + ($("#pseudo").val()) + " to the blockchain. This may take a while...");

        axioChain.register($("#pseudo").val(), function(error,result) {
            if (!error)
                console.log(result);
            else
                console.log(error);
        });

        var myEvent = axioChain.ErrorEvent({address: userAccount});
        myEvent.watch(function(error,result){
            if (!error) {
                console.log(result);
                switch (result.args._status.c["0"]) {
                    case 0: 
                        $("#txStatus").text("Successful registration!!!");
                        window.location.href = './list.php';
                        break;
                    case 1:
                        $("#txStatus").text("Rejected transaction - The pseudo " + result.args._pseudo + " already exist!!!");
                        break;
                    case 2:
                        $("#txStatus").text("Registration ERROR!!! - The wallet address is alredy used.");
                        break;
                    default:
                        $("#txStatus").text("Registration ERROR!!! - An unexpected status has ocurred - Sorry!!!.");
                }
            } else {
                console.log(error);
            }
        });
    }

    function logIn() {
        // Interact with AxioChain Smart Contract
        var axiochainContract = web3.eth.contract(axiochainABI);
        axioChain = axiochainContract.at(axiochainAddress);
        $("#txStatus").text("Checking if the pseudo " + ($("#pseudoLog").val()) + " exists in AxioChain. This may take a while...");

        //var add = axioChain.getAddresssFromPseudo($("#pseudoLog").val());
        //console.log(add);
        axioChain.getAddresssFromPseudo($("#pseudoLog").val(), function(error,result) {
            console.log(result);
            if (!error) {
                console.log(result);
                if (result == userAccount) {
                    window.location.href = './list.php';
                } else {
                    if (result == 0)
                        $("#txStatus").text("The pseudo " + ($("#pseudoLog").val()) + " does not exist in AxioChain. Please register it using a wallet address first.");
                    else
                        $("#txStatus").text("The pseudo " + ($("#pseudoLog").val()) + " was registered with another wallet. Please use the correct wallet address in Metamask.");
                }
            } else {
                console.log(error);
            }
        });

    }

</script>

<?php include '_foot.php'; ?>
