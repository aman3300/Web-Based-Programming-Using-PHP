<?php
echo "<b>🧊 Sort array with respect to alphabet 🧊<b><br/>";
$season = array("summer", "winter", "spring", "autumn");
sort($season);
foreach ($season as $s) {
    echo "$s<br/>";
}
?>