<?php

    require_once 'conexion.php';
    require_once 'NotificacionEntidad.php';


    $notificacion = new NotificacionEntidad(14,"Notificacion de prueba 2","pepepablo","todos");

    $notificacionDAO = new NotificacionDAO();

    $notificacionDAO->insertarNotificacion($notificacion);


    
    class NotificacionDAO {

        //Código de consulta de prueba
        /*
        $identificador = 13;
        $nombre = "Notificación de prueba";
        $descripcion = "Esta es una notificación de prueba";
        $publico = "3MC";*/
       
        
        function insertarNotificacion (NotificacionEntidad $notificacion){
        
            $identificador = $notificacion->getIdentificador();
            $nombre = $notificacion->getNombre();
            $descripcion = $notificacion->getDescripcion();
            $publico = $notificacion->getPublico();
            
            $sqlInsert = "INSERT INTO notificaciones (identificador, nombre, descripcion, publico) VALUES (?, ?, ?, ?)";  

            $sentencia = $conexion->prepare($sqlInsert);
            $sentencia->bind_param("isss", $identificador, $nombre, $descripcion, $publico);
            $sentencia ->execute();
        }


        /*$sqlSelect = "SELECT * FROM notificaciones";
        $resultado = $conexion->query($sqlSelect);

        while ($fila = $resultado->fetch_assoc()) {
            echo "Identificador: " . $fila["identificador"] . "<br>";
            echo "Nombre: " . $fila["nombre"] . "<br>";
            echo "Descripción: " . $fila["descripcion"] . "<br>";
            echo "Público: " . $fila["publico"] . "<br><br>";
        }*/

        
    }
    $conexion->close();
?>