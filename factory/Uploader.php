<?php


class Uploader
{
    private $adapter;

    public function __construct($adapter)
    {

        $this->adapter = $adapter;
    }

    public function make(){

        return $this->adapter;
    }
}
