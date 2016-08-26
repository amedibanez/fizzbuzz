<?php

namespace unit\tests\Utility\FizzBuzz;

use PHPUnit_Framework_TestCase;
use Utility\FizzBuzz\ElementsContainer;
use Utility\FizzBuzz\MultiplierValidator;

class ElementsContainerTest extends PHPUnit_Framework_TestCase
{
    public function testGetListWith100Elements()
    {
        $multipliers = [
            15 => 'FizzBuzz',
            5 => 'Buzz',
            3 => 'Fizz',
        ];
        $validator = new MultiplierValidator($multipliers);

        $container = new ElementsContainer(1, 100, $validator);

        $list = $container->getList();

        self::assertCount(100, $list);
    }

    public function dataProviderElements()
    {
        $multipliers = [
            15 => 'FizzBuzz',
            5 => 'Buzz',
            3 => 'Fizz',
        ];

        return [
            'This case for Fizz for number 3 [index 2]' => [$multipliers, 2, 'Fizz'],
            'This case for Buzz for number 5 [index 4]' => [$multipliers, 4, 'Buzz'],
            'This case for FizzBuzz for number 60 [index 59]' => [$multipliers, 59, 'FizzBuzz'],
            'This case for Number 7 [index 6]' => [$multipliers, 6, 7],
        ];
    }

    /**
     * @param $multipliers
     * @param $key
     * @param $expected
     *
     * @dataProvider dataProviderElements
     */
    public function testGetOneElement($multipliers, $key, $expected)
    {
        $validator = new MultiplierValidator($multipliers);
        $container = new ElementsContainer(1, 100, $validator);
        $list = $container->getList();

        self::assertEquals($expected, $list[$key]->printValue());
    }
}
