<?php


interface ValidatorWithNonArgument extends ValidatorInterface
{
    public function isSatisfiedBy($item);
}
