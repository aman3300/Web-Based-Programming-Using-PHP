<?php
echo "🧊 find array element have spring or not 🧊 <br/> ";
echo "🧊 if Array have string then print index number 🧊 <br/> ";
echo "Array index = ";
$season = array("summer", "winter", "spring", "autumn");
$key = array_search("spring", $season);
echo $key;
?>