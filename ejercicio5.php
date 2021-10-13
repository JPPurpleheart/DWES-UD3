<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1 = 5;
        $num2 = 0;
        echo "TABLA DE MULTIPLICAR DEL $num1";
        echo "</br>";
        echo "</br>";
        do {
            $res = $num1 * $num2;
            echo "$num1 x $num2 = $res";
            echo "</br>";
            echo "</br>";
            $num2 += 1;
        } while ($num2 < 11);
    ?>
</body>
</html>