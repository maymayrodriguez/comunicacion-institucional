<?php
require_once __DIR__ . "/../logica/entidades/DiaEntidad.php";
require_once __DIR__ . "/../logica/entidades/OrientacionEntidad.php";
require_once __DIR__ . "/../logica/entidades/MateriaEntidad.php";
require_once __DIR__ . "/../logica/entidades/ClaseEntidad.php";
require_once __DIR__ . "/../persistencia/Conexion.php";



    function obtenerHorarios (): array {

            $sql = "SELECT hora_inicio, hora_fin, nombre_dia, nombre_grupo, nombre_materia FROM clases";

            $conexion = $this->conexion->getConexion();

            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();

            $resultado = $sentencia->get_result();

            $horarios = array();

        }

?>