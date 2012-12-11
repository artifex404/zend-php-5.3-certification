<?php

$variable = 10; // simple variable containing an integer
$string = "string"; // a variable containint a string
$_valid_variable = 2; // this is permitted
$_variable2 = 10; // numbers are permitted, as long as its name does not start with a number
${'2seconds'} = 2; // However, this works
${'specialVariable'} = "yes, that is correct"; // valid syntax

$foo = 2;
$bar = &$foo; // assign by reference
$bar = "value"; // now $foo = "value"


$name = "variable";
echo $$name; // a variable variable, will output 10


$multiline = <<< END

HEREDOC syntax for a multiline variable.

Very handy for XML documents for example.

// No comments permitted inside heredoc

/*

Does not work

*/

$_variable2 // But variable interpretation will occur

END;

echo $multiline;


$nowdoc = <<< 'END_NOW'

As of PHP 5.3.0

$_valid_variable // This will not be interpreted

END_NOW;

echo $nowdoc;	

echo PHP_EOL;

$var = 10;
$Var = 5; // Variables are case-sensitive

echo $Var; // Outputs 5

echo PHP_EOL;

// Function isset() determine if a variable is set and is not NULL, returns a boolean
// If multiple parameters are supplied then isset() will return TRUE only if all of the parameters are set.

echo (int) isset($unset_variable); // will output false, typecasted to integer to see 1 or 0

echo PHP_EOL;

echo (int) isset($multiline, $unset_variable); // will output false, because both of the variables are not set

echo PHP_EOL;

echo (int) isset($multiline, $_variable2); // will output true

echo PHP_EOL;

$int   =    1; // integer in decimal
$octal =   01; // integer in octal
$hex   = 0xFF; // integer in hex
$array = array();

echo  is_integer($int); // Outputs 1

// functions to check type: is_integer(), is_int(), is_string(), is_float(), is_array(), is_bool(), is_double(), is_null(), is_real() alias of is_float, is_resource(), is_scalar()
// function to get a variable type is: get_type()

echo PHP_EOL;

echo gettype($array); // Outputs array

// Check if a variable is with empty(). A variable is considered empty if: null, 0, false, 0.0, array(), "", "0". Also if variable is unset or declared without value.