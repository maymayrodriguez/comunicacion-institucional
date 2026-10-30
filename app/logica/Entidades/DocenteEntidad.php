<?php
class DocenteEntidad extends UsuarioEntidad {
    public function __construct(string $correoElectronico, string $contrasenia,string $nombre) {
        parent::__construct($correoElectronico, $contrasenia, $nombre, "docente");
    }


}
php?>