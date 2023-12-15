<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agregar Planes</title>
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
 <h1 class="bg-black p-2 text-white text-center">Agregar Planes</h1>

<div class="container">
    <br>
    <br>
    <form action="../CRUD/insertarDatos.php" method="POST" class="container-form">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" name="nombrePlan" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">TotalCupos</label>
                    <input type="number" name="totalCupos" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">FechaInicio</label>
                    <input type="date" name="fechaInicio" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="form-label">Descripcion</label>
                    <textarea name="descripcion" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Precio</label>
                    <input type="number" name="precio" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">FechaFinal</label>
                    <input type="date" name="fechaFinal" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="">Propietario</label>
                <select class="form-select" name="propietario">
                    <option selected disabled>--Seleccionar propietario--</option>
                    <?php
                    include("../Config/Conexion.php");
                    $sql = $conexion->query("SELECT DISTINCT Propietario_plan FROM planes");
                    while ($resultado = $sql->fetch_assoc()) {
                        echo "<option value='" . $resultado['Propietario_plan'] . "'>" . $resultado['Propietario_plan'] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="col-md-6">
                <label for="">Jornada</label>
                <select class="form-select" name="jornada">
                    <option selected disabled>--Seleccione la Jornada--</option>
                    <?php
                    include("../Config/Conexion.php");
                    $sql = $conexion->query("SELECT * FROM planes");
                    while ($resultado = $sql->fetch_assoc())
                        echo "<option value='" . $resultado['JornadaP'] . "'>" . $resultado['JornadaP'] . "</option>";
                    ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="">Lugares</label>
                <select class="form-select" name="lugar">
                    <option selected disabled>--Seleccionar lugar--</option>
                    <?php
                    include("../Config/Conexion.php");
                    $sql = $conexion->query("SELECT * FROM lugar");
                    while ($resultado = $sql->fetch_assoc())
                        echo "<option value='" . $resultado['Id_lugar'] . "'>" . $resultado['NombreL'] . "</option>";
                    ?>
                </select>
            </div>

            <div class="col-md-6">
                <label for="">Nitempresa</label>
                <input type="number" name="nitEmpresa" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label for="">Categorias</label>
            <select class="form-select" name="categorias">
                <option selected disabled>--Seleccionar Categoria--</option>
                <?php
                include("../Config/Conexion.php");
                $sql = $conexion->query("SELECT * FROM categorias");
                while ($resultado = $sql->fetch_assoc())
                    echo "<option value='" . $resultado['Id_categorias'] . "'>" . $resultado['DescripcionC'] . "</option>";
                ?>
            </select>
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
