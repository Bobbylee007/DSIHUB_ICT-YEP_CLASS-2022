<?php
//TRAITS are xters php only extend only one class but use trails to extend multiple classes called polymorphic
//access modifier dont matters
trait Notifiable{
    public function notify($message)
    {
        echo $message;
    }
}


class SMS
{
    use Notifiable;
}

class EMAIL
{

    use Notifiable;

}

class PushNOtification
{
    use Notifiable;

}

class ONLINE
{

    use Notifiable;

}

$sms = new SMS();
$sms->notify("We are doing a promo, dial *1526*123# to stand a chance to win a car.<br>");

$email = new EMAIL();
$sms->notify("Buy our stuff online, dial *1526*123# to stand a chance to win a car.<br>");

$push = new PushNOtification();
$push->notify("Free delivering, dial *1526*123# to stand a chance to win a car. <br>");

$online= new ONLINE();
$sms->notify("Buy our stuff online, dial *1526*123# to stand a chance to win a car.<br>");






