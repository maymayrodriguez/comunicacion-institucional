<?php

spl_autoload_register(function($class){

$prefijo = "app/";
$ruta = __DIR__ . "/../app";

$class = str_replace('\\', '/', $class);
$caminoclase = $ruta . str_replace($prefijo, "", $class) . ".php";

if (file_exists($caminoclase)){

    require_once $caminoclase;

}else{

    die ("No se pudo cargar el archivo" . $caminoclase);
}
});
?>