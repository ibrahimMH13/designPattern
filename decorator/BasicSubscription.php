<?php


class BasicSubscription implements Subscription
{

    public function price()
    {
      return 7;
    }

    public function description()
    {
     return 'basic Subscription';
    }

}
