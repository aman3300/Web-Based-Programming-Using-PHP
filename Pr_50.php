<?php
echo "when a function is completed/executed, all of its variables are deleted. However, <br/>" ;
echo "sometimes we want a local variable NOT to be deleted. We need it for a further job. <br/>";
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 
