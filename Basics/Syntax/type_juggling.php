<?php

// Type Juggling

$var  = 2.0; // float
$var += 2;   // integer

echo $var;          // Outputs 4

echo PHP_EOL;

echo is_float($var); // Outputs 1

echo PHP_EOL;

// If either operand is a float, then both operands are evaluated as floats

$num = (int) 5.3; // $num = 5, (int) float truncates the number

$str = (float) "1.5 ounce"; // 1.5

echo $str;

echo PHP_EOL;

$str_sum = 10 + "1.5 ounce"; // $str_sum = 11.5

echo $str_sum;

echo PHP_EOL;

$t = b"string";
echo $t;