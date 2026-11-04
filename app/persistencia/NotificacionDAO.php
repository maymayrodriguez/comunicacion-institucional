<?php

    /*namespace app\persistencia;

    use app\persistencia\Conexion;
    use app\logica\entidades\NotificacionEntidad;

    require_once __DIR__ . "\..\config\autoload.php";
    */


    require_once __DIR__ . "/../persistencia/Conexion.php";


    //Esta clase será modificada para que herede de DAOGenerico

    class NotificacionDAO {


        private Conexion $conexion;
            

        public function __construct(){
            
            $this->conexion = Conexion::getInstancia();
            
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
            
        }

        function obtenerNotificaciones (int $limite, int $desplazamiento): array {

            $sql = "SELECT identificador, nombre, descripcion, publico FROM notificaciones ORDER BY identificador DESC LIMIT ? OFFSET ?";

            $conexion = $this->conexion->getConexion();

            $sentencia = $conexion->prepare($sql);
            $sentencia->bind_param("ii", $limite, $desplazamiento);
            $sentencia->execute();

            $resultado = $sentencia->get_result();

            $notificaciones = array();

            while ($fila = $resultado->fetch_assoc()) {
                $notificacion = new NotificacionEntidad($fila["identificador"], $fila["nombre"], $fila["descripcion"], $fila["publico"]);
                $notificaciones[] = $notificacion;
            }

            $sentencia->close();

            return $notificaciones;

        }

        
    }

?>