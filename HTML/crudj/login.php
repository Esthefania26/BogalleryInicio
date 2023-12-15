<?php

// Conectarse a la base de datos
 $mysqli = new mysqli("localhost", "root", "", "bogalleryf33");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos de inicio de sesión del usuario
    $correo_usu = $_POST['correo_usu'];
    $password_usu = $_POST['password_usu'];

    // Realizar una consulta a la tabla `usuario`
    $consulta = "SELECT u.Correo_usu, u.Password_usu, r.Nombre_rol
                FROM usuario u
                INNER JOIN usuariorol ur ON u.Id_usu = ur.Id_usu
                INNER JOIN rol r ON ur.Id_rol = r.Id_rol
                WHERE u.Correo_usu = '{$correo_usu}' AND u.Password_usu = '{$password_usu}'";
    $resultado = mysqli_query($mysqli, $consulta);

    // Si la consulta devuelve un solo registro, significa que el usuario ha iniciado sesión correctamente 
    if (mysqli_num_rows($resultado) == 1) {
        session_start();
        $_SESSION['correo_usu'] = $correo_usu;
        // Obtener el rol del usuario
        $registro = mysqli_fetch_assoc($resultado);
        $rol_usu = $registro['Nombre_rol'];

        // Redireccionar al usuario a la página correspondiente
        switch ($rol_usu) {
            case "Representante Empresa":
                header("Location:../../HTML/Dashboard2.php");
                break;
            case "Administrador":
                header("Location:../../HTML/Dashboard.php");
                break;
            case "Cliente":
                header("Location:../../HTML/inicio.html");
                break;
        }

            exit;

    }else {


        // El usuario no ha iniciado sesión correctamente
        echo "<script language = 'JavaScript'>
                alert('El usuario y la contraseña no se encuentran registrados, mal viaje');
                window.location.assign('../loginn.html');
                </script> ";
                exit;

    }

    // Cerrar la conexión a la base de datos
    mysqli_close($mysqli);
}
?>
