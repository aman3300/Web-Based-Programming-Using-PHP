<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operator</title>
</head>
<body>
    <h2>Logical Operator</h2>
    <?php
    $a = 33;
    $b = 0;
    if($a && $b){
        echo "TEST1: Both a and b are true <br/>";
    }
    else{
        echo "TEST1: Either a and b are false <br?>";
    }
    if($a and $b){
        echo "TEST2: Both a and b are true <br/>";
    }
    else{
        echo "TEST2: Either a and b are false <br?>";
    }
    if($a || $b){
        echo "TEST3: Either a and b are true <br?>";
    }
    else{
        echo "TEST3: Both a and b are false <br?>";
    }
    if($a or $b){
        echo "TEST4: Either a and b are true <br?>";
    }
    else{
        echo "TEST4: Both a and b are false <br?>";
    }
    $a = 10;
    $b = 20;
    if($a){
        echo "TEST5:a is true <br/>";
    }
    else{
        echo "TEST5:a is false <br/>";
    }
    if($b){
        echo "TEST6:b is true <br/>";
    }
    else{
        echo "TEST6:b is false <br/>";
    }
    if(!$a){
        echo "TEST5:a is true <br/>";
    }
    else{
        echo "TEST5:a is false <br/>";
    }
    if(!$b){
        echo "TEST6:b is true <br/>";
    }
    else{
        echo "TEST6:b is false <br/>";
    }
    ?>
</body>
</html>