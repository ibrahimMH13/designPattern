<?php


interface ValidatorWithArgument extends ValidatorInterface
{
    public function isSatisfiedBy($input,$arguments);
}
