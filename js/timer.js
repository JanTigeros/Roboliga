// Creating a cookie after the document is ready
$(document).ready(function() {
    createCookie("Onlysec", onlysec, "10");
});

var x;
var startstop = 0;
var button;

window.onload = function() {
    button = document.getElementById("start");
}

function startStop() { /* Toggle StartStop */

    startstop = startstop + 1;

    if (startstop === 1) {
        start();
        button.innerText = "Stop";
    } else if (startstop === 2) {
        button.innerText = "Start";
        startstop = 0;
        stop();
        $(document).ready(function() {
            createCookie("Onlysec", onlysec, "10");
        });
    }

}


function start() {
    x = setInterval(timer, 10);
} /* Start */

function stop() {
    clearInterval(x);
} /* Stop */

var milisec = 0;
var sec = 0; /* holds incrementing value */
var onlysec = 0;
var min = 0;
var hour = 0;

// localStorage.setItem("timer", onlysec);

/* Contains and outputs returned value of  function checkTime */

var miliSecOut = 0;
var secOut = 0;
var onlysec = 0;
var minOut = 0;
var hourOut = 0;

/* Output variable End */


function timer() {
    /* Main Timer */


    miliSecOut = checkTime(milisec);
    secOut = checkTime(sec);
    onlysecOut = checkTime(onlysec);
    minOut = checkTime(min);
    hourOut = checkTime(hour);

    milisec = ++milisec;

    if (milisec === 100) {
        milisec = 0;
        sec = ++sec;
        onlysec = ++onlysec;
    }

    if (sec == 60) {
        min = ++min;
        sec = 0;
    }

    if (min == 60) {
        min = 0;
        hour = ++hour;

    }


    document.getElementById("milisec").innerHTML = miliSecOut;
    document.getElementById("sec").innerHTML = secOut;
    document.getElementById("onlysec").innerHTML = onlysecOut;
    document.getElementById("min").innerHTML = minOut;
    document.getElementById("hour").innerHTML = hourOut;

    // Creating a cookie after the document is ready

}


/* Adds 0 when value is <10 */


function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

function reset() {


    /*Reset*/

    milisec = 0;
    sec = 0;
    onlysec = 0;
    min = 0
    hour = 0;

    document.getElementById("milisec").innerHTML = "00";
    document.getElementById("sec").innerHTML = "00";
    document.getElementById("onlysec").innerHTML = "00";
    document.getElementById("min").innerHTML = "00";
    document.getElementById("hour").innerHTML = "00";

}

// Function to create the cookie
function createCookie(name, value, days) {
    var expires;

    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        expires = "";
    }

    document.cookie = escape(name) + "=" +
        escape(value) + expires + "; path=/";
}