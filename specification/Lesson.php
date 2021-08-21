<?php


class Lesson
{

    /**
     * @var bool
     */
    public $active;

    public function __construct($active = true)
    {

        $this->active = $active;
    }
}
