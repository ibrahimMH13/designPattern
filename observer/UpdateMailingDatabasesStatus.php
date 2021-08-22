<?php

namespace DesignPattern\observer;
class UpdateMailingDatabasesStatus implements Observer
{

    public function handel($event)
    {
      echo  "pure Observer# mail status db for {$event->user->getUserId()} updated \n";
    }
}
