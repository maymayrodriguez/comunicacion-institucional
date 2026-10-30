<?php

    require_once __DIR__ . "/../logica/Entidades/UsuarioEntidad.php";
    require_once __DIR__ . "/../persistencia/Conexion.php";
    
    /*
    $Usuario = new UsuarioEntidad ("locoperez@gmail.com","Loco Perez","1234","Estudiante");

    $conexion = Conexion::getInstancia();
    $UsuarioDAO = new UsuarioDAO($conexion);

    $UsuarioDAO->insertarUsuario($Usuario);
    $UsuarioDAO->obtenerUsuario();

    */


    class UsuarioDAO {

        private Conexion $conexion;
            

        public function __construct(){
            
            $this->conexion = Conexion::getInstancia();
            
        }


        public function obtenerUsuario (string $correoElectronico) : ?UsuarioEntidad{

            $sql = "SELECT correo_electronico, contrasenia, nombre, rol FROM usuarios WHERE correo_electronico = ?";

            $conexion = $this->conexion->getConexion();

            $sentencia = $conexion->prepare($sql);
            $sentencia->bind_param("s", $correoElectronico);
            $sentencia->execute();
            $resultado = $sentencia->get_result();


            $fila = $resultado->fetch_assoc();

            if (! $fila){ 
                $sentencia->close();
                return null; 
            }

            $usuario = new UsuarioEntidad($fila["correo_electronico"], $fila["contrasenia"], $fila["nombre"], $fila["rol"]);

            $sentencia->close();
            return $usuario;
        }


        


       /*

        function insertarUsuario (UsuarioEntidad $Usuario){
        
            $correoelectronico = $Usuario->getCorreoelectronico();
            $nombre = $Usuario->getNombre();
            $contrasenia = $Usuario->getContrasenia();
        
            
            $sql = "INSERT INTO usuarios (correo_electronico, nombre, contrasenia, rol) VALUES (?, ?, ?, ?)";  

            $conexion = $this->conexion.getConexion(); 

            $sentencia = $conexion->prepare($sql);
            $sentencia->bind_param("ssss", $correoelectronico, $nombre, $contrasenia, $rol);
            $sentencia ->execute();

            $sentencia->close();
            $this->conexion->cerrarConexion();
            
        }

*/
        
    }
    ?>