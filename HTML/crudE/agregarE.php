<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        .container-form {
            max-width: 1000px; /* Ancho máximo del contenedor del formulario */
            margin: 0 auto; /* Centrar horizontalmente */
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1); /* Sombra ligera */
        }

        .btn-center {
            display: flex;
            justify-content: center;
        }

        .btn-container {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_POST['Enviar'])){
        // Procesamiento del formulario
        $nit=$_POST['Nit_empresa'];
        $nombre=$_POST['Nombre_em'];
        $razon=$_POST['Razon_social'];
        $rut=$_POST['Rut'];
        $telefono=$_POST['Telefono_em'];
        $nomeclatura=$_POST['Nomenclatura_em'];
        $localidad=$_POST['Localidad_em'];
        $barrio=$_POST['Barrio_em'];
        $fecha=$_POST['Fecha_registro_em'];
        $correo=$_POST['Correo_em'];
        $contrasena=$_POST['Contrasena'];

        include("conexion.php");
        $sql=" INSERT INTO empresa(Nit_empresa,Nombre_em,Razon_social,Rut,Telefono_em,Nomenclatura_em,
        Localidad_em,Barrio_em,Fecha_registro_em,Correo_em,Contrasena) 
        Values('$nit','$nombre','$razon','$rut','$telefono','$nomeclatura','$localidad','$barrio',
        '$fecha','$correo','$contrasena')";

        $resultado=mysqli_query($conexion, $sql);
        if ($resultado) {
            echo "<script language = 'JavaScript'>
                alert('Los datos fueron ingresados correctamente a la BD');
                window.location.assign('index.php');
                </script> ";
        } else {
            echo "<script language = 'JavaScript'>
                alert('ERROR: Los datos NO fueron ingresados correctamente a la BD');
                window.location.assign('index.php');
                </script> ";
        }
        mysqli_close($conexion);
    } else {
    ?>
 <h1 class="bg-black p-2 text-white text-center">Agregar Empresa</h1>
    <div class="container">
        <div class="container-form">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post" id="registroForm">


                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="Nit_empresa" class="form-label">Nit de la empresa</label>
                        <input type="number" name="Nit_empresa" class="form-control" id="Nit_empresa" placeholder="Ingrese el Nit de la empresa" required>
                    </div>
                    <div class="col-md-4">
                        <label for="Nombre_em" class="form-label">Nombre de la empresa</label>
                        <input type="text" name="Nombre_em" class="form-control" id="Nombre_em" placeholder="Nombre de la empresa" required>
                    </div>
                    <div class="col-md-4">
                        <label for="Razon_social" class="form-label">Razón social</label>
                        <input type="text" name="Razon_social" class="form-control" id="Razon_social" placeholder="Razón social" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="Correo_em" class="form-label">Correo</label>
                        <input type="email" name="Correo_em" class="form-control" id="Correo_em" placeholder="Correo" required>
                    </div>
                    <div class="col-md-4">
                        <label for="Rut" class="form-label">Rut</label>
                        <input type="number" name="Rut" class="form-control" id="Rut" placeholder="Rut" required>
                    </div>
                    <div class="col-md-4">
                        <label for="Telefono_em" class="form-label">Teléfono</label>
                        <input type="text" name="Telefono_em" class="form-control" id="Telefono_em" placeholder="Teléfono" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="Nomenclatura_em" class="form-label">Nomenclatura</label>
                        <input type="text" name="Nomenclatura_em" class="form-control" id="Nomenclatura_em" placeholder="Nomenclatura" required>
                    </div>
                    <div class="col-md-4">
                        <label for="Localidad_em" class="form-label">Localidad</label>
                        <input type="text" name="Localidad_em" class="form-control" id="Localidad_em" placeholder="Localidad" required>
                    </div>
                    <div class="col-md-4">
                        <label for="Barrio_em" class="form-label">Barrio</label>
                        <input type="text" name="Barrio_em" class="form-control" id="Barrio_em" placeholder="Barrio" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="Fecha_registro_em" class="form-label">Fecha Registro</label>
                        <input type="date" name="Fecha_registro_em" class="form-control" id="Fecha_registro_em" required>
                    </div>
                    <div class="col-md-4">
                        <label for="Contrasena" class="form-label">Contraseña</label>
                        <input type="password" name="Contrasena" class="form-control" id="Contrasena" placeholder="Ingrese la Contraseña" required>
                    </div>
                </div>

                <input type="submit" name="Enviar" value="Agregar" class="btn btn-primary">
                <a href="index.php" class="btn btn-secondary">Regresar</a>
            </form>
        </div>
    </div>
    <?php
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
