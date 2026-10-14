<?php

    require_once 'Conexion.php';
    require_once 'NotificacionEntidad.php';
    
    
    $notificacion = new NotificacionEntidad(16,"Notificacion de prueba 4","Esta es una notificación de prueba","2°MC");
    
    $conexion = new Conexion();
    $notificacionDAO = new NotificacionDAO($conexion);

    $notificacionDAO->insertarNotificacion($notificacion);
    $notificacionDAO->obtenerNotificaciones();
    
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
            
            //No se debe fijar el valor del identificador ya que es autoincrementable

            $sql = "INSERT INTO notificaciones (identificador, nombre, descripcion, publico) VALUES (?, ?, ?, ?)";  

            $conexion = $this->conexion->getConexion(); 

            $sentencia = $conexion->prepare($sql);
            $sentencia->bind_param("isss", $identificador, $nombre, $descripcion, $publico);
            $sentencia ->execute();

            $sentencia->close();
            $this->conexion->cerrarConexion();
            
        }

        function  obtenerNotificaciones () {

            $sql = "SELECT identificador, nombre, descripcion, publico FROM notificaciones";

            $conexion = $this->conexion->getConexion();

            $resultado = $conexion->query($sql);

            // Obtener conexión deberá devolver los correspondietes

            while ($fila = $resultado->fetch_assoc()) {
                echo "Identificador: " . $fila["identificador"] . "<br>";
                echo "Nombre: " . $fila["nombre"] . "<br>";
                echo "Descripción: " . $fila["descripcion"] . "<br>";
                echo "Público: " . $fila["publico"] . "<br><br>";
            }

            $this->conexion->cerrarConexion();

        }


        
    }

?>