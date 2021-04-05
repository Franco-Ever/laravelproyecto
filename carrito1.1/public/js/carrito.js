let counter1=0;
let counter2=0;
let message="HEy para, tienes que dejar de clickear";

function countingClicks1(){
    document.getElementById("counting1").innerHTML=++counter1;

    if(counter>10)
    {
        document.getElementById("warning").innerHTML=message;
    }
}
function countingClicks2(){
    document.getElementById("counting2").innerHTML=++counter2;

    if(counter>10)
    {
        document.getElementById("warning").innerHTML=message;
    }
}
