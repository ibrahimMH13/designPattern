<?php

namespace DesignPattern\specification\validator;
class Validator
{
    protected $roles = [];
    protected $input;

    public function __call($name, $arguments)
    {
        $this->roles[] = [
            'object'   => $this->getRule($name),
            'argument' => $arguments,
        ];
        return $this;
    }

    public function getRule($rule)
    {
        $class = "DesignPattern\\specification\\validator\\{$rule}";
        return  new $class;
    }

    public function withInput($input)
    {
        $this->input = $input;
        return $this;
    }

    public function isValid()
    {
        foreach ($this->roles as $role) {
            if (!$role['object']->isSatisfiedBy($this->input, $role['argument'])) {
                return false;
            }
        }
        return true;
    }

}
