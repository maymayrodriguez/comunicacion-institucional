<?php

    require_once 'conexion.php';
    require_once 'NotificacionEntidad.php';


    /*

    $notificacionDAO = new NotificacionDAO($conexion);

    $notificacionDAO->insertarNotificacion($notificacion, $conexion);
*/

    $notificacion = new NotificacionEntidad(15,"Notificacion de prueba 3","Esta es una notificación de prueba","Restringido");
    
    
    class NotificacionDAO {

        private Conexion $conexion;

            
        // Constructor con inyección de dependencia
        public function __construct(Conexion $conexion){
            
            $this->conexion = $conexion;
            
        }
       

        function insertarNotificacion (NotificacionEntidad $notificacion){
        
            $identificador = $notificacion->getIdentificador();
            $nombre = $notificacion->getNombre();
            $descripcion = $notificacion->getDescripcion();
            $publico = $notificacion->getPublico();
            
            $sql = "INSERT INTO notificaciones (identificador, nombre, descripcion, publico) VALUES (?, ?, ?, ?)";  

            $conexion = $this->conexion->getConexion(); 

            $sentencia = $conexion->prepare($sql);
            $sentencia->bind_param("isss", $identificador, $nombre, $descripcion, $publico);
            $sentencia ->execute();

            $sentencia->close();
            $conexion->close();
            
        }

        function  obtenerNotificaciones (Conexion $conexion) {

            $sql = "SELECT identificador, nombre, descripcion, publico FROM notificaciones";

            $conexion = $this->conexion->getConexion();

            $resultado = $conexion->query($sql);

            while ($fila = $resultado->fetch_assoc()) {
                echo "Identificador: " . $fila["identificador"] . "<br>";
                echo "Nombre: " . $fila["nombre"] . "<br>";
                echo "Descripción: " . $fila["descripcion"] . "<br>";
                echo "Público: " . $fila["publico"] . "<br><br>";
            }

        }


        
    }

    $conexion->close();
?>