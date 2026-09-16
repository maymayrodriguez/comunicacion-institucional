<?php

    class Conexion {

        private $servidor;
        private $usuario;
        private $contrasenia;
        private $baseDeDatos;
        public $conexion;


        //constructor con datos hardcodeados
        public function __construct() {

            $this->servidor = "localhost";
            $this->usuario = "app";
            $this->contrasenia = "1234";
            $this->baseDeDatos = "comunicacion_institucional";
            $this->conexion = new mysqli($this->servidor, $this->usuario, $this->contrasenia, $this->baseDeDatos);

            // En caso de error en la conexión se detiene la ejecución de la petición actual
            if ($this->conexion->connect_error) {
                die("Conexión fallida: " . $this->conexion->connect_error);
            }

        }

        public function getConexion() {
            return $this->conexion;
        }

        public function cerrarConexion() {
            $this->conexion->close();
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