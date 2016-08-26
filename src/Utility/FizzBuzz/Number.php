<?php

namespace Utility\FizzBuzz;


class Number implements FizzBuzzElementInterface
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
