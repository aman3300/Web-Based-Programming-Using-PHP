
<?php
   setcookie("name","jhon",time()+1*60*60,"/","",0);
   setcookie("Age","34",time()+1*60*60,"/","",0);
?>
<html>
<head>
   <title>SET cookies</title>
</head>
<body>
    <?php
    echo "Set cookies";
    ?>
    <p><?= "Hello world!" ?></p>
</body>
</html>
