<?php


$date = date('H');

function greet($time)
{
    echo "Good $time";
}

if($date < '12') {
    greet("morning");

}else if($date < "16") {
    greet("Afternoon");
}else if($date < "20") {
    greet("evening");
}else {
    greet('night');
}


// echo $date;



function showColor($color){
    echo "\nyour favorite color is $color";
}


$randomIndex = rand(0, 4);

$arr = ['red','green','black','blue','pink'];

switch($arr[$randomIndex]){
    case"red":
        showColor("red");
        break;

    case"green":
        showColor("green");
        break;

    case"black":
        showColor("black");
        break;
    
    case"blue":
        showColor("blue");
        break;

    case"pink":
        showColor("pink");
        break;

   default:
        echo "you are confused";
};


echo "\n\n";

//for index arr
foreach($arr as $item) {
    echo $item. "\n";

}



foreach($arr as $key => $value){
    echo "the key is: $key \n";
    echo "the color is: $value";
    echo "\n------------------\n";
}











?>