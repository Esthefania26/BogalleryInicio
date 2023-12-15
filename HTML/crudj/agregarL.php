<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Lugares</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
    if (isset($_POST['Registrar'])) {
        $nombre = $_POST["nombre"];
        $localidad = $_POST["localidad"];
        $barrio = $_POST["barrio"];
        $nomeclatura = $_POST["Nomenclatura"];
        $TipoL = $_POST["TipoL"];
        $descripcion = $_POST["descripcion"];
        $fecha = $_POST["fecha"];
        $idusu = $_POST["Id_usu"];
    
        include("conexion.php");
    
        $sql = "INSERT INTO lugar (NombreL, LocalidadL, BarrioL, NomenclaturaL, TipoL, DescripcionL, Fecha_publicacionL, Id_usu)
        VALUES ('$nombre','$localidad','$barrio','$nomeclatura','$TipoL','$descripcion','$fecha', $idusu);";
    
        $resultado = mysqli_query($conexion, $sql);
    
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
   <h1 class="bg-black p-3 text-white text-center">Agregar Lugares</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="container-form" >
            
    <form>
    <div class="row">
  <div class=" col-md-6 mb-3">
    <label for="nombre" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre" required>
  </div>

  <div class="col-md-6 mb-3">
    <label for="localidad" class="form-label">Localidad:</label>
    <input type="text" class="form-control" id="localidad" name="localidad" placeholder="Ingrese la localidad" required>
  </div>
  </div>
  <div class="row">
  <div class="col-md-6 mb-3">
    <label for="barrio" class="form-label">Barrio:</label>
    <input type="text" class="form-control" id="barrio" name="barrio" placeholder="Ingrese el barrio" required>
  </div>

  <div class="col-md-6 mb-3">
    <label for="nomenclatura" class="form-label">Nomeclatura:</label>
    <input type="text" class="form-control" id="nomenclatura" name="nomenclatura" placeholder="Ingrese la nomenclatura" required>
  </div>
  </div>
        
  <div class="row">
  <div class="col-md-6 mb-3">
    <label for="TipoL" class="form-label">Tipo de lugar:</label>
    <input type="text" class="form-control" id="TipoL" name="TipoL" placeholder="Ingrese el tipo de lugar" required>
  </div>

  <div class="col-md-6 mb-3">
    <label for="descripcion" class="form-label">Descripción:</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese la descripción" required>
  </div>
  </div>


  <div class="row">
  <div class="col-md-6 mb-3">
    <label for="fecha" class="form-label">Fecha:</label>
    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Ingrese la fecha" required>
  </div>

  <div class="col-md-6 mb-3">
    <label for="Id_usu" class="form-label">ID de usuario:</label>
    <input type="number" class="form-control" id="Id_usu" name="Id_usu" placeholder="Ingrese el ID de usuario" required>
  </div>

  </div>

            
            <button  type="submit" class="btn btn-primary" name="Registrar">Registrar</button>
            <a class="btn btn-danger" href="index.php">Regresar</a>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <?php
     }
        ?>
</body>

</html>