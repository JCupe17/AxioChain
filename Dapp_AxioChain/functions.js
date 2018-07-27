function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

function setHour(timeID,dateID){
    var today = new Date();
    var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
    var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];

    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    // add a zero in front of numbers<10
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById(timeID).innerHTML = h + ":" + m + ":" + s;
    document.getElementById(dateID).innerHTML = days[today.getDay()] + ", " + today.getDate() + " " + months[today.getMonth()] + " " + today.getFullYear();
    t = setTimeout(function() {
      setHour(timeID,dateID)
    }, 500);
}

function getWinner(prediction,gameID) {
    var teams = [["Russia"      ,"Egypt"  ,"Russia","Uruguay"     ,"Uruguay","Saudi Arabia","Morocco","Portugal","Portugal","IR Iran","IR Iran" ,"Spain"  ,"France"   ,"Peru"   ,"Denmark"  ,"France","Denmark","Australia","Argentina","Croatia","Argentina","Nigeria","Nigeria"  ,"Iceland","Costa Rica","Brazil"     ,"Brazil"    ,"Serbia"     ,"Serbia","Switzerland","Germany","Sweden"        ,"Korea Republic","Germany","Korea Republic","Mexico","Belgium","Tunisia","Belgium","England","Panama" ,"England","Colombia","Poland" ,"Japan"  ,"Poland"  ,"Japan" ,"Senegal" ,"France","Uruguay","Spain","Croatia","Brazil","Belgium","Sweden","Colombia","Uruguay","Brazil" ,"Sweden" ,"Russia" ,"France","Croatia","Belgium","France"],["Saudi Arabia","Uruguay","Egypt" ,"Saudi Arabia","Russia" ,"Egypt"       ,"IR Iran","Spain"   ,"Morocco" ,"Spain"  ,"Portugal","Morocco","Australia","Denmark","Australia","Peru"  ,"France" ,"Peru"     ,"Iceland"  ,"Nigeria","Croatia"  ,"Iceland","Argentina","Croatia","Serbia"    ,"Switzerland","Costa Rica","Switzerland","Brazil","Costa Rica" ,"Mexico" ,"Korea Republic","Mexico"        ,"Sweden" ,"Germany"       ,"Sweden","Panama" ,"England","Tunisia","Panama" ,"Tunisia","Belgium","Japan"   ,"Senegal","Senegal","Colombia","Poland","Colombia","Argentina","Portugal","Russia","Denmark","Mexico","Japan","Switzerland","England","France" ,"Belgium","England","Croatia","Belgium","England","England","Croatia"]];

    return teams[prediction-1][gameID-1];
}

function getMessageBet(prediction,gameID) {

    var messageBet;

    if (prediction == 0) {
        messageBet = "a DRAW";
    } else{
        messageBet = "the victory of " + getWinner(prediction,gameID);
    }
    return messageBet;
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
    var text4 = document.createTextNode("Match N° " + blockNumber);
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

function addBetDetails1(gameID,pseudo,stake,message){
    var divItem   = document.createElement('div');
    var divMeta   = document.createElement('div');
    var divInner1 = document.createElement('div');
    var divSpan1  = document.createElement('span');
    var divSpan2  = document.createElement('span');
    var divSpan3  = document.createElement('span');
    var divName1  = document.createElement('div');
    var divSpan4  = document.createElement('span');
    var divName2  = document.createElement('div');
    var divSpan5  = document.createElement('span');
    var divInfo   = document.createElement('div');
    var divInner2 = document.createElement('div');
    var divSpan6  = document.createElement('span');

    var d = new Date();

    divItem.className   = 'item';
    divMeta.className   = 'meta';
    divInner1.className = 'inner';
    divSpan1.className  = 'date';
    divSpan2.className  = 'dash';
    divSpan3.className  = 'time';
    divName1.className  = 'name';
    divSpan4.className  = 'inner';
    divName2.className  = 'name';
    divSpan5.className  = 'inner';
    divInfo.className   = 'info';
    divInner2.className = 'inner';
    divSpan6.className  = 'text';

    var text1 = document.createTextNode("Match N°");
    var text2 = document.createTextNode(":");
    var text3 = document.createTextNode(gameID);
    var text4 = document.createTextNode(pseudo);
    var text5 = document.createTextNode(stake + " AXC");
    var text6 = document.createTextNode(message);

    divItem.appendChild(divMeta);
    divMeta.appendChild(divInner1);
    divInner1.appendChild(divSpan1);
    divSpan2.appendChild(text1);
    divInner1.appendChild(divSpan2);
    divSpan2.appendChild(text2);
    divInner1.appendChild(divSpan3);
    divSpan3.appendChild(text3);
    divItem.appendChild(divName1);
    divName1.appendChild(divSpan4);
    divSpan4.appendChild(text4);
    divItem.appendChild(divName2);
    divName2.appendChild(divSpan5);
    divSpan5.appendChild(text5);
    divItem.appendChild(divInfo);
    divInfo.appendChild(divInner2);
    divInner2.appendChild(divSpan6);
    divSpan6.appendChild(text6);

    document.getElementById('items'+gameID).appendChild(divItem);
}

function addBetDetails2(gameID,pseudo,stake,winner,message) {
    var divItem   = document.createElement('div');
    var divName1  = document.createElement('div');
    var divSpan1  = document.createElement('span');
    var divName2  = document.createElement('div');
    var divSpan2  = document.createElement('span');
    var divName3  = document.createElement('div');
    var divSpan3  = document.createElement('span');
    var divInfo   = document.createElement('div');
    var divInner  = document.createElement('div');
    var divSpan4  = document.createElement('span');

    divItem.className   = 'item';
    divName1.className  = 'name';
    divSpan1.className  = 'inner';
    divName2.className  = 'name';
    divSpan2.className  = 'inner';
    divName3.className  = 'name';
    divSpan3.className  = 'inner';
    divInfo.className   = 'info';
    divInner.className  = 'inner';
    divSpan4.className  = 'text';

    var text1 = document.createTextNode(pseudo);
    var text2 = document.createTextNode(stake + ' AXC');
    var text3 = document.createTextNode(winner);
    var text4 = document.createTextNode(message);

    divItem.appendChild(divName1);
    divName1.appendChild(divSpan1);
    divSpan1.appendChild(text1);
    divItem.appendChild(divName2);
    divName2.appendChild(divSpan2);
    divSpan2.appendChild(text2);
    divItem.appendChild(divName3);
    divName3.appendChild(divSpan3);
    divSpan3.appendChild(text3);
    divItem.appendChild(divInfo);
    divInfo.appendChild(divInner);
    divInner.appendChild(divSpan4);
    divSpan4.appendChild(text4);

    document.getElementById('items'+gameID).appendChild(divItem);
}



