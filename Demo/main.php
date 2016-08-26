<?php

require __DIR__ . '/../vendor/autoload.php';

use Utility\FizzBuzz\FizzBuzzFactory;

$multipliers = [
    15 => 'FizzBuzz',
    5 => 'Buzz',
    3 => 'Fizz',
];

$factory = new FizzBuzzFactory($multipliers);
$printer = $factory->createFizzBuzzPrinter(1, 100);

echo $printer->printFizzBuzz();
