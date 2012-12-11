<?php


$var = 3;

if ( "3" == $var) {
	echo  "var value is equal to 3";
}

if ( "3" === $var) {
	echo "not outputed";
	// This is not executed, as $var data type is not a string
}

echo PHP_EOL;

switch ($var) {
	
	case 3:
		echo "var value is 3" . PHP_EOL;
	case 4:
		echo "var value is 4" . PHP_EOL; // This case is executed, because the previous one did miss a break statement
		break;
	case 5:
		echo "var value is 5" . PHP_EOL;
		break;
	default:
		echo "default statement";
		break;
}

echo PHP_EOL;

// Ternary operator

$t = ($var == 3) ? "3" : "something else";
echo $t; // will output 3

$p = ($var) ?: "something else"; // Since PHP 5.3 it is equivalent to: ($var) ? $var : "something else";