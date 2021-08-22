<?php

namespace DesignPattern\specification;
class IsActive
{
    public function isSatisfiedBy($item){
        return $item->active === true;
    }
}
