<?php

namespace DesignPattern\specification\validator;
interface ValidatorWithArgument extends ValidatorInterface
{
    public function isSatisfiedBy($input,$arguments);
}
