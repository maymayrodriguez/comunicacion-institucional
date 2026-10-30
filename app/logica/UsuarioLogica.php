<?php

require_once __DIR__ . '/Entidades/UsuarioEntidad.php';
require_once __DIR__ . '/../persistencia/UsuarioDAO.php';


class UsuarioLogica {

    private UsuarioDAO $usuarioDAO;

    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO();
    }

    public function iniciarSesion (string $correoElectronico, string $contrasenia) : ?UsuarioEntidad {

        
        $usuario = $this->usuarioDAO->obtenerUsuario($correoElectronico);

        if ($usuario !== null){
            
            $hash= $usuario->getContrasenia();

            if( password_verify($contrasenia, $hash)) {
                return $usuario;
            }
        
        }


        return null;

    }


}

?>