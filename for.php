<?php
/* A FOR loop is very similar to a while loop.
but for a FOR loop we need to pass 3 things.
The index (where the count starts from) / the condition / increment. 
The variable / counter goes inside the FOR loop instead (for the while loop we had
the counter outside the loop).
*/

for ($myVar = 0; $myVar < 10; $myVar++) {
    echo "$myVar is less than 10 <br />";
}

/* We start to count from 0 and we compare the numbers until
we reach 9 because 9 is less than 10 and 10 equals 10 so 10 is
not less than 10 therefore the count stops at 9. */