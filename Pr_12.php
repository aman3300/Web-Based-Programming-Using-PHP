
<?php
echo "<b>🚀Multi--Array in php🚀<b><br/>";
$marks = array("Mohammad" => array("Physics" => 35, "Maths" => 30, "Chemistry" => 39), "Qadir" => array("Physics" => 30, "Maths" => 32, "Chemistry" => 27), "Zara" => array("Physics" => 31, "Maths" => 22, "Chemistry" => 39));
echo "Marks for Mohammad in Physics:";
echo $marks['Mohammad']['Physics'] . "<br/>";
echo "Marks for Qadir in Maths:";
echo $marks['Qadir']['Maths'] . "<br/>";
echo "Marks for Zara in Chemistry:";
echo $marks['Zara']['Chemistry'] . "<br/>";
?>
