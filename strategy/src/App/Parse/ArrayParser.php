<?php


namespace DesignPattern\strategy\src\App\Parse;


use DesignPattern\strategy\src\App\Contract\ParseConfigInterface;

class ArrayParser implements ParseConfigInterface
{

    public function parse($file)
    {
        return require $file;
    }
}
