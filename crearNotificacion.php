<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Sistema de comunicación institucional</title>
    <link rel="icon" href="/comunicacion-institucional/static/img/logo.png">

    <link rel="stylesheet" href="/comunicacion-institucional/static/css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css" integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    
    <script src="/comunicacion-institucional/static/js/script.js" defer></script>
</head>
<body>
    
    <header>

        <div><a id="iniciarSesionA">Iniciar Sesión</a></div>

        <nav>

        <img src="/comunicacion-institucional/static/img/logo.png" alt="Logo del sitio">

        <div id="nombrePagina">
        <h1>UTU</h1>
        <h3>Comunicación Institucional</h3>
        </div>

        <div id="navInteractivo">
            
        <a id="notificaciones" class="boreBajo">Notificaciones</a>

        <a id="horarios" class="bordeBajo">Horarios</a>

        <a id="calendario" class="bordeBajo">Calendario</a>

        </div>

        </nav>
        

    </header>

    <main id="mainAnoti">
        <div id="ContenedorAgregarNotificacion">
            <label id="IDlabel" for="ID">
                identificador:
            </label>
            <input type="number" id="Identificador" name="Identificador" required>

            <label id="NombreLabel" for="NombreNotificacion">
                Nombre: 
            </label>
            <input type="text" id="NombreNotificacion" name="Nombre" required>

            <label id="DescripcionLabel" for="DescripcionNotificacion">
                Descripcion: 
            </label>
            <textarea id="DescripcionNotificacion" name="Descripcion" required rows="4"></textarea>

            <label id="publicoLabel" for="PublicoNotificacion">
                Publico Objetivo: 
            </label>
            <input type="text" id="PublicoNotificacion" name="Publico" required>

            <button id="AgregarNotificacion"    >Agregar Notificacion</button>
        </div>          


    </main>

   <!--
    <footer>

        <p>© 2026 Tecnoware. Todos los derechos reservados.</p>
    
    </footer>
-->
</body>
</html>