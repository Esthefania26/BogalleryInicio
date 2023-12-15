<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"> -->

  </head>
  <body>
    <br>
    <div class="container mt-2">
      <h1 class="text-center bg-dark text-white p-3 rounded">Listado De Usuario</h1>
    </div>
    <div class="container  ">
  <a href="agregarusu.php" class="btn btn-success ">Agregar Usuario</a>
</div>
    <br>
    <div class="container ">
    <table class="table table-bordered " id="myTable" >
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del usuario</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Fecha de asignacion</th>
      <th scope="col">Estado</th>
      <th scope="col">Cargo</th>
      <th scope="col">Descripcion Cargo</th>
      <th scope="col">Accciones</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
require ("../crudj/Conexion.php");

$sql = $conexion -> query("SELECT * FROM
usuario u JOIN usuariorol ur ON u.Id_usu = ur.Id_usu
JOIN rol r ON ur.Id_rol = r.Id_rol ORDER BY u.Id_usu;
;
       ");





    while ($resultado = $sql->fetch_assoc()) {

        ?> 

        <tr>
            <th scope="row"><?php echo $resultado['Id_usu']?></th>
            <th scope="row"><?php echo $resultado['Nombre_usu']?></th>
            <th scope="row"><?php echo $resultado['Apellido_usu']?></th>
            <th scope="row"><?php echo $resultado['Correo_usu']?></th>
            <th scope="row"><?php echo $resultado['Password_usu']?></th>
            <th scope="row"><?php echo $resultado['Fecha_asignacion_ur']?></th>
            <th scope="row"><?php echo $resultado['Estado_ur']?></th>
            <th scope="row"><?php echo $resultado['Nombre_rol']?></th>
            <th scope="row"><?php echo $resultado['Descripcion_rol']?></th>
           
            <th>
            <a href="" class="btn btn-warning">Editar</a>


                <a href="" class="btn btn-danger">Eliminar</a>
            </th>
            
        </tr>
    
        <?php
    }

?>
    

  </tbody>
</table>

<br>
<a href="Reportes/Imprimi">Ver detalles </a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Script JQUERY NECESARIO PARA LAS DATATABLES -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script> -->

    <!-- <script>
$(document).ready(function () {
    $('#myTable').DataTable();
});
</script> -->

  </body>
</html>