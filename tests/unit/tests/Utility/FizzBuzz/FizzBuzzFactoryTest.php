<?php

namespace unit\tests\Utility\FizzBuzz;

use PHPUnit_Framework_TestCase;
use Utility\FizzBuzz\FizzBuzzFactory;
use Utility\FizzBuzz\FizzBuzzPrinter;

class FizzBuzzFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testCreateFizzBuzzPrinter()
    {
        $multipliers = [
            15 => 'FizzBuzz',
            5 => 'Buzz',
            3 => 'Fizz',
        ];

        $factory = new FizzBuzzFactory($multipliers);

        self::assertInstanceOf(FizzBuzzPrinter::class, $factory->createFizzBuzzPrinter(1, 100));
    }
}
