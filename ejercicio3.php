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
        $dia = 5;
        switch ($dia) {
            case 1:{
                echo "Lunes";
                break;
            }
            case 2:{
                echo "Martes";
                break;
            }
            case 3:{
                echo "Miércoles";
                break;
            }
            case 4:{
                echo "Jueves";
                break;
            }
            case 5:{
                echo "Viernes";
                break;
            }
            case 6:{
                echo "Sábado";
                break;
            }
            case 7:{
                echo "Domingo";
                break;
            }
            default:{
                echo "No se ha introducido un dia correcto.";
                break;
            }
        }
    ?>
</body>
</html>