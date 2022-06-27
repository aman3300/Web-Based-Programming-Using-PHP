<?php
function print_string($string)
{
$string="Function is running"."\n"."<br/>"; 
print ($string);
}
$string="Global Data"."\n";
print_string($string);
print ($string);
?>
