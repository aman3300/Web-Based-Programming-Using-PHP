<?php
$pattern = "/^J/";
$names = array("John Abraham", "Shehbaz", "John Puneet");
$matches = preg_grep($pattern, $names);
foreach ($matches as $match) {
    echo $match . "<br>";
}
?>