<?php

    $servidor = "localhost";
    $usuario = "app";
    $contrasenia = "1234";
    $baseDeDatos = "comunicacion_institucional";

    $conexion = new mysqli($servidor, $usuario, $contrasenia, $baseDeDatos);

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    echo "Conexión exitosa"

?>