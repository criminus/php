<?php

function echo_Something() {
    echo "Hello, do you like PHP so far?";
}
echo_Something();

//Now let's create a menu with a single call of a function.

function navigation() {
    echo '<div class="navigation">';
    echo "<ul>";
    echo "<li>Home</li>";
    echo "<li>About us</li>";
    echo "<li>Portfolio</li>";
    echo "<li>Contact</li>";
    echo "</ul>";
    echo '</div>';
}

/* And we call the navigation menu in our page (we can call this function in all our pages as long as the functions.php
file is included in the header of the file.) 
include("functions/functions.php");
*/
navigation();

//We can call functions inside functions like so:

function init() {
    question();
    echo "<br />";
    answer();
}

function question() {
    echo "Do you like PHP so far?";
}
function answer() {
    echo "Yes, I think i'm doing great and i really love it!";
}

init();