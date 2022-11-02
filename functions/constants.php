<?php
//Constants are variables that can't be changed once defined.
//Old method to define a constant (still used; still works)

//With this method we define the constant named CONSTANT and assign 100 as value.
define("CONSTANT", 100);

//We don't need to put the $ sign in front of a constant to call it we can simply use echo and constant name:
echo CONSTANT;

echo "<br />";

//The new method of declaring a constant is by using const. Then assign the value as we do with a variable.
const NEWCONSTANT = 110;
echo NEWCONSTANT;
echo "<br />";

//A constant can be also an array.
const ARRAYCONST = ["apple", "bannana", "grape"];
echo ARRAYCONST[0]; // <-- Prints: apple
echo "<br />";

//for the old method using define and arrays we will use:
define("OLDARRAYCONST", array("apple", "bannana", "grape"));
echo OLDARRAYCONST[0]; // <-- Prints: apple
echo "<br />";

//or
define ("OLDARRAYCONST_", ["apple", "bannana", "grape"]);
echo OLDARRAYCONST_[0]; // <-- Prints: apple