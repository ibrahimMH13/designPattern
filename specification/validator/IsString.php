<?php

namespace DesignPattern\specification\validator;
class IsString implements ValidatorWithNonArgument
{
    public function isSatisfiedBy($item){
        return is_string($item);
    }
}
