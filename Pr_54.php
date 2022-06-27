
<?php
     if(isset($_POST["name"]))
    {
        echo "Welcome " .$_POST['name']."<br/>"; 
    }
    if(isset($_POST["age"])){
        echo "you are ".$_POST['age']."years old";
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
    name: <input type="text" name="name" />
    Age: <input type="text" name="age" />
    <input type="Submit" /> 
    </form>  
</body>
</html>
