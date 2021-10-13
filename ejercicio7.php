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
        foreach($_SERVER as $i)
        {
            echo $i;
            echo "</br>";
        }
        echo "---------------------------------------------------------------·---------------------------------------------------------------";
        echo "</br>";
        foreach ($_SERVER as $key_arr => $val_arr)
        {
            echo $key_arr;
            echo " = ";
            echo $val_arr;
            echo "</br>";
        }
    ?>
</body>
</html>