<?php
include("Conexion.php");

$nombre = $_POST['nombreusu'];
$apellido = $_POST['apellidousu'];
$correo = $_POST['correousu'];
$contraseña = $_POST['contraseña'];
$fecha_asig = $_POST['fechausu'];
$estado = $_POST['estado'];
$cargo = $_POST['cargo'];
$descargo = $_POST['descargo'];



$sql = "INSERT INTO usuario (nombreusu, apellidousu, correousu, contraseña, fechausu, estado, cargo, descargo) VALUES ('$nombre', '$apellido', '$correo', '$contraseña', '$fecha_asig', '$estado', '$cargo', '$descargo')";


?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agregar usuario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
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
 <h1 class="bg-black p-2 text-white text-center">Agregar Usurio</h1>

<div class="container">
    <br>
    <br>
    <form action="agregarusu.php " method="POST" class="container-form">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="form-label">Nombre Usuario</label>
                    <input type="text" name="nombreusu" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Apellido</label>
                    <input type="text" name="apellidousu" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">correo</label>
                    <input type="email" name="correousu" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
            <div class="mb-3">
                    <label for="" class="form-label">contraseña</label>
                    <input type="password" name="contraseña" class="form-control">
                </div>
               
                <div class="mb-3">
                    <label for="" class="form-label">Fecha Asignacion</label>
                    <input type="date" name="fechausu" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Estado</label>
                    <input type="text" name="estado" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="form-label">Cargo</label>
                    <input type="text" name="cargo" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Descroipcion cargo</label>
                    <input type="text" name="descargo" class="form-control">
                </div>
            </div>
        </div>



        </div>

<!--  -->
<button type="submit" class="btn btn-danger">Enviar</button>
      <a href="Index.php" class="btn btn-dark">Regresar</a>
<br>
      </div>
     
<br>
      
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

