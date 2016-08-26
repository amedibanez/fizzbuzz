<?php

namespace unit\tests\Utility\FizzBuzz;

use PHPUnit_Framework_TestCase;
use Utility\FizzBuzz\Number;

class NumberTest extends PHPUnit_Framework_TestCase
{
    public function testPrintValueWithFizz()
    {
        $numElement = new Number(1);

        self::assertEquals(1, $numElement->printValue());
    }
}