<?php

namespace app\logica\NotificacionLogica;

use app\logica\NotificacionEntidad;
use app\persistencia\NotificacionDAO;

class NotificacionLogica{

    function crearNotificacion (int $identificador, string $nombre, string $descripcion, string $publico): boolean{

        $notificacion = new NotificacionEntidad($identificador, $nombre, $descripcion, $publico);  

        $notificacionDAO = new NotificacionDAO();

        $notificacionDAO->insertarNotificacion($notificacion);

        return true;
        
    }

    }

?>
