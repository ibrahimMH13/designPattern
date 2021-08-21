<?php


namespace DesignPattern\strategy\Cat\Actions\Sound;


use DesignPattern\strategy\Cat\Contract\SoundInterface;

class Growl implements SoundInterface
{

    public function voice()
    {
        return 'Growll!';
    }
}
