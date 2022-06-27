<?php
echo "<b>🍺break statement in while loop🍺<b><t><\n>";
$a=0;
while($a<10)
{
 $a++;
 echo "hello ".$a."<br/>";
 if($a==5)
 break ;
}
echo"Loop stopped at a = $a";
