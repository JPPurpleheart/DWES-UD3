<?php
    $usuario=strip_tags($_GET["usuario"]);
    $usuario=stripslashes($usuario);
    $usuario=htmlspecialchars($usuario);
    $contrasenya=$_GET["contrasenya"];

    if (empty($usuario))
    {
        echo "el usuario debe estar relleno</br>";
    }
    if (empty($contrasenya))
    {
        echo "la contraseña debe estar rellena</br>";
    }

    if (preg_match("/[A-Z]{1}[a-z]{8,}/", $usuario))
    {
        echo "el usuario $usuario no es correcto, debe contener...";
    }
    if (preg_match("/[A-Z][a-z]{15}[0-9]/", $contrasenya))
    {
        echo "la contraseña $contrasenya no es correcta, debe contener...";
    }

    echo "el $usuario tiene la contraseña $contrasenya";
?>