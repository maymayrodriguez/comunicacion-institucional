const loginButton = document.getElementById("loginButton");
if (loginButton){
    loginButton.addEventListener("click", (e) => {
        e.preventDefault();

    const UsuarioIngresado = document.getElementById("user").value;
    const PasswordIngresado = document.getElementById("contrasena").value;


    if (UsuarioIngresado === "Estudiante" && PasswordIngresado === "Estudiante") {

        window.location.href = "principal-estudiante.html";
    }
    else if (UsuarioIngresado === "Docente" && PasswordIngresado === "Docente") {
        window.location.href = "principal-docente.html";
    }
    else{
        alert("Usuario o contraseña incorrectos. Por favor, inténtelo de nuevo.");
    }
    });
}

/*-------------------------------------------*/
/*Funcionamiento del botón del menú desplegable*/

//Guarda el botón en una constante
const botonMenu = document.querySelector("#menuHeader button");
if (botonMenu){
    //Agrega un evento de "Click" al botón
    botonMenu.addEventListener("click", () => {
        //Guarda el <ul> hijo del menú 
        let menuDesplegable = document.querySelector("#menuHeader ul");
        //Asigna o quita la clase "oculto" al elemento, lo hace cada vez que se presiona el botón.
        menuDesplegable.classList.toggle("oculto");
    });
}