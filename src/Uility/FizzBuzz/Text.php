<?php

namespace Utility\FizzBuzz;


class Text implements FizzBuzzElementInterface
{
    /**
     * @var string
     */
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function printValue()
    {
        return $this->value;
    }
}
