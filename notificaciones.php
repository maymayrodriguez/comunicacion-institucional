<?php

    require_once 'app/presentacion/NotificacionPresentacion.php';
    require_once 'app/logica/Entidades/NotificacionEntidad.php';

    $notificacionPresentacion = new NotificacionPresentacion();
    $notificaciones = $notificacionPresentacion->obtenerNotificaciones(-1, -1);

?>

    <main id = "mainNotificaciones"> 
            <div id = "contenedorNotificaciones">
                <h2>Últimas novedades</h2>
    

                <?php

                    foreach ($notificaciones as $notificacion) {
        
                        echo '<div class = "notificacion">';
                        echo '<h3>' . $notificacion->getNombre() . '</h3>';
                        echo '<p>' . $notificacion->getDescripcion() . '</p>';
                        echo '<a class="leerMas">Leer más</a>';
                        echo '</div>';

                    }

                ?>


        </div>
    </main>

<?php



    /*

    $notificacionPresentacion = new NotificacionPresentacion();

    $notificacion = $notificacionPresentacion->obtenerNotificacion();

    */

/*
    <main id = "mainNotificaciones"> 
        <div id = "contenedorNotificaciones">
            <h2>Últimas novedades</h2>
            <div class = "notificacion">
                <h3> <?php echo $notificacion->getNombre(); ?> </h3>
                <p> <?php echo $notificacion->getDescripcion(); ?> </p>
                <a class="leerMas">Leer más</a>
            </div>
            <div class = "notificacion">
                <h3> Segunda defensa del proyecto </h3>
                <p> Este miércoles 30 de septiembre de 2026 a las 19:00 se llevará a cabo la segunda defensa del proyecto de 3ero MC</p>
            </div>
            <div class = "notificacion">
                <h3> Segunda defensa del proyecto </h3>
                <p> Este miércoles 30 de septiembre de 2026 a las 19:00 se llevará a cabo la segunda defensa del proyecto de 3ero MC</p>
            </div>
            <div class = "notificacion">
                <h3> Segunda defensa del proyecto </h3>
                <p> Este miércoles 30 de septiembre de 2026 a las 19:00 se llevará a cabo la segunda defensa del proyecto de 3ero MC</p>
            </div>
        </div>
    </main>

    */
?>