<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Crud Empresa</title>
    <script type="text/javascript">  function confirmar(){
    return confirm('¿Estas seguro de Eliminar el Registro?');
    }</script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
   
</head>
  <body>
    <?php
    include("conexion.php");
    $sql="SELECT * FROM empresa";
    $resultado=mysqli_query($conexion,$sql);
    ?>
    <h1 class="text-center bg-dark text-white p-3 ">Empresas Registradas</h1>
   <br>
    <a href="agregarE.php" class="btn btn-success ">Nueva Empresa</a>
    <a class="btn btn-primary" href="../Reportes/DetalleEm.php  ">Ver Detalles</a> <br><br>
    <table class="table table-bordered table-responsive table  table-white table-striped table-hover " id="myTable">
        <thead>
            <tr>
                <th class="bg-dark text-white text-center align-middle">Nit_empresa</th>
                <th class="bg-dark text-white text-center align-middle">Nombre</th>
                <th class="bg-dark text-white text-center align-middle">Razon Social</th>
                <th class="bg-dark text-white text-center align-middle">Rut</th>
                <th class="bg-dark text-white text-center align-middle">Telefono</th>
                <th class="bg-dark text-white text-center align-middle">Correo</th>
                <th class="bg-dark text-white text-center align-middle">Nomeclatura</th>
                <th class="bg-dark text-white text-center align-middle">Localidad</th>
                <th class="bg-dark text-white text-center align-middle">Barrio</th>
                <th class="bg-dark text-white text-center align-middle">Fecha Ragistro</th>
                <th class="bg-dark text-white text-center align-middle">Contraseña</th>
                <th class="bg-dark text-white text-center align-middle">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($filas=mysqli_fetch_assoc($resultado)){

            
            ?>
            <tr>
                <td> <?php echo $filas ['Nit_empresa']?></td>
                <td> <?php echo $filas ['Nombre_em']?></td>
                <td> <?php echo $filas ['Razon_social']?></td>
                <td> <?php echo $filas ['Rut']?></td>
                <td> <?php echo $filas ['Telefono_em']?></td>
                <td> <?php echo $filas ['Correo_em']?></td>
                <td> <?php echo $filas ['Nomenclatura_em']?></td>
                <td> <?php echo $filas ['Localidad_em']?></td>
                <td> <?php echo $filas ['Barrio_em']?></td>
                <td> <?php echo $filas ['Fecha_registro_em']?></td>
                <td> <?php echo $filas ['contrasena']?></td>
                <td> 
                <?php echo "<a href='editarE.php?Nit_empresa=" . $filas['Nit_empresa'] . "' class='btn btn-warning'>EDITAR</a>"; ?>

                <?php echo "<a href='eliminarE.php?Nit_empresa=" . $filas['Nit_empresa'] . "' onclick='return confirmar()' class='btn btn-danger'>Eliminar</a>"; ?>

                </td>

            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php
    mysqli_close($conexion);
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script>
$(document).ready(function () {
    $('#myTable').DataTable();
});
</script>

  </body>
</html>