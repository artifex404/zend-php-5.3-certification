<?php

$variable = 10; // simple variable containing an integer
$string = "string"; // a variable containing a string
$_valid_variable = 2; // this variable name is permitted
$_variable2 = 10; // numbers are permitted in variables names, as long as the variable name does not start with a number
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
$Var = 5; // Variable names are case-sensitive

echo $Var; // Outputs 5

echo PHP_EOL;

// Function isset() determine if a variable is set and is not NULL, returns a boolean
// If multiple parameters are supplied then isset() will return TRUE only if all of the parameters are set.

echo (int) isset($unset_variable); // will output 0, typecasted to integer to see 1 or 0

echo PHP_EOL;

echo isset($multiline, $unset_variable); // will output false, because both of the variables are not set

echo PHP_EOL;

echo isset($multiline, $_variable2); // will output true

echo PHP_EOL;

$int   =    1; // integer in decimal
$octal =   01; // integer in octal
$hex   = 0xFF; // integer in hex
$array = array();

echo  is_integer($int); // Outputs 1

// functions to check type: is_integer(), is_int(), is_string(), is_float(), is_array(), is_bool(), is_double(), is_null(), is_real() alias of is_float, is_resource(), is_scalar()
// function to get a variable type is: gettype()

echo PHP_EOL;

echo gettype($array); // Outputs array

echo PHP_EOL;

// Check if a variable is with empty(). A variable is considered empty if: null, 0, false, 0.0, array(), "", "0". Also if a variable is unset or declared without value.

$some_variable = "0";
settype($some_variable, "boolean"); // $some_variable will become an integer of 1
var_dump($some_variable); // will output bool(false)

/* Boolean casted to other types

		true	false
string 	"1"		""
integer  1		0


** Integer casted to other types

			0		1		-1
string		"0"		"1"		"-1"
boolean		false	true	true


** String casted to other types

			""		"0"		"3 apples"		"pool 8"
integer		0		 0		3				0
boolean		false	false	true			true


*/

echo PHP_EOL;

echo PHP_INT_MAX; // Constant for a maximum integer number on current system