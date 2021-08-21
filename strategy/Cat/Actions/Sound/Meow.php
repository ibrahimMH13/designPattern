<?php


namespace DesignPattern\strategy\Cat\Actions\Sound;


use DesignPattern\strategy\Cat\Contract\SoundInterface;

class Meow implements SoundInterface
{

    public function voice()
    {
       return 'Meow!';
    }
}
