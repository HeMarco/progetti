var i = 0;
function countNumbers(){		//contatore conta fino a 100000
    if(i < 100000){
        i = i + 1;
        postMessage(i);
    }

    setTimeout("countNumbers()", 500);
}
countNumbers();