<?php
namespace DesignPattern\observer;
trait Eventable
{
    private $observers =[];
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        foreach ($this->observers as $inx=>$key){
            if ($key == $observer){
                unset($this->observers[$inx]);
            }
            $this->observers = array_values($this->observers);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer){
            $observer->handel($this);
        }
    }
}
