<?php
//With foreach we can loop through arrays and print out values.
//We grab the array and then we make a new variable to represent each key / index.
//$number will be our array containing numbers and $number will be each number from the array.
$numbers = [0, 15, 22, 55];
foreach ($numbers as $number) {
    echo $number . "<br />";
}

echo "<br />";

//Can we use the same logic as the while loop to count? Yes
//Let's grab the original value and add +1 for each one in the array.
foreach ($numbers as $number) {
    $number++;
    echo "The new value for each index is: $number<br />";
}

echo "<br />";

$anotherArray = ['BANANA' => 'Banană', 'APPLE' => 'Măr', 'ORANGE' => 'Portocală'];
foreach ($anotherArray as $fruits => $val) {
    echo "$fruits => $val<br />";
}