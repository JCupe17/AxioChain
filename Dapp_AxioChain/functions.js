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

