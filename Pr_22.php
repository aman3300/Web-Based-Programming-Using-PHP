<?php 
echo "<b>🍧🍦  Search string to Match pattern /\s/  🍭🍡<b><br/> ";
echo "<b>🍭🍡 function preg_replace(replace string)<b> 🍭🍡<br/>";
echo "<b>🍭🍡 By using pattern and preg_replace 🍧🍦<br/>";
$pattern="/\s/";
$replacement="-";
$text="Earth revolves around\nthe\tSun";

echo preg_replace($pattern,$replacement,$text);
echo "<br>";
echo str_replace(" ","-",$text);
?>
