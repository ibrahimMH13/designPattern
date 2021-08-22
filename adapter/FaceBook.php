<?php

namespace DesignPattern\adapter;

class FaceBook implements PlayerInterface
{

    public function getView(int $id)
    {
       return 15;
    }
}
