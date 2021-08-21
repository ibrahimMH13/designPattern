<?php


class UpdateMailingDatabaseTwo implements SplObserver
{

    public function update(SplSubject $subject)
    {
        echo  "php Engine Observer# mail status db for {$subject->user->getUserId()} updated \n";
    }
}
