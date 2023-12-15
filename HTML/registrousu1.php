<?php

require_once 'registrousu.php';

$nombre = $_POST["Nombre_usu"];
$apellido = $_POST["Apellido_usu"];
$edad = $_POST["Edad_usu"];
$direccion = $_POST["Direccion_usu"];
$fechan = $_POST["Fecha_usu"];
$telefono = $_POST["Telefono_usu"];
$Correo = $_POST["Correo_usu"];
$password = $_POST["Password_usu"];
$primeri = $_POST["Primer_idioma"];
$segundoi = $_POST["Segudo_idioma"];

$insert = "INSERT INTO usuario (
    Nombre_usu,
    Apellido_usu,
    Edad_usu,
    Direccion_usu,
    Fecha_usu,
    Telefono_usu,
    Correo_usu,
    Password_usu,
    Primer_idioma,
    Segudo_idioma
  ) VALUES (
    '$nombre',
    '$apellido',
    '$edad',
    '$direccion',
    '$fechan',
    '$telefono',
    '$Correo',
    '$password',
    '$primeri',
    '$segundoi'
  )";
  
$query= mysqli_query($conectar, $insert);

if($query){
    echo "los datos se almacenaron de manera exitosa";

}
else { 
     echo"error al conectarse";
}
mysqli_close($conectar);
?>