<?php

    class Conexion {

        private $servidor;
        private $usuario;
        private $contrasenia;
        private $baseDeDatos;

        private $conetion = null;

        //constructor con datos hardcodeados
        public function __construct() {

            $this->servidor = "localhost";
            $this->usuario = "app";
            $this->contrasenia = "1234";
            $this->baseDeDatos = "comunicacion_institucional";
            
        }

        public function getConexion() {
            
            // Se comprueba que la conexión no exista antes de crearla, esto mantiene un solo canal abierto

            if ($this->conetion === null) {
                $this->conetion = new mysqli($this->servidor, $this->usuario, $this->contrasenia, $this->baseDeDatos);

                // En caso de error en la conexión se detiene la ejecución de la petición actual
                if ($this->conetion->connect_error) {
                    die("Conexión fallida: " . $this->conetion->connect_error);
                }
            }

            return $this->conetion;

        }

        public function cerrarConexion() {

            if ($this->conetion !== null) {
                $this->conetion->close();
                $this->conetion = null;
            }
        
        }

    }

    /*

    Código correspondiente a la primera versión de Conexion.php

    private $servidor = "localhost";
    private $usuario = "app";
    private $contrasenia = "1234";
    private $baseDeDatos = "comunicacion_institucional";


    $conexion = new mysqli($servidor, $usuario, $contrasenia, $baseDeDatos);

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    echo "Conexión exitosa";


    */

?>