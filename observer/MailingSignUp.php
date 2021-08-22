<?php


namespace DesignPattern\observer;
class MailingSignUp implements Event
{
    use Eventable;
    public $user;

    public function __construct($user)
    {

        $this->user = $user;
    }

}
