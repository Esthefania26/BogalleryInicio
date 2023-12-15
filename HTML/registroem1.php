<?php
include("registroem.php");
$nit = $_POST["Nit_empresa"];
$nombre = $_POST["Nombre_em"];
$razon = $_POST["Razon_social"];
$rut = $_POST["Rut"];
$telefono = $_POST["Telefono_em"];
$nomenclatura = $_POST["Nomenclatura_em"];
$localidad = $_POST["Localidad_em"];
$barrio = $_POST["Barrio_em"];
$fecha = $_POST["Fecha_registro_em"];
$correo = $_POST["Correo_em"];
$contraseña = $_POST["contrasena"];

$insert = "INSERT INTO empresa (Nit_empresa, Nombre_em, Razon_social, Rut, Telefono_em, Nomenclatura_em, Localidad_em, Barrio_em, Fecha_registro_em, Correo_em, contrasena)
 VALUES ('$nit', '$nombre', '$razon', '$rut', '$telefono', '$nomenclatura', '$localidad', '$barrio', '$fecha', '$correo', '$contraseña')";

$resultado = mysqli_query($conectar, $insert);

if ($resultado) {
    echo "<script language = 'JavaScript'>
        alert('Los datos fueron ingresados correctamente a la BD');
        window.location.assign('loginn.html');
        </script> ";
} else {
    echo "<script language = 'JavaScript'>
        alert('ERROR: Los datos NO fueron ingresados correctamente a la BD: " . mysqli_error($conectar) . "');
        window.location.assign('index.php');
        </script> ";
}

mysqli_close($conectar);
?>




