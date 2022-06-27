
<?php
$some = 15;
function addit()
{
    global $some;
    $some++;
    print "some is $some";
}
addit()
?>
