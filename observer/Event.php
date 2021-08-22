<?php

namespace DesignPattern\observer;
interface Event
{
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}
