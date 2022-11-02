<?php
//Usage of global variables.
//If we want to have the same variable inside and outside a function with different values we need to make it global inside the function.

$myVar = "This is outside the function";

function convertVar() {
    global $myVar; //If we don't use global before a variable it means the variable is local and not global and the value will not change because the global is defined.
    $myVar = "This is inside the function";
    echo $myVar;
}

echo $myVar; // <- Prints out: This is outside the function
echo "<br />";
convertVar(); // <- Prints out: This is inside the function
echo "<br />";
echo $myVar; // <- This also prints out: This is inside the function - and that's because we called the function containing the global variable with a new value before echoing $myVar again.

//Now we can use the same variable inside the function because we made it global.
//We told PHP that's something outside the function and we want to reuse it - using global before the variable inside the function.