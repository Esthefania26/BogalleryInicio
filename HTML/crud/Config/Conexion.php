<?php
$host ="localhost";
$user ="root";
$clave ="";
$db ="bogalleryf33";

$conexion = new mysqli($host, $user, $clave, $db);

if(!$conexion){
    echo 'conexion fallida';
}
?>