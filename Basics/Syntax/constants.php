<?php

define("kääk", 2);	// all those constants are valid due to extended ascii
define("pöm", 10);
define("åp", true);
define("niño", true);
define("Ÿ", "y");
define("Ω", "omega");

$Ω = "some value"; // valid variable name, same reason

function Ω() {
	echo "strange function";
}

echo Ω; // outputs: omega
echo PHP_EOL;
echo $Ω; // outputs: some value
echo PHP_EOL;
Ω(); // outputs: strange function


// Magic constants

/*

Their value change depending where used

__LINE__
__FUNCTION__
__CLASS__
__METHOD__
__FILE__
__DIR__
__NAMESPACE__

*/