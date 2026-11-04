<?php

require_once __DIR__ . "/../persistencia/Conexion.php";



    function obtenerHorarios (): array {

            $sql = "SELECT hora_inicio, hora_fin, nombre_dia, nombre_grupo, nombre_materia FROM clases";

            $conexion = $this->conexion->getConexion();

            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();

            $resultado = $sentencia->get_result();

            $horarios = array();

        }

    //Eso no va a funcionar, por favor revisen el código y no lo suban si está incompleto a menos que se agregue un comentario explicando la razón.
    //De esta manera mantenemos el repositorio ordenado, gracias.

?>