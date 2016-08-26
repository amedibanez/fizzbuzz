<?php
/**
 * Created by PhpStorm.
 * User: amed
 * Date: 8/26/16
 * Time: 3:08 PM
 */

namespace unit\tests\Utility\FizzBuzz;

use PHPUnit_Framework_TestCase;
use Utility\FizzBuzz\MultiplierValidator;

class MultiplierValidatorTest extends PHPUnit_Framework_TestCase
{
    public function dataProviderValidator()
    {
        return [
            [
                45,
                'FizzBuzz'
            ],
            [
                50,
                'Buzz'
            ],
            [
                33,
                'Fizz',
            ],
            [
                15,
                'FizzBuzz'
            ],
            [
                17,
                false
            ],
            [
                108,
                'Fizz'
            ]
        ];
    }

    /**
     * @param $num
     * @param $expected
     *
     * @dataProvider dataProviderValidator
     */
    public function testValidateNumberModMultiplier($num, $expected)
    {
        $multipliers = [
            15 => 'FizzBuzz',
            5 => 'Buzz',
            3 => 'Fizz',
        ];
        $validator = new MultiplierValidator($multipliers);

        $res = $validator->validateNumberModMultiplier($num);

        self::assertEquals($expected, $res);
    }
}
