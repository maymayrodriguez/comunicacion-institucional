<?php
    require_once 'Conexion.php';
    require_once 'UsuarioEntidad.php';
    

    $Usuario = new UsuarioEntidad ("locoperez@gmail.com","Loco Perez","1234","Estudiante");
    
    $conexion = Conexion::getInstancia();
    $UsuarioDAO = new UsuarioDAO($conexion);

    $UsuarioDAO->insertarUsuario($Usuario);
    $UsuarioDAO->obtenerUsuario();
    
    class UsuarioDAO {

        private Conexion $conexion;
            

        public function __construct(Conexion $conexion){
            
            $this->conexion = $conexion;
            
        }
       

        function insertarUsuario (UsuarioEntidad $Usuario){
        
            $correoelectronico = $Usuario->getCorreoelectronico();
            $nombre = $Usuario->getNombre();
            $contrasena = $Usuario->getContrasena();
        
            
            $sql = "INSERT INTO usuarios (correo_electronico, nombre, contrasenia, rol) VALUES (?, ?, ?, ?)";  

            $conexion = $this->conexion.getConexion(); 

            $sentencia = $conexion->prepare($sql);
            $sentencia->bind_param("ssss", $correoelectronico, $nombre, $contrasena, $rol);
            $sentencia ->execute();

            $sentencia->close();
            $this->conexion->cerrarConexion();
            
        }

        function  obtenerUsuarios () {

            $sql = "SELECT * FROM notificaciones";

            $conexion = $this->conexion.getConexion();

            $resultado = $conexion->query($sql);

            while ($fila = $resultado->fetch_assoc()) {
                echo "CorreoElectronico: " . $fila["correo_electronico"] . "<br>";
                echo "Nombre: " . $fila["nombre"] . "<br>";
                echo "Contraseña: " . $fila["contrasenia"] . "<br>";
                echo "Rol: " . $fila["rol"] . "<br><br>";
            }

            $this->conexion->cerrarConexion();

        }


        
    }
    ?>