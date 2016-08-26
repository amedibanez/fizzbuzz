<?php

namespace unit\tests\Utility\FizzBuzz;

use PHPUnit_Framework_TestCase;
use Utility\FizzBuzz\ElementsContainer;
use Utility\FizzBuzz\FizzBuzzPrinter;
use Utility\FizzBuzz\Number;
use Utility\FizzBuzz\Text;

class FizzBuzzPrinterTest extends PHPUnit_Framework_TestCase
{
    public function testPrintFizzBuzz()
    {
        $list = [
            new Number(1),
            new Number(2),
            new Text('Fizz'),
            new Number(4),
            new Text('Buzz'),
            new Text('Fizz'),
            new Number(7),
            new Number(8),
            new Text('Fizz'),
            new Text('Buzz'),
            new Number(11),
            new Text('Fizz'),
            new Number(13),
            new Number(14),
            new Text('FizzBuzz'),
        ];
        $elContainer = $this->getMockBuilder(ElementsContainer::class)
            ->disableOriginalConstructor()
            ->getMock();
        $elContainer->expects($this->any())
            ->method('getList')
            ->will($this->returnValue($list));

        $printer = new FizzBuzzPrinter($elContainer);

        $outputExpected = '1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz ';

        self::assertEquals($outputExpected, $printer->printFizzBuzz());
    }
}
