<?php

//Pow for num ^ number. 2^16
echo pow(2, 16);
echo "<br />";

//Rand to random pick a number from that range (between 1, 25); also we can use rand(); to get a random number with no range.
echo rand(1, 25);
echo "<br />";

//Sqrt = square root of the given number;
echo sqrt(100);
echo "<br />";

//Ceil will round a float even if the decimal is less than .5 (so 4.1 will be 5.0 / 5);
echo ceil(4.1);
echo "<br />";

//round will ... round a float if the decimal is greater than .4 (.5 becomes 1 / 4.4 is 4 and 4.5 is 5);
echo round(4.5);
echo "<br />";

//floor will not round but basically remove the decimal (to make more sense; 4.8 becomes 4.0 or 4)
echo floor(4.8);
echo "<br />";