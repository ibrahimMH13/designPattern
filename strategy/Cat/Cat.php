<?php

namespace DesignPattern\strategy\Cat;
use DesignPattern\strategy\Cat\Contract\MoveInterface;
use DesignPattern\strategy\Cat\Contract\SoundInterface;

class Cat
{
    /**
     * @var SoundInterface
     */
    private $sound;
    /**
     * @var MoveInterface
     */
    private $move;

    public function __construct(SoundInterface $sound, MoveInterface $move)
    {

        $this->sound = $sound;
        $this->move = $move;
    }
    public function setMove(MoveInterface $move){
        $this->move = $move;
    }
    public function setSound(SoundInterface $sound){
        $this->sound = $sound;
    }
    public function sound(){
        return $this->sound->voice();
    }
    public function move(){
        return $this->move->jump();
    }
}
