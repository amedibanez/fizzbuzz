<?php

namespace Utility\FizzBuzz;


class MultiplierValidator implements ValidatorInterface
{
    private $multipliers;

    /**
     * MultiplierValidator constructor.
     * @param \mixed[] $multipliers
     */
    public function __construct($multipliers)
    {
        $this->multipliers = $multipliers;
    }

    /**
     * Validates if $num is divisible by any of the multipliers in the list. If so, the value of the string in the
     * multiplier list is returned, false otherwise.
     *
     * @param $num
     * @return bool|string
     */
    public function validateNumberModMultiplier($num)
    {
        foreach ($this->multipliers as $mult => $value) {
            if ($num % $mult == 0) {
                return $value;
            } else {
                return false;
            }
        }
    }
}
