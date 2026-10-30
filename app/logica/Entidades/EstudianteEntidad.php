<?php
class EstudianteEntidad extends UsuarioEntidad {
    private string $grupo;

    public function __construct(string $correoElectronico,string $contrasenia,string $nombre, string $grupo) {
        parent::__construct($correoElectronico, $contrasenia, $nombre, "estudiante");
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