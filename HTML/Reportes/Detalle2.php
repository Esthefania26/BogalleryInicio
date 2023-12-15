<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

  </head>
  <body>
    
      <h1 class="text-center bg-dark text-white p-3 ">Listado De Planes</h1>
   <br> 
  <a href="Agregar.php" class="btn btn-success "  >Nuevo Plan</a>
  <a  class="btn btn-success boton" href="ExcelEm.php">Excel</a>
   <a href="" class="btn btn-warning boton" onclick="window.print()">Imprimir</a>
    <br> 
    <br>
    <table class="table table-bordered table-responsive table  table-white table-striped table-hover  " id="myTable" >
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del Plan</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Cupos</th>
      <th scope="col">Precio</th>
      <th scope="col">Propietario</th>
      <th scope="col">Jornada</th>
      <th scope="col">Fecha inicio</th>
      <th scope="col">Fecha Final</th>
      <th scope="col">Lugar</th>
      <th scope="col">Nit empresa</th>
      <th scope="col">Categorias</th>
      <th scope="col">Accciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
require ("../crud/Config/Conexion.php");

$sql = $conexion -> query("SELECT * FROM  planes
        INNER JOIN lugar ON planes.Id_lugar = lugar.Id_lugar
        INNER JOIN empresa ON planes.Nit_empresa = empresa.Nit_empresa
        INNER JOIN categorias ON planes.Id_categorias = categorias.Id_categorias
        ORDER BY Id_planes Asc");

    while ($resultado = $sql->fetch_assoc()) {

        ?> 

        <tr>
            <th scope="row"><?php echo $resultado['Id_planes']?></th>
            <th scope="row"><?php echo $resultado['NombreP']?></th>
            <th scope="row"><?php echo $resultado['DescripcionP']?></th>
            <th scope="row"><?php echo $resultado['TotalcuposP']?></th>
            <th scope="row"><?php echo $resultado['PrecioP']?></th>
            <th scope="row"><?php echo $resultado['Propietario_plan']?></th>
            <th scope="row"><?php echo $resultado['JornadaP']?></th>
            <th scope="row"><?php echo $resultado['FechaP']?></th>
            <th scope="row"><?php echo $resultado['Fecha_finalP']?></th>
            <th scope="row"><?php echo $resultado['NombreL']?></th>
            <th scope="row"><?php echo $resultado['Nit_empresa']?></th> 
            <th scope="row"><?php echo $resultado['DescripcionC']?></th>

            <th>
        
            </th>
            
        </tr>
    
        <?php
    }

?>
    

  </tbody>
</table>

<br>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Script JQUERY NECESARIO PARA LAS DATATABLES -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
$(document).ready(function () {
    $('#myTable').DataTable();
});
</script>

  </body>
</html>