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
        $meses = [];
        $meses = ["Enero", "Febrero", "Marzo"];
        print_r($meses);
        echo "</br>", count($meses), "</br>";
        $meses[3] = "7";
        $meses[4] = "Abril";
        $meses[5] = "true";
        $meses[6] = "Junio";
        print_r($meses);
        echo "</br>", count($meses), "</br>";
        unset($meses[3]);
        print_r($meses);
        $meses[5] = "Mayo";
        $meses[7] = "Julio";
        $meses[8] = "Agosto";
        $meses[9] = "Septiembre";
        $meses[10] = "Octubre";
        $meses[11] = "Noviembre";
        $meses[12] = "Diciembre";
        echo "</br>";
        print_r($meses);
    ?>
</body>
</html>