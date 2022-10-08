<?php

declare(strict_types = 1);

/*Data types and type casting */

// Type checking happens at runtime (dynamicly typed system)

//Scalar types

    # bool - true/false
    $completed = true;
    # int
    $score = 75;
    # float
    $price = 0.99;
    # string
    $greeting = 'Hello Ati';

    echo $completed . '<br/>';
    echo $score . '<br/>';
    echo $price . '<br/>';
    echo $greeting . '<br/>';

    echo gettype($completed)  . '<br/>';
    echo gettype($score) . '<br/>';
    echo gettype($price) . '<br/>';
    echo gettype($greeting) . '<br/>';

    var_dump($completed);
    var_dump($score);
    var_dump($price);
    var_dump($greeting);

// Compound types

    # array
    $companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];
    # echo $companies; //Array to string conversion warning
    print_r($companies);
    echo ('<br/>');
    # object //later
    # callable //later
    # iterable //later

// Special types

    # resource //later
    # null

function sum($x, $y) {
    var_dump($x, $y);
    return $x + $y;
}

echo "<br/>" . sum(2.1, '3');

function subtraction(int $x, int $y) {
    var_dump($x, $y);
    echo "<br/>";
    return $x - $y;
}

// $difference = subtraction(5.2, "3.9");

$difference = subtraction(5, 3);

echo $difference;

$z = (int) '5';

var_dump($z);