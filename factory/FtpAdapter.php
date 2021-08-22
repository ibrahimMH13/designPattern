<?php

namespace DesignPattern\factory;

class FtpAdapter
{
    public function upload($f,$d){
        return 'done with ftp';
    }

}
