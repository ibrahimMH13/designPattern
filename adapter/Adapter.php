<?php


class Adapter
{
    /**
     * @var PlayerInterface
     */
    private $player;

    public function __construct(PlayerInterface $player)
    {

        $this->player = $player;
    }

    public function views($id){
      return  $this->player->getView($id);
    }
}
