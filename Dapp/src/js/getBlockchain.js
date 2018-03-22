var blokks = [ 
    {address : 0000, tip:0,value:0,win:0,game_ID:0,blocknumber:0}
     
]


if (typeof web3 !== 'undefined') {
    web3 = new Web3(web3.currentProvider);
} else {
    // set the provider you want from Web3.providers
    web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
}

web3.eth.defaultAccount = web3.eth.accounts[0];

var matchContract = web3.eth.contract([{"constant":true,"inputs":[],"name":"name","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_value","type":"uint256"}],"name":"approve","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_from","type":"address"},{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transferFrom","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_gameID","type":"uint256"},{"name":"win","type":"uint8"},{"name":"_value","type":"uint256"}],"name":"placeOrder","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"version","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"}],"name":"balanceOf","outputs":[{"name":"balance","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transfer","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_value","type":"uint256"},{"name":"_extraData","type":"bytes"}],"name":"approveAndCall","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_gameID","type":"uint8"}],"name":"createMatch","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"},{"name":"_spender","type":"address"}],"name":"allowance","outputs":[{"name":"remaining","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_gameID","type":"uint256"},{"name":"homeGoals","type":"uint8"},{"name":"awayGoals","type":"uint8"}],"name":"updateStatus","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_gameID","type":"uint256"}],"name":"retribute","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"payable":true,"stateMutability":"payable","type":"fallback"},{"anonymous":false,"inputs":[{"indexed":false,"name":"betID","type":"uint32"},{"indexed":false,"name":"stake","type":"uint256"},{"indexed":false,"name":"win","type":"uint8"},{"indexed":false,"name":"sender","type":"address"}],"name":"NewBetEvent","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"_from","type":"address"},{"indexed":true,"name":"_to","type":"address"},{"indexed":false,"name":"_value","type":"uint256"}],"name":"Transfer","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"_owner","type":"address"},{"indexed":true,"name":"_spender","type":"address"},{"indexed":false,"name":"_value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"sender","type":"address"},{"indexed":false,"name":"tipe","type":"uint256"},{"indexed":false,"name":"value","type":"uint256"},{"indexed":false,"name":"win","type":"uint8"},{"indexed":false,"name":"gameID","type":"uint256"},{"indexed":false,"name":"blocknumber","type":"uint256"}],"name":"NewBlokkEvent","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"previousOwner","type":"address"},{"indexed":true,"name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"}]);
var Match = matchContract.at('0x1b9f98188efbb4d1dd5b847796e977e73ec5931c');
console.log(Match);

var blockEvent = Match.NewBlokkEvent({},'latest');

blockEvent.watch(function(error, result){
    if (!error)
        {
            vh="the victory of PSG";
            va="the victory of OM";
            vd="a draw";
            l="";
            if(result.args.win==0){l=vd;}
            else{ if(result.args.win==1){l=vh;}
                else{l=va;}
                }
            j="";
            if(result.args.tipe==0){
                j=" bet ";
            }
            else{j=" won "}
            $("#blokk").html('At Block n°:'+result.args.blocknumber+': '+result.args.sender+j+ result.args.value + ' Axiocoin on '+l+" for the game "+"PSG-OM");
        } else {
            
            console.log(error);
        }
});

$("#button").click(function() {
    $("#loader").show();
    l=0;
    if($("#team").val()=="PSG"){
        l=1;
    }
    else{if($("#team").val()=="OM"){
        l=2;
    }

    }
    Match.placeOrder(1,l, $("#value").val());
    
});

