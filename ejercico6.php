<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1">
        <tr>
            <th>Elevado a</th>
            <th>Resultado</th>
        </tr>
        <?php
            $pow = 7;
            $twopow = 0;
            for ($i = 0; $i <= $pow; $i ++)
            {
                $twopow = pow(2, $i);
                echo "<tr>";
                echo "<td>";
                echo $i;
                echo "</td>";
                echo "<td>";
                echo $twopow;
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>