<?php

namespace DesignPattern\observer\spl;
class MailingSignUpTwo extends SplEvent
{
    public $user;
    public function __construct($user)
    {
        parent::__construct();
        $this->user = $user;
    }


}
