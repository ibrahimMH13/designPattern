<?php


class IsActive
{
    public function isSatisfiedBy($item){
        return $item->active === true;
    }
}
