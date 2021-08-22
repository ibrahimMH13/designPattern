<?php

namespace DesignPattern\observer;
class SubscribeUserToMailList implements Observer
{

    public function handel($event)
    {
        echo  "pure Observer# [{$event->user->getEmail()}] subscribed to our mail list successfully\n";
    }
}
