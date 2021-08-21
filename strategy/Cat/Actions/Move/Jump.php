<?php


namespace DesignPattern\strategy\Cat\Actions\Move;


use DesignPattern\strategy\Cat\Contract\MoveInterface;

class Jump implements MoveInterface
{

    public function jump()
    {
     return 'Jump';
    }
}
