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
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Identificador</th>
        </tr>
    <?php
        $productos = [];
        $productos[0] = array("nombre" => "Portátil HP", "precio" => "800€", "stock" => "5", "identificador" => "1234567-A");
        $productos[1] = array("nombre" => "Ratón Inalámbrico", "precio" => "20€", "stock" => "10", "identificador" => "2345678-B");
        $productos[2] = array("nombre" => "Alfombrilla de Ratón", "precio" => "15€", "stock" => "20", "identificador" => "3456789-C");
        print_r($productos);
        echo "</br>";
        foreach ($productos as $key_arr => $val_arr)
        {
            echo "  <tr>";
            echo "      <td>", $val_arr[nombre], "</td>";
            echo "      <td>", $val_arr[precio], "</td>";
            echo "      <td>", $val_arr[stock], "</td>";
            echo "      <td>", $val_arr[identificador], "</td>";
            echo "  </tr>";
        }
    ?>
    </table>
</body>
</html>