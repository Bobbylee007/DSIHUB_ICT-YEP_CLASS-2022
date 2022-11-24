<?php


namespace App;

// echo__DIR__.'/../traits/Notifiable.php';  //gives current directory or __FILE__
require_once(__DIR__.'/../traits/Notifiable.php');


use \Traits\Notifiable;

class Email
{
    use Notifiable;
}

// class Email
// {
//     use \Traits\Notifiable; //method 1
// }