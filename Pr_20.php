
<?php
echo "<b>π§π¦ Β Search string to have Match pattern [0-9]+ Β π­π‘<b><br/> ";
echo "<b>π­π‘ function ereg_replace(replace string)<b> π­π‘<br/>";
echo "<b>π­π‘ By using regex and ereg_replace π§π¦<br/>";
$regex = "([0-9]+)";
$original = "Completed graduation in 2004";
$replacewith = "2002";
$original = preg_replace($regex, $replacewith, $original);
echo $original;
?>
