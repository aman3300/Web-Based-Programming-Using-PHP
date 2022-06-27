<?php
// PHP program to demonstrate the 
// use of list() function
$array = array(5, 6, 2, 4);
// Assign array values to variables
list($a, $b, $c) = $array;
echo "a =", ($a), "\n";
echo "b =", ($b), "\n";
echo "c =", ($c), "\n";
echo "a*b*c =", ($a * $b * $c);
?>