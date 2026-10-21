<?php
    
require_once __DIR__ . '/../logica/NotificacionLogica.php';
require_once __DIR__ . '/../logica/Entidades/NotificacionEntidad.php';

class NotificacionPresentacion{

    private NotificacionLogica $servicioNotificacion;

    public function __construct() {
       $this->servicioNotificacion = new NotificacionLogica();
    }


    //función de prueba
    public function obtenerNotificacion(){

        //creamos una notificacion
        $notificacion = new NotificacionEntidad(0, "Notificación de prueba 1","Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ducimus sequi laudantium debitis expedita, minus maiores quaerat culpa ratione, enim recusandae et deleniti impedit. Provident fuga voluptates impedit dolore corrupti?", "orep");

        return $notificacion;


    }

    /*public function listarNotificaciones() {

        $arrNotificaciones = this->servicioNotificaciones->

        return 
    }*/

}

?>