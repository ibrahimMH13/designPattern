<?php


class YouTube implements PlayerInterface
{
    public function getViewCount($id){
        return 5000;
    }

    public function getView(int $id)
    {
       return 100;
    }
}
