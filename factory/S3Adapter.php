<?php

namespace DesignPattern\factory;

class S3Adapter
{
    private $msg;
    public function upload($f,$d){
        return 'done with s3';
    }

    /**
     * @return mixed
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param mixed $msg
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }
}
