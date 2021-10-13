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
        echo "Include</br>";
        include 'funciones.inc.php';
        echo "</br>Include_once</br>";
        include_once 'funciones2.inc.php';
        echo "</br>Require</br>";
        require 'funciones2.inc.php';
        echo "Hola Mundo";
    ?>
</body>
</html>