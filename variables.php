<?php

/* Rules for PHP variables:
    A variable starts with the $ sign, followed by the name of the variable.
    A variable name must start with a letter or the underscore character.
    A variable name cannot start with a number.
    A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ ).
    Variable names are case-sensitive ($age and $AGE are two different variables).
*/

$myVar = "This is a text."; // This is a string (which means it will be read as text)
/* 
You can use single quotes or double quotes to assign a value to a variable.
But never start a string with single quote and end it with double quotes or vice versa.
*/

//Let's echo the first variable.
echo $myVar;
echo "<br />";

$mySecondVar = 15; // this is a whole number
$myThirdVar = 10.5; // this is a float number

//Can we use numbers as strings (double quotes or single quotes)? Yes. But they will be treated as texts not numbers.