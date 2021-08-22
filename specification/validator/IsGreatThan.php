<?php

namespace DesignPattern\specification\validator;
class IsGreatThan implements ValidatorWithArgument
{
    public function isSatisfiedBy($input,$arguments){

        return strlen($input) > $arguments[0];
    }
}
