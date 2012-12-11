<?php

$array = array(1, 2, 4, 8);

list($_1, , $_3) = $array;

echo $_3 . PHP_EOL; // Will output 4
