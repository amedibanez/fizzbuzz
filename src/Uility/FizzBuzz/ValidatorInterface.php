<?php

namespace Utility\FizzBuzz;


interface ValidatorInterface
{
    /**
     * Validates
     *
     * @param $num
     * @return bool
     */
    public function validateNumberModMultiplier($num);
}
