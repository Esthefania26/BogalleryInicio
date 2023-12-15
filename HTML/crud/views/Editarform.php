<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <h1 class="text-center p-3" style="background-color: black; color:white" >Editar Planes</h1>
<br>
  <form class="container" action="../CRUD/EditarDatos.php" method="POST">
<?php

include_once("../Config/Conexion.php"); 
 
$sql = "SELECT * FROM planes WHERE Id_planes =".$_GET["Id"];
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();

 
?>

<input type="hidden" class="form-control" name="Id" value="<?php echo $row['Id_planes']?>">



  <div class="mb-3">
    <label for="" class="form-label">Nombre plan</label>
    <input type="text" class="form-control" name="nombrePlan" value="<?php echo $row['NombreP']?>">
  </div>
  <!--  -->
  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" value="<?php echo $row['DescripcionP']?>">
  </div>
  <!--  -->
  <div class="mb-3">
    <label for="" class="form-label">TotalCupos</label>
    <input type="number" class="form-control" name="totalCupos" value="<?php echo $row['TotalcuposP']?>">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Precio </label>
    <input type="number" class="form-control" name="precio" value="<?php echo $row['PrecioP']?>">
    </div>

    <label for="">Propietario</label>
<select class="form-select mb-3" aria-label="Default select example" name="propietario">
    <?php
    include("../Config/Conexion.php");

    // Supongamos que $row["Propietario_plan"] contiene el propietario deseado
    $propietario_actual = $row["Propietario_plan"];

    // Consulta para obtener todos los propietarios disponibles
    $sql_propietarios = "SELECT DISTINCT Propietario_plan FROM planes";
    $resultado_propietarios = $conexion->query($sql_propietarios);

    if ($resultado_propietarios->num_rows > 0) {
        // Mostrar opciones incluyendo el propietario actual
        while ($row_propietario = $resultado_propietarios->fetch_assoc()) {
            $selected = ($row_propietario['Propietario_plan'] === $propietario_actual) ? "selected" : "";
            echo "<option value='" . $row_propietario['Propietario_plan'] . "' $selected>" . $row_propietario['Propietario_plan'] . "</option>";
        }
    }
    ?>
</select>


<label for="">Jornada</label>
<select class="form-select mb-3" aria-label="Default select example" name="jornada">
    <?php
    include("../Config/Conexion.php");

    // Supongamos que $row["JornadaP"] contiene la jornada deseada
    $jornada_actual = $row["JornadaP"];

    // Consulta para obtener todas las jornadas disponibles
    $sql_jornadas = "SELECT DISTINCT JornadaP FROM planes";
    $resultado_jornadas = $conexion->query($sql_jornadas);

    if ($resultado_jornadas->num_rows > 0) {
        // Mostrar opciones incluyendo la jornada actual
        while ($row_jornada = $resultado_jornadas->fetch_assoc()) {
            $selected = ($row_jornada['JornadaP'] == $jornada_actual) ? "selected" : "";
            echo "<option value='" . $row_jornada['JornadaP'] . "' $selected>" . $row_jornada['JornadaP'] . "</option>";
        }
    }
    ?>
</select>

  <div class="mb-3">
    <label for="" class="form-label">Fecha De Inicio</label>
    <input type="text" class="form-control" name="fechaInicio" value="<?php echo $row['FechaP']?>">

  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha Final</label>
    <input type="text" class="form-control" name="fechaFinal" value="<?php echo $row['Fecha_finalP']?>">
  </div>
  <label for="">Lugares</label>
<select class="form-select mb-3" aria-label="Default select example" name="lugar">
  <option selected disabled>--Seleccione nuevo lugar--</option>
  <?php
  include("../Config/Conexion.php");

  // Supongamos que $row["Id_lugar"] contiene el ID del lugar deseado
  $id_lugar = $row["Id_lugar"];

  // Consulta para obtener todos los lugares
  $sql_lugares = "SELECT * FROM lugar";
  $resultado_lugares = $conexion->query($sql_lugares);

  if ($resultado_lugares->num_rows > 0) {
    while ($row_lugares = $resultado_lugares->fetch_assoc()) {
      // Si el ID del lugar coincide con el del registro actual, se selecciona
      $selected = ($row_lugares['Id_lugar'] == $id_lugar) ? "selected" : "";
      echo "<option value='" . $row_lugares['Id_lugar'] . "' $selected>" . $row_lugares['NombreL'] . "</option>";
    }
  }
  ?>
</select>
<div class="mb-3">
    <label for="" class="form-label">Nit de la empresa</label>
    <input type="number" class="form-control" name="nitEmpresa" value="<?php echo $row['Nit_empresa']?>">

  </div>
  <label for="">Categorias</label>
<select class="form-select mb-3" aria-label="Default select example" name="categorias">
  <option selected disabled>--Seleccione nueva categoria--</option>
  <?php
  include("../Config/Conexion.php");

  // Supongamos que $row["Id_categorias"] contiene el ID de la categoría deseada
  $id_categoria = $row["Id_categorias"];

  // Consulta para obtener todas las categorías
  $sql_categorias = "SELECT * FROM categorias";
  $resultado_categorias = $conexion->query($sql_categorias);

  if ($resultado_categorias->num_rows > 0) {
    while ($row_categorias = $resultado_categorias->fetch_assoc()) {
      // Si el ID de la categoría coincide con el del registro actual, se selecciona
      $selected = ($row_categorias['Id_categorias'] == $id_categoria) ? "selected" : "";
      echo "<option value='" . $row_categorias['Id_categorias'] . "' $selected>" . $row_categorias['DescripcionC'] . "</option>";
    }
  }
  ?>
</select>

<div class="text-center">
  <button type="submit" class="btn btn-danger">Actualizar</button>
  <a href="Index.php" class="btn btn-dark">Regresar</a>
  </div>
</form>
  </body>
</html>