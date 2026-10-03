<?php 

namespace app\logica\UsuarioEntidad;

class UsuarioEntidad{

    private String $correoelectronico;
    private String $nombre;
    private String $contrasena;
    private String $rol;

    public function __construct(string $correoelectronico = "", String $nombre = "", String $contrasena = "", String $rol = "")
    {
        $this->correoelectronico = $correoelectronico;
        $this->nombre = $nombre;
        $this->contrasena = $contrasena;
        $this->rol = $rol;
    }

    public function getCorreoelectronico(): string
    {
        return $this->correoelectronico;
    }

    public function getNombre(): String
    {
        return $this->nombre;
    }

    public function getContrasena(): String
    {
        return $this->contrasena;
    }

    public function getRol(): String
    {
        return $this->rol;
    }

    public function setCorreoelectronico (String $correoelectronico): void
    {
        $this->correoelectronico = $correoelectronico;
    }

    public function setNombre (String $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setContrasena (String $contrasena): void
    {
        $this->contrasena = $contrasena;
    }

    public function setRol (String $rol): void
    {
        $this->rol= $rol;
    }

}









?>