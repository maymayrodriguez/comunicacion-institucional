<?php

    // req

    require_once 'app/presentacion/NotificacionPresentacion.php';
    require_once 'app/logica/Entidades/NotificacionEntidad.php';

    $notificacionPresentacion = new NotificacionPresentacion();

    $notificacion = $notificacionPresentacion->obtenerNotificacion();


    //$nombre = $notificacion->getNombre();

    //echo "$nombre";

    //$notificacion = $notificacionPresentacion->
    // llamado a la presentacion


    // $notifPres = new NotificacionPResentacion()
    // $arrayNotificaciones = $notifPres->listarNotificacionesRecientes();

?>


    <main id = "mainNotificaciones"> 
        <div id = "contenedorNotificaciones">
            <h2>Últimas novedades</h2>
            <div class = "notificacion">
                <h3> <?php  ?> </h3>
                <p> Este miércoles 30 de septiembre de 2026 a las 19:00 se llevará a cabo la segunda defensa del proyecto de 3ero MC Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ut tenetur assumenda. Sapiente optio eius mollitia incidunt voluptatibus laudantium natus cum, dolor suscipit vel facilis veniam blanditiis quam necessitatibus vero.</p>
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
