<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    echo "<h1>Regristration Successful</h1>";
    echo "<div>Your details are:</div>";
    echo "<div>Name:" . htmlspecialchars($_POST['name']). "</div>";   // but wen include (htmlspecialchat) help filter a malicious code or hacks 
    echo "<div>Email:" .$_POST['email']. "</div>";
    echo "<div>Password:" .$_POST['password']. "</div>";

}else {

    echo "<h1>We only accept post requests</h1>";
}












?>