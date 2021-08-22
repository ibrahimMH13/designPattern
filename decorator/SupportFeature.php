<?php

namespace DesignPattern\decorator;
class SupportFeature extends SubscriptionFeature
{

    public function price()
    {
        return $this->subscription->price() * 2;
    }

    public function description()
    {
       return $this->subscription->description() .' + Support';
    }
}
