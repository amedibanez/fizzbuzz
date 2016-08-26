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

    /**
     * @param $startRange
     * @param $endRange
     *
     * @return FizzBuzzPrinter
     */
    public function createFizzBuzzPrinter($startRange, $endRange)
    {
        $multValidator = new MultiplierValidator($this->multipliers);
        $elementsContainer = new ElementsContainer($startRange, $endRange, $multValidator);

        return new FizzBuzzPrinter($elementsContainer);
    }
}
