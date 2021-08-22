<?php

namespace DesignPattern\singleton;

class AppConfig extends Singleton
{
    public $data =[
        'db'=>[
            'host'=>'1.1.1.1'
        ]
    ];

}
