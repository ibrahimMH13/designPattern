<?php

namespace DesignPattern\singleton;
class Singleton
{
    private static $instance;

    public static function getInstance(){
        if (is_null(self::$instance)) self::$instance = new static;
        return self::$instance;
    }

    protected function __construct()
    {
        //for deny make new instance with new className way
    }
    protected function __clone()
    {
        //for deny make clone from object
    }
}
