<?php

    require_once 'conexion.php';

    //Código de consulta de prueba
    $identificador = 13;
    $nombre = "Notificación de prueba";
    $descripcion = "Esta es una notificación de prueba";
    $publico = "3MC";
    
    $sqlInsert = "INSERT INTO notificaciones (identificador, nombre, descripcion, publico) VALUES (?, ?, ?, ?)";  

    $sentencia = $conexion->prepare($sqlInsert);
    $sentencia->bind_param("isss", $identificador, $nombre, $descripcion, $publico);
    $sentencia ->execute();



    $sqlSelect = "SELECT * FROM notificaciones";
    $resultado = $conexion->query($sqlSelect);

    while ($fila = $resultado->fetch_assoc()) {
        echo "Identificador: " . $fila["identificador"] . "<br>";
        echo "Nombre: " . $fila["nombre"] . "<br>";
        echo "Descripción: " . $fila["descripcion"] . "<br>";
        echo "Público: " . $fila["publico"] . "<br><br>";
    }

    $conexion->close();

?>