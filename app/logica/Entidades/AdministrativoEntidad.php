<?php
class AdministrativoEntidad extends UsuarioEntidad {
    public function __construct(string $correoElectronico,string $contrasenia, string $nombre) {
        parent::__construct($correoElectronico, $contrasenia, $nombre, "administrativo");
    }


}
php?>