<?php
/*Let's say we want to grab the value from a function and assign it to a variable. 
We will create our calculator again for this example.
*/

//Creating the function
function calcThis($firstNumber, $secondNumber) {
    $sum = $firstNumber + $secondNumber;
    echo $sum;
}

//We assign the function to the variable
$printCalcSum = calcThis(335, 229);

//Then we echo it.
echo $printCalcSum;