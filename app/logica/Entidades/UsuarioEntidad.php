<?php
class UsuarioEntidad{

    protected string $correoElectronico;
    protected string $contrasenia;
    protected string $nombre;
    protected string $rol;

    public function __construct(string $correoElectronico,string $contrasenia,string $nombre,string $rol)
    {
        $this->correoElectronico = $correoElectronico;
        $this->contrasenia=$contrasenia;
        $this->nombre=$nombre;
        $this->rol=$rol;
    }

    public function getCorreoElectronico(): string
    {
        return $this->correoElectronico;
    }

    public function getContrasenia(): string
    {
        return $this->contrasenia;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

        public function getRol(): string
    {
        return $this->rol;
    }

    public function setCorreoElectronico(string $correoElectronico):void
    {
        $this->correoElectronico=$correoElectronico;
    }

    public function setContrasenia(string $contrasenia):void
    {
        $this->contrasenia=$contrasenia;
    }

    public function setNombre(string $nombre):void
    {
        $this->nombre=$nombre;
    }



}



?>