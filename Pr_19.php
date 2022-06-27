
<?php
echo "<b>🍧🍦Search string to have Match pattern <b>(.*)<\/b> 🍭🍡<b><br/> ";
echo "<b>🍭🍡By using regex and preg_match_all🍧🍦<br/>";
$regex = "/<b>(.*)<\/b>/U";
$inputString = "name: <b>John</b> Position: <b>Developer</b>";
preg_match_all($regex, $inputString, $output);
echo $output[0][0] . "<br/>" . $output[0][1] . "\n";
?>
