<?php
class UsuarioEntidad{
    protected string $correoElectronico;
    protected string $contrasenia;
    protected string $nombre;

    public function __construct(string $correoElectronico,string $contrasenia,string $nombre)
    {
        $this->correoElectronico = $correoElectronico;
        $this->contrasenia=$contrasenia;
        $this->nombre=$nombre;
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