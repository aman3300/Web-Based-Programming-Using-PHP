<?php 
echo "<b>π§π¦ Β Search string to Match pattern /\s/ Β π­π‘<b><br/> ";
echo "<b>π­π‘ function preg_replace(replace string)<b> π­π‘<br/>";
echo "<b>π­π‘ By using pattern and preg_replace π§π¦<br/>";
$pattern="/\s/";
$replacement="-";
$text="Earth revolves around\nthe\tSun";

echo preg_replace($pattern,$replacement,$text);
echo "<br>";
echo str_replace(" ","-",$text);
?>
