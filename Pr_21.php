<?php
echo "The preg_split() function_ breaks a string_ into an array_ <br/>" ;
echo "using matches of a regular expression as separators.<br/>";
$ip="134.645.478.670";
$regex="/\./";
$output=preg_split($regex,$ip);
echo "$output[0] <br>";
echo "$output[1] <br>";
echo "$output[2] <br>";
echo "$output[3] <br>";
?>
