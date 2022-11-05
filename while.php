<?php
//While loop examples
//A while loop will execute itself until the condition is true.

$myNumber = 4;
$target = 10;
while($myNumber < $target) {
    echo "$myNumber is less than $target<br />";

    //Add a number to $myNumber until it reaches 9.
    //It will reach 9 because the condition must be true.
    //So 9 is less than 10 and it will stop at 9.
    $myNumber++;
}

//Another way of adding a number to the first variable:
while($myNumber < $target) {
    echo "$myNumber is less than $target<br />";
    //Add a number to $myNumber until it reaches 9.
    //It will reach 9 because the condition must be true.
    //So 9 is less than 10 and it will stop at 9.
    $myNumber = $myNumber + 1;
}

$count = 1;
while ($count < 101) {
  if ($count % 33 === 0) {
  echo $count." is divisible by 33\n";
  }
  $count++;
}

/* Infinite loop
An infinite loop will run forever and that's because
the condition will be always true.

Example:

while(4 < 5) {
    echo "Run this forever.";
}

The loop will run forever because the statement is true. 
4 will always be less than 5.
This works with all Comparison Operators as long as the condition is true.
*/