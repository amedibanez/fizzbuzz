<?php

namespace unit\tests\Utility\FizzBuzz;

use PHPUnit_Framework_TestCase;
use Utility\FizzBuzz\Text;


class TextTest extends PHPUnit_Framework_TestCase
{
    public function testPrintValueWithFizz()
    {
        $textElement = new Text('Fizz');

        self::assertEquals('Fizz', $textElement->printValue());
    }

    public function testPrintValueWithBuzz()
    {
        $textElement = new Text('Buzz');

        self::assertEquals('Buzz', $textElement->printValue());
    }

    public function testPrintValueWithFizzBuzz()
    {
        $textElement = new Text('FizzBuzz');

        self::assertEquals('FizzBuzz', $textElement->printValue());
    }
}

