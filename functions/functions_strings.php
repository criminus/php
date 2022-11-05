<?php
// https://www.php.net/ref.strings

$myString = "how long is this string?";
echo strlen($myString); // <-- Will print 24 / including empty spaces.

echo "<br />";

$myString2 = "how many words are in this string?";
echo str_word_count($myString2); // <-- Will print 7 because there are 7 words separated by spaces.

echo "<br />";