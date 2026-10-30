<?php

require_once __DIR__ . '/../logica/UsuarioLogica.php';

$servicioUsuario = new UsuarioLogica ();

if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $correoElectronico = trim($_POST["correoElectronico"]);
    $contrasenia = $_POST["contrasenia"];


    if(empty($correoElectronico) || empty($contrasenia)){
        header("Location: ../../error.php");
        exit;
    } 

    $usuario = $servicioUsuario->iniciarSesion($correoElectronico, $contrasenia);
    

    session_start();

    if ($usuario !== null){
        
    
        $_SESSION["correoElectronico"] = $usuario->getCorreoElectronico();

        $_SESSION["nombre"] = $usuario->getNombre();

        $_SESSION["rol"] = $usuario->getRol();

        header("Location: ../../index.php");
        exit;

    }else{


        header("Location: ../../index.php?accion=credenciales-incorrectas");
        exit;


    }

}else{

    header("Location: ../../index.php");
    exit;

}

?>