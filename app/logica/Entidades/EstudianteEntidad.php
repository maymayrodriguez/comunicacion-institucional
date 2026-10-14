<?php
class EstudianteEntidad extends UsuarioEntidad {
    private string $grupo;

    public function __construct(string $correoElectronico,string $contrasenia,string $nombre) {
        parent::__construct($correoElectronico);
        parent::__construct($contrasenia);
        parent::__construct($nombre);
        $this->grupo = $grupo;

    }
    public function getGrupo(): string
    {
        return $this->grupo;
    }
     public function setGrupo(string $grupo):void
    {
        $this->grupo=$grupo;
    }
    


}
php?>