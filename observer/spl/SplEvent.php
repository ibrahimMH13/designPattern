<?php


abstract  class SplEvent implements SplSubject
{
    /**
     * @var SplObjectStorage
     */
    private $storage;

    public function __construct()
    {
        $this->storage = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
       $this->storage->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        if (!$this->storage->contains($observer))return;
        $this->storage->detach($observer);
    }

    public function notify()
    {
      if (!$this->storage->count()) return;
      foreach ($this->storage as $observer){
          $observer->update($this);
      }
    }

}
