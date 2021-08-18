<?php


class UploaderFactory
{
    /**
     * @var AdapterFactory
     */
    private $factory;

    public function __construct(AdapterFactory $factory)
    {

        $this->factory = $factory;
    }

    public function make(Config $config){
     return new Uploader($this->factory->make($config));
    }
}
