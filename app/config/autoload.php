<?php

spl_autoload_register(function($class){

    $prefijo = "app\\";
    
    // Subimos un nivel desde 'config' para quedar directamente en la carpeta 'app'
    $ruta = __DIR__ . '/../';

    // Limpiamos el prefijo y normalizamos las barras para Windows/Linux
    $claseLimpia = str_replace($prefijo, "", $class);
    $claseLimpia = str_replace('\\', DIRECTORY_SEPARATOR, $claseLimpia);

    $caminoclase = $ruta . $claseLimpia . ".php";

    if (file_exists($caminoclase)){
        require_once $caminoclase;
    } else {
        die("No se pudo cargar el archivo: " . $caminoclase);
    }
});
?>