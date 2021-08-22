<?php


namespace DesignPattern\strategy\src\App\config;


use DesignPattern\strategy\src\App\Contract\ParseConfigInterface;

class Config
{
    /**
     * @var ParseConfigInterface
     */
    private $config;
    /**
     * @var ParseConfigInterface
     */
    private $parser;

    public function __construct(ParseConfigInterface $parser)
    {

       $this->setParser($parser);
    }

    public function setParser(ParseConfigInterface $parser){
        $this->parser = $parser;
    }

    public function load($file){
        $this->config = $this->parser->parse($file);
    }
}
