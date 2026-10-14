<?php
class DocenteEntidad extends UsuarioEntidad {
    public function __construct(string $correoElectronico, string $contrasenia,string $nombre) {
        parent::__construct($correoElectronico);
        parent::__construct($contrasenia);
        parent::__construct($nombre);
    }


}
php?>