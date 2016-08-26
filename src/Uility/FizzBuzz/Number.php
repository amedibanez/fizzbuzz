<?php

namespace Utility\FizzBuzz;


class Number implements FizzBuzzElement
{
    /**
     * @var int
     */
    private $number;

    public function __construct($value)
    {
        $this->number = $value;
    }

    public function printValue()
    {
        return $this->number;
    }
}
