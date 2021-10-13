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
        $fechaNac = "01/09/1996";
        $fechaNacCalc = str_replace("/", "", $fechaNac);
        $actual = date('d/m/Y');
        $actualCalc = str_replace("/", "", $actual);
        $edad = $actualCalc - $fechaNacCalc;
        $edadVl = substr($edad, -2);
        if (18 > $edadVl)
        {
            echo "No puedes pasar dentro";
        }
        elseif ($edadVl >= 18 & $edadVl < 65)
        {
            echo "Puedes pasar dentro";
        }
        elseif ($edadVl >= 65)
        {
            echo "Eres demasiado mayor para entrar";
        }
        else
            echo "Error la fecha introducida no es correcta";
    ?>
</body>
</html>