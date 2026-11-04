<?php

    require_once __DIR__ . "/Conexion.php";
    require_once __DIR__ . "/DAOGenerico.php";
    
    class EstudianteDAO extends DAOGenerico {

        function getTabla(): string{
            return "estudiantes";
        }

        function getColumnas(): array{
            return ["correo_electronico", "nombre_grupo"];
        }

        function getClavePrimaria(): string{
            return "correo_electronico";
        }

        public function obtenerEstudiante($identificador) : ?array {    
            return $this->obtenerFila($identificador);
        }

        public function insertarEstudiante (array $datos) : bool {
            return $this->insertarFila($datos);
        }

    }

?>