<?php

    require_once 'app/presentacion/NotificacionPresentacion.php';
    require_once 'app/logica/Entidades/NotificacionEntidad.php';

    $notificacionPresentacion = new NotificacionPresentacion();
    


    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 1;
    }


    
    $notificaciones = $notificacionPresentacion->obtenerNotificaciones(10, $pagina);



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
        <div>
            <?php
            for($i = 1; $i <= 10; $i++){
                echo '<a href="index.php?pagina=' . $i . '">' . $i . '</a>';
            }
            ?>
    </div>
    </main>