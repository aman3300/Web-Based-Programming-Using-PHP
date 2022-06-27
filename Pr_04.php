<html>

<head>
    <title>Assignment Operator</title>
    <style>
        .container {
            max-width: 90%;
            color: white;
            background-color: blue;
            padding: 23px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Assignment Operator in PHP </h1>
        <?php
        echo "<br>a = " . $a = 10;
        echo "<br>b = " . $b = 30;
        echo "<br>";
        $c = $a + $b;  //Assignment Operator
        echo "Addition Operator result : $c<br/>";
        $c += $a;
        echo "Add and Assignment Operator result : $c<br/>";
        $c -= $a;
        echo "Subtract and Assignment Operator result : $c<br/>";
        $c *= $a;
        echo "Multiply and Assignment Operator result : $c<br/>";
        $c /= $a;
        echo "Division and Assignment Operator result : $c<br/>";
        $c %= $a;
        echo "Modulus and Assignment Operator result : $c<br/>";
        ?>
    </div>
</body>

</html>