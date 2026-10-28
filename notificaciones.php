<?php

    require_once 'app/presentacion/NotificacionPresentacion.php';
    require_once 'app/logica/Entidades/NotificacionEntidad.php';

    $notificacionPresentacion = new NotificacionPresentacion();
    
    //try {
        $notificaciones = $notificacionPresentacion->obtenerNotificaciones(10, 1);
        //la siguiente versión podría pasar también el tipo de usuario para filtrar las notificaciones según el público
    /*} catch (Exception $e) {
        
        header("Location: error.php");
        
        //echo "Error: " . $e->getMessage();

        exit();

    }*/


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
        <div id="paginacion">
            <?php
            for($i = 1; $i <= 10; $i++){
                echo '<a href="index.php?pagina=' . $i . '" class="paginacionIndices">' . $i . '</a>';
            }

            ?>
    </div>
    </main>