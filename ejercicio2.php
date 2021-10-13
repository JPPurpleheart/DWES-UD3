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
        $num1 = 4;
        $num2 = 8;
        $num3 =20;
        if ($num1 < $num2 && $num3 < $num1) {
            echo "$num2 es el mayor de los dos numeros.";
        } else if ($num1 < $num2 && $num2 < $num3) {
            echo "$num3 es el mayor de los dos numeros.";
        } else
            echo "$num1 es el mayor de los dos numeros.";
    ?>
</body>
</html>