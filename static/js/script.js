document.getElementById("loginButton").addEventListener("click", (e) => {
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
