<?php

define("kääk", 2);	// all those constants are valid due to extended ascii
define("pöm", 10);
define("åp", true);
define("niño", true);
define("Ÿ", "y");
define("Ω", "omega");

$Ω = "some value"; // valid variable name, same reason

echo Ω; // outputs: omega
echo PHP_EOL;
echo $Ω; // outputs: some value