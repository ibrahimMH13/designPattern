<?php


abstract class SubscriptionFeature implements Subscription
{

    /**
     * @var Subscription
     */
    protected $subscription;

    public function __construct(Subscription $subscription)
    {

        $this->subscription = $subscription;
    }

    abstract public function price();
    abstract public function description();
}
