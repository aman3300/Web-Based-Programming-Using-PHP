<?php
echo "🧊 print Array in reverse order 🧊<br/>";
$season = array("summer", "winter", "spring", "autumn");
$reverseseason = array_reverse($season);
foreach ($reverseseason as $s) {
    echo "$s<br/> ";
}
?>