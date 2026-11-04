<?php

require_once __DIR__ . "/Conexion.php";
require_once __DIR__ . "/DAOGenerico.php";

class UsuarioDAO extends DAOGenerico {

    function getTabla(): string{
        return "usuarios";
    }

    function getColumnas(): array{
        return ["correo_electronico", "contrasenia", "nombre","rol"];
    }

    function getClavePrimaria(): string{
        return "correo_electronico";
    }

    public function obtenerUsuario($identificador) : ?array {    
            return $this->obtenerFila($identificador);
        }

        public function insertarUsuario (array $datos) : bool {
            return $this->insertarFila($datos);
        }
    
}
?>