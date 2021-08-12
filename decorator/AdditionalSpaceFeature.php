<?php


class AdditionalSpaceFeature extends SubscriptionFeature
{

    public function price()
    {
    return  $this->subscription->price() * 5;
    }

    public function description()
    {
     return $this->subscription->description() . ' + Additional Space Feature';
    }
}
