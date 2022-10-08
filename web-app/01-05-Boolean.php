<?php

$isComplete = true;

if ($isComplete) {
    //do something
} else {
    //do something
}

/* conversion:
integers: 0, -0 = false;
float: 0.0 -0.0 = false;
string: '0', '' = false;
        'false' = true;
array: [] = false;
null = false;

*/

$isItFalse = (bool) "false";
var_dump($isItFalse);

$isOk = false;
echo $isOk; // prints empty string!!!
$isOk = true;
echo $isOk; // prints 1!!!

is_bool($isOk);

$isBoolean = (bool) "-0";
var_dump($isBoolean);
$isBoolean = (bool) "0.0";
var_dump($isBoolean);