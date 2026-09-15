<?php

    require_once 'conexion.php';

    $sql = "SELECT * FROM notificacion";
    $resultado = $conexion->query($sql);

    while ($fila = $resultado->fetch_assoc()) {
        echo "Identificador: " . $fila["identificador"] . "<br>";
        echo "Nombre: " . $fila["nombre"] . "<br>";
        echo "Descripción: " . $fila["descripcion"] . "<br>";
        echo "Público: " . $fila["publico"] . "<br><br>";
    }

    $conexion->close();

?>