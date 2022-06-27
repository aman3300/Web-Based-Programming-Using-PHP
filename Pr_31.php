<?php
echo "Array intersect function use for check intersection 🎖️<br/>";
echo "of selected Array then print intersection element 🎖️<br/>";
$name1 = array("The great INDIAN NAVY", "john", "vivek", "The great INDIAN ARMY");
$name2 = array("umesh", "The great INDIAN NAVY", "The great INDIAN ARMY");
$name3 = array_intersect($name1, $name2);
foreach ($name3 as $n) {
    echo "$n<br/>";
}
?>