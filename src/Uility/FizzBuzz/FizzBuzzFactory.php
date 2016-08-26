<?php

namespace Utility\FizzBuzz;

/**
 * Responsible to create an instance of
 */
class FizzBuzzFactory
{
    /**
     * @var mixed[]
     */
    private $multipliers;

    public function __construct($multipliers)
    {
        $this->multipliers = $multipliers;
    }

    public function createFizzBuzzPrinter()
    {
        $multValidator = new MultiplierValidator($this->multipliers);
        $elementsContainer = new ElementsContainer($multValidator);
        return new FizzBuzzPrinter($elementsContainer);
    }
}
