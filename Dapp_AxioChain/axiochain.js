var axiochainABI = [{"constant":true,"inputs":[],"name":"name","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_value","type":"uint256"}],"name":"approve","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"games","outputs":[{"name":"gameID","type":"uint8"},{"name":"homeTeamGoals","type":"uint8"},{"name":"awayTeamGoals","type":"uint8"},{"name":"result","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_gameID","type":"uint8"}],"name":"updateCote","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"bets","outputs":[{"name":"betID","type":"uint32"},{"name":"stake","type":"uint32"},{"name":"win","type":"uint8"},{"name":"matchID","type":"uint8"},{"name":"pseudo","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_from","type":"address"},{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transferFrom","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"users","outputs":[{"name":"pseudo","type":"string"},{"name":"userID","type":"uint8"},{"name":"numberBets","type":"uint16"},{"name":"numberWinBets","type":"uint16"},{"name":"balance","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"_gameID","type":"uint8"}],"name":"getTotalBetPerMatch","outputs":[{"name":"","type":"uint32"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_gameID","type":"uint256"}],"name":"retributeOld","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"version","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"result","type":"uint8"},{"name":"_betIds","type":"uint32[]"}],"name":"getSum","outputs":[{"name":"sum","type":"uint32"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_gameID","type":"uint256"},{"name":"odd","type":"uint16"}],"name":"retribute","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"}],"name":"balanceOf","outputs":[{"name":"balance","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"_gameID","type":"uint256"}],"name":"getNumberBetsPerMatch","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"_gameID","type":"uint256"}],"name":"getBetsMatch","outputs":[{"name":"","type":"uint32[]"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"_from","type":"address"}],"name":"getNumberBetsPerUser","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_gameID","type":"uint8"},{"name":"win","type":"uint8"},{"name":"_value","type":"uint32"}],"name":"placeOrder","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transfer","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_pseudo","type":"string"}],"name":"getAddresssFromPseudo","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"_from","type":"address"}],"name":"getPseudoFromAddress","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_amount","type":"uint32"}],"name":"setInitialAmount","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_value","type":"uint256"},{"name":"_extraData","type":"bytes"}],"name":"approveAndCall","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"getNumberGames","outputs":[{"name":"","type":"uint16"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_gameID","type":"uint8"}],"name":"createMatch","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"},{"name":"_spender","type":"address"}],"name":"allowance","outputs":[{"name":"remaining","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_gameID","type":"uint256"},{"name":"homeGoals","type":"uint8"},{"name":"awayGoals","type":"uint8"}],"name":"updateStatus","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_from","type":"address"}],"name":"getUserIDFromAddress","outputs":[{"name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"_gameID","type":"uint8"}],"name":"getCote","outputs":[{"name":"","type":"uint16[3]"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"_from","type":"address"}],"name":"getBetsUser","outputs":[{"name":"","type":"uint256[]"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_pseudo","type":"string"}],"name":"register","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"getNumberUsers","outputs":[{"name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"payable":true,"stateMutability":"payable","type":"fallback"},{"anonymous":false,"inputs":[{"indexed":false,"name":"coted","type":"uint16"},{"indexed":false,"name":"coteh","type":"uint16"},{"indexed":false,"name":"cotea","type":"uint16"}],"name":"Cote","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"a","type":"uint32"},{"indexed":false,"name":"_reward","type":"uint32"},{"indexed":false,"name":"cote","type":"uint16"}],"name":"DebugEvent","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"pseudo","type":"string"},{"indexed":false,"name":"tipe","type":"uint256"},{"indexed":false,"name":"value","type":"uint256"},{"indexed":false,"name":"win","type":"uint8"},{"indexed":false,"name":"gameID","type":"uint256"},{"indexed":false,"name":"blocknumber","type":"uint256"}],"name":"BetEvent","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"_from","type":"address"},{"indexed":true,"name":"_to","type":"address"},{"indexed":false,"name":"_value","type":"uint256"}],"name":"Transfer","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"_owner","type":"address"},{"indexed":true,"name":"_spender","type":"address"},{"indexed":false,"name":"_value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"_from","type":"address"},{"indexed":false,"name":"_pseudo","type":"string"},{"indexed":false,"name":"_status","type":"uint8"}],"name":"ErrorEvent","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"gameID","type":"uint8"},{"indexed":false,"name":"blockNumber","type":"uint256"}],"name":"NewGameEvent","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"previousOwner","type":"address"},{"indexed":true,"name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"}];

var axiochainAddress = '0x48e7e81ae117f08af70f29e2109dc78de3f70646';
