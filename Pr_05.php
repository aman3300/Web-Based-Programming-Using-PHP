<?php
$d = date("D");
if($d == "Sat"){
    echo "Have a nice weekend!";
}
else{
    echo "Have a nice day!";
}
?>
<br><br><br>
<?php
$d = date("D");
if($d == "Sat"){
    echo "Have a nice weekend!";
}
elseif($d == "Sun"){
    echo "Have a nice Sunday!";
}
else{
    echo "Have a nice day!";
}
?>