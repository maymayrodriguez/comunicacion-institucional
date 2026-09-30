function inicializarLoginButton() {
    const loginButton = document.getElementById("loginButton");
    if (loginButton){
        loginButton.addEventListener("click", (e) => {
            e.preventDefault();

        const UsuarioIngresado = document.getElementById("user").value;
        const PasswordIngresado = document.getElementById("contrasena").value;


        if (UsuarioIngresado === "Estudiante" && PasswordIngresado === "Estudiante") {

            window.location.href = "principal-estudiante.php";
        }
        else if (UsuarioIngresado === "Docente" && PasswordIngresado === "Docente") {
            window.location.href = "principal-docente.php";
        }
        else{
            alert("Usuario o contraseña incorrectos. Por favor, inténtelo de nuevo.");
        }
        });
    }
    else {
        console.log("loginButton no encontrado");
    }
}

/*-------------------------------------------*/
/*Funcionamiento del botón del menú desplegable*/

//Guarda el botón en una constante
const botonMenu = document.querySelector("#menuHeader button");
if (botonMenu){
    //Guarda el <ul> hijo del menú 
    let menuDesplegable = document.querySelector("#menuHeader ul");

    //Agrega un evento de "Click" al botón
    botonMenu.addEventListener("click", () => {
        //Asigna o quita la clase "oculto" al elemento, lo hace cada vez que se presiona el botón.
        menuDesplegable.classList.toggle("oculto");

    });
    //Agrega un evento "Click" para que cuando se presione fuera del botón, se cierre el menú desplegable
    document.addEventListener("click", (clickFuera) => {
        //Si el evento "Click" no es sobre el botón del menú ejecuta
        if (!botonMenu.contains(clickFuera.target)){
            //cambia la clase del menú para que se oculte
            menuDesplegable.classList.add("oculto");

        }
    });
}
const horarios = document.querySelector("#horarios");
const calendario = document.querySelector("#calendario");
const grupos = document.querySelector("#grupos");
const notificaciones = document.querySelector("#notificaciones");
const iniciarSesionA = document.querySelector("#iniciarSesionA");
const cerrarSesionA = document.querySelector("#cerrarSesionA");
const indexMain = document.querySelector("#mainInicio");


if (horarios && calendario && grupos && notificaciones && iniciarSesionA && cerrarSesionA){

    document.addEventListener("DOMContentLoaded", async () => {

        const respuestaNotificaciones = await fetch ("notificaciones.php");

        const notificacionesTexto = await respuestaNotificaciones.text();

        indexMain.innerHTML = notificacionesTexto;

    });

    horarios.addEventListener("click", async () =>{

        const respuestaHorarios = await fetch ("horarios.php");

        const horarioTexto = await respuestaHorarios.text();

        indexMain.innerHTML = horarioTexto;


    });

    calendario.addEventListener("click", async () => {

        const respuestaCalendario = await fetch ("calendario.php");

        const calendarioTexto = await respuestaCalendario.text();

        indexMain.innerHTML = calendarioTexto;

    });

    grupos.addEventListener("click", async () => {

        const respuestaGrupos = await fetch ("grupos.php");

        const gruposTexto = await respuestaGrupos.text();

        indexMain.innerHTML = gruposTexto;

    });

    notificaciones.addEventListener("click", async () => {

        const respuestaNotificaciones = await fetch ("notificaciones.php");

        const notificacionesTexto = await respuestaNotificaciones.text();

        indexMain.innerHTML = notificacionesTexto;

    });

    iniciarSesionA.addEventListener("click", async () => {
        
        const respuestaLogin = await fetch("login.php");

        const loginTexto = await respuestaLogin.text();

        indexMain.innerHTML = loginTexto;

        inicializarLoginButton();

    });
        
}