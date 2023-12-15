
<?php
include("conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>EDITAR</title>
</head>
<body>
    
    <?php
    if(isset($_POST['Registrar'])){
        $Id_lugar = $_POST['Id_lugar'];
        $nombre = $_POST["nombre"];
        $localidad = $_POST["localidad"];
        $barrio = $_POST["barrio"];
        $nomeclatura = $_POST["Nomenclatura"];
        $TipoL = $_POST["TipoL"];
        $descripcion = $_POST["descripcion"];
        $fecha = $_POST["fecha"];
       // $idusu = $_POST["Id_usu"];

        $sql = "UPDATE lugar SET NombreL='$nombre', LocalidadL='$localidad', BarrioL='$barrio',
       NomenclaturaL='$nomeclatura', TipoL='$TipoL', DescripcionL='$descripcion',
        Fecha_publicacionL='$fecha' WHERE Id_lugar='$Id_lugar'";

       $resultado = mysqli_query($conexion, $sql);

        
        if($resultado){
            
            echo "<script language = 'JavaScript'>
                alert('Los datos fueron Actualizados correctamente a la BD');
                window.location.assign('index.php');
                </script> ";

        }else{
            echo "<script language = 'JavaScript'>
                alert('ERROR: Los datos No pudieron ser actualizados BD');
                window.location.assign('index.php');
                </script> ";

        }

        mysqli_close($conexion);


    }else{
        $Id_lugar = $_GET['Id_lugar'];
        $sql = "SELECT * FROM lugar where Id_lugar = '$Id_lugar'";
        $resultado = mysqli_query($conexion,$sql);

        $fila = mysqli_fetch_assoc($resultado);
        $nombre=$fila["NombreL"];
        $localidad=$fila["LocalidadL"];
        $barrio=$fila["BarrioL"];
        $nomeclatura=$fila["NomenclaturaL"];
        $TipoL=$fila["TipoL"];
        $descripcion=$fila["DescripcionL"];
        $fecha=$fila['Fecha_publicacionL'];
        $idusu=$fila["Id_usu"];

        mysqli_close($conexion);
    ?>

      <h1 class="text-center bg-dark text-white p-3">Editar Lugar</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            
        
            <div class="mb-3">
    <label for="nombre" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre"value=" <?php echo $nombre; ?>" required>
  </div>
            
            <div class="mb-3">
    <label for="localidad" class="form-label">Localidad:</label>
    <input type="text" class="form-control" id="localidad" name="localidad" placeholder="Ingrese la localidad" value="<?php echo $localidad; ?>" required>
  </div>


            <div class="mb-3">
    <label for="barrio" class="form-label">Barrio:</label>
    <input type="text" class="form-control" id="barrio" name="barrio" placeholder="Ingrese el barrio"  value="<?php echo $barrio; ?>" required>
  </div>
           
  <div class="mb-3">
    <label for="nomenclatura" class="form-label">Nomenclatura:</label>
    <input type="text" class="form-control" id="nomenclatura" name="Nomenclatura" placeholder="Ingrese la nomenclatura" value="<?php echo $nomeclatura; ?>" required>
</div>

            <div class="mb-3">
    <label for="TipoL" class="form-label">Tipo de lugar:</label>
    <input type="text" class="form-control" id="TipoL" name="TipoL" placeholder="Ingrese el tipo de lugar" value="<?php echo $TipoL; ?>" required>
  </div>


            
            <div class="mb-3">
    <label for="descripcion" class="form-label">Descripción:</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese la descripción" value="<?php echo $descripcion; ?>" required>
  </div>
          
         
           <div class="mb-3">
    <label for="fecha" class="form-label">Fecha:</label>
    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Ingrese la fecha" value="<?php echo $fecha; ?>" required>
  </div>
           <!-- <div class="mb-3">
                Id_usu: <input class="form-control" type="number" name="Id_usu" value="<?php echo $idusu; ?> " >
            </div> -->
            <div class="mb-3">
                <input type="hidden" name="Id_lugar" value="<?php echo $Id_lugar; ?>">
            </div>
            <button  type="submit" class="btn btn-primary" name="Registrar">Actualizar</button>
            <a href="index.php">Regresar</a>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <?php
     }
        ?>
</body>
</html>