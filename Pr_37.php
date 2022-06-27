<?php
// PHP function to illustrate the use of array_pad()
function Padding($array, $string)
{
    $result = array_pad($array, -7, $string);
    return ($result);
}

$array = array("one", "two", "three", "four", "five");
$string = "six";
print_r(Padding($array, $string));
?>