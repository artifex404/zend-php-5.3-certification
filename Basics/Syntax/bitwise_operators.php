<?php

/*

Bitwise operators:

& AND			both bits are 1
| OR			at least one bit is 1
^ EITHER-OR		only one bit is 1
~ NEGATES BITS  change 0 to 1, and 1 to 0

*/


// Bitwise operators work with bits of an integer

echo 5 & 10;
//    5 -> 0101
//   10 -> 1010
// result: 0000 -> 0 in decimal

echo PHP_EOL;

echo 8 | 11;
//    8 -> 1000
//   11 -> 1011
// result: 1011 -> 11 in decimal

echo PHP_EOL;

echo 17 ^ 3;
//    17 -> 10001
//     3 -> 00011
// result:  10010 -> 18 in decimal

echo PHP_EOL;

echo (11 & ~3);
//    11 -> 1011
//     3 -> 0011
//    ~3 -> 1100
// result:  1000 -> 8 in decimal