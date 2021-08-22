<?php

namespace DesignPattern\specification\validator;
interface ValidatorWithNonArgument extends ValidatorInterface
{
    public function isSatisfiedBy($item);
}
