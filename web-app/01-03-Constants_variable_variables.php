<?php

//Constants

define('STATUS_PAID', 'paid'); // Defined at runtime

echo defined('STATUS_PAID'); //1
echo defined('UNDEFINED_CONSTANT'); // Nothing will printed
echo STATUS_PAID;

const STATUS_SOLD = 'sold'; //Defined at compile time, therefore you cannot define with const keyword inside for example function or loop.
echo STATUS_SOLD;

$ordered = 'ORDERED';

define('STATUS_' . $ordered, 4);

echo STATUS_ORDERED;

//PHP built-in constants

echo PHP_VERSION;

//Magic constants

echo __LINE__;
echo __LINE__;
echo __FILE__;
echo __DIR__;


//Variable variables

$foo = 'bar';

$$foo = 'baz';

echo $foo , $bar;
