<?php
/* Passing parameters to a function will make it easier to reuse in case we want the same result but different data
We don't want to create a new function but rather a function that can be reused.
Previously we had functions where data remains the same. We created the function and then we called the function.
Passing parameters will help us keep the structure or logic inside the function but with different data.
*/

function echoMessage($message) {
    echo $message;
}
echoMessage("Hi can you please print this out for me?");

echo "<br />";

/* Let's say you want to make a calculator (kind of) and add two numbers.
You need to use this in many of your pages so you don't want to create
a function for each equation but rather to make a function
to be used in the easiest way possible.
*/

//We pass two variables to the function divided by a comma
//Then inside the function we add the two variables and print out the sum.
function calcThis($firstNumber, $secondNumber) {
    $sum = $firstNumber + $secondNumber;
    echo $sum;
}

//Now we can call the function, pass the parameters and we should get 50 (15+35)
calcThis(15,35);

echo "<br />";