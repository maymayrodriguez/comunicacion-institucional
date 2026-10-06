<?php

require_once 'NotificacionEntidad.php';
require_once 'NotificacionDAO.php';

class NotificacionLogica{

    function crearNotificacion (int $identificador, string $nombre, string $descripcion, string $publico): boolean{

        $notificacion = new NotificacionEntidad($identificador, $nombre, $descripcion, $publico);  

        $notificacionDAO = new NotificacionDAO();

        $notificacionDAO->insertarNotificacion($notificacion);

        return true;
        
    }

    }

?>
