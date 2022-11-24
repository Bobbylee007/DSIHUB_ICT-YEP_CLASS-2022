<?php


namespace Traits;

trait Notifiable
{
    public function notify($message)
    {
        echo $message;
    }
}
