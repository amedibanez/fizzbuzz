<?php

namespace Utility\FizzBuzz\Demo;

use Utility\FizzBuzz\FizzBuzzFactory;

class DemoFizzBuzz {
    public function doDemo()
    {
        $multipliers = [
            15 => 'FizzBuzz',
            5 => 'Buzz',
            3 => 'Fizz',
        ];

        $factory = new FizzBuzzFactory($multipliers);
        $printer = $factory->createFizzBuzzPrinter(1, 100);

        echo $printer->printFizzBuzz();
    }
}

$demo = new DemoFizzBuzz();
$demo->doDemo();