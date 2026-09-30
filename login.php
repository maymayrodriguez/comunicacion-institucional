>
    <!--Cuerpo principal de la página de login-->
    <main id="mainLogin">
        
        <!--Titulo del formulario del login-->
        <h2 id="inicioSesion">Iniciar Sesión</h2>
        <!--Caja del formulario de login-->
        <section id="login"> 
            <!--Formulario de login con campos de usuario y contraseña-->
            <form>
                <!--Campo de entrada para el nombre de usuario-->
                <label id="userLabel" for="user">Usuario:</label>
                <input type="text" id="user" name="user" required>

                <!--Campo de entrada para la contraseña-->
                <label id="passwordLabel" for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>

                <!--Botón para enviar el formulario de login-->
                <button id="loginButton">Iniciar Sesión</button>
            </form>
        </section>
    </main>