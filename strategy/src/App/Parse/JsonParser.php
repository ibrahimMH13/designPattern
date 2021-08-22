<?php


namespace DesignPattern\strategy\src\App\Parse;


use DesignPattern\strategy\src\App\Contract\ParseConfigInterface;

class JsonParser implements ParseConfigInterface
{

    public function parse($file)
    {
     return json_decode(file_get_contents($file),true);
    }
}
