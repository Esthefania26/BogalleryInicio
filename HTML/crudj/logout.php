<?php
// Iniciar sesión
session_start();

// Eliminar todas las variables de sesión
$_SESSION = array();

// Destruir la sesión
session_destroy();

// Redireccionar al usuario a la página de inicio de sesión
header("Location:../loginn.html");
exit;
?>