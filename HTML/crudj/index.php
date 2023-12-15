<!DOCTYPE html>
<html lang="en">
<head>

      <h1 class="text-center bg-dark text-white p-3 ">Lugares Registrados</h1>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script type="text/javascript">  function confirmar(){
    return confirm('¿Estas seguro de Eliminar el Registro?');
    }</script>
 <title>Lugares registrados</title>
</head>
<body>

<?php
 include("conexion.php");
 // forma se traer datos select * from nombre tabla
 $sql = "select * from lugar";
 $resultado = mysqli_query($conexion,$sql);
?>
<div class="conteiner-fluid">
    
        <form action="" method="GET">
            <input type="text" placeholder="Buscar con PHP" name="buscar"> <br>
            <button class="btn btn-outline-onfo" type="submit" name="busqueda">Buscar</button>

    </form>
    <form  action="" method="GET"> <button class="btn btn-outline-onfo" type="submit" name="mostrartodo">Mostrar Todo</button>
</form>
     </div>

   <a href="agregarL.php"  class="btn btn-success">Nuevo Lugar</a>
    <a href="../Reportes/Detalle.php" class="btn btn-primary">Ver detalles</a><br>br
    <table id="tabla" class="table table-bordered table-responsive table table-dark table-white table-striped table-hover">
    <table id="tabla" class="table table-bordered table-responsive table-striped table-hover ">
  <thead>
    <tr>
      <th class="bg-dark text-white text-center align-middle">Id Lugar</th>
      <th class="bg-dark text-white text-center align-middle">Nombre Lugar</th>
      <th class="bg-dark text-white text-center align-middle">Localidad</th>
      <th class="bg-dark text-white text-center align-middle">Barrio</th>
      <th class="bg-dark text-white text-center align-middle">Nomeclatura</th>
      <th class="bg-dark text-white text-center align-middle">Tipo</th>
      <th class="bg-dark text-white text-center align-middle">Descripcion</th>
      <th class="bg-dark text-white text-center align-middle">Fecha Publicacion</th>
      <th class="bg-dark text-white text-center align-middle">Registrador</th>
      <th class="bg-dark text-white text-center align-middle">Acciones</th>
    </tr>
  </thead>
  <tbody>
            <?php
            
      include_once "conexion.php";
if(isset($_GET['busqueda'])){
    $buscar = $_GET['buscar'];

    $sql = "SELECT * FROM lugar WHERE NombreL Like '$buscar%' OR LocalidadL LIKE '$buscar%' ORDER BY Id_Lugar";
     $resultado = mysqli_query($conexion,$sql);
     while($filas = mysqli_fetch_assoc($resultado)){
        ?>
         <tr>
                   <td> <?php echo $filas['Id_lugar'] ?></td> 
                   <td> <?php echo $filas['NombreL'] ?></td> 
                   <td> <?php echo $filas['LocalidadL'] ?></td> 
                   <td> <?php echo $filas['BarrioL'] ?></td> 
                   <td> <?php echo $filas['NomenclaturaL'] ?></td> 
                   <td> <?php echo $filas['TipoL'] ?></td> 
                   <td> <?php echo $filas['DescripcionL'] ?></td> 
                   <td> <?php echo $filas['Fecha_publicacionL'] ?></td> 
                   <td> <?php echo $filas['Id_usu'] ?></td> 
                 <td>
                    
                   <?php  echo "<a class='btn btn-outline-primary' href='editarL.php?Id_lugar=".$filas['Id_lugar']."'>EDITAR</a>"; ?>
                    
                   
                 <?php   echo "<a class='btn btn-outline-primary'  href='eliminar.php?Id_lugar=".$filas['Id_lugar']."'onclick='return confirmar()'>ELIMINAR</a>"; ?>

                
                 </td>
            </tr>
        <?php

     }
}
elseif (isset($_GET['mostrartodo'])){
    $sql = "SELECT * FROM lugar";
    $resultado = mysqli_query($conexion,$sql);
    while($filas = mysqli_fetch_assoc($resultado)){
    
?>
 <tr>
                   <td> <?php echo $filas['Id_lugar'] ?></td> 
                   <td> <?php echo $filas['NombreL'] ?></td> 
                   <td> <?php echo $filas['LocalidadL'] ?></td> 
                   <td> <?php echo $filas['BarrioL'] ?></td> 
                   <td> <?php echo $filas['NomenclaturaL'] ?></td> 
                   <td> <?php echo $filas['TipoL'] ?></td> 
                   <td> <?php echo $filas['DescripcionL'] ?></td> 
                   <td> <?php echo $filas['Fecha_publicacionL'] ?></td> 
                   <td> <?php echo $filas['Id_usu'] ?></td> 
                 <td>
                    
                   <?php  echo "<a class='btn btn-outline-primary' href='editarL.php?Id_lugar=".$filas['Id_lugar']."'>EDITAR</a>"; ?>
                    
                   
                 <?php   echo "<a class='btn btn-outline-primary' href='eliminar.php?Id_lugar=".$filas['Id_lugar']."'onclick='return confirmar()'>ELIMINAR</a>"; ?>

                
                 </td>
            </tr>
<?php
    }
}
else{
    $sql = "SELECT * FROM lugar";
    $resultado = mysqli_query($conexion,$sql);
    while($filas = mysqli_fetch_assoc($resultado)){
        ?>
          <tr>
                   <td> <?php echo $filas['Id_lugar'] ?></td> 
                   <td> <?php echo $filas['NombreL'] ?></td> 
                   <td> <?php echo $filas['LocalidadL'] ?></td> 
                   <td> <?php echo $filas['BarrioL'] ?></td> 
                   <td> <?php echo $filas['NomenclaturaL'] ?></td> 
                   <td> <?php echo $filas['TipoL'] ?></td> 
                   <td> <?php echo $filas['DescripcionL'] ?></td> 
                   <td> <?php echo $filas['Fecha_publicacionL'] ?></td> 
                   <td> <?php echo $filas['Id_usu'] ?></td> 
                 <td>
                    
                   <?php  echo "<a class='btn btn-warning' href='editarL.php?Id_lugar=".$filas['Id_lugar']."'>EDITAR</a>"; ?>
                    
                   
                 <?php   echo "<a class='btn btn-danger' href='eliminar.php?Id_lugar=".$filas['Id_lugar']."'onclick='return confirmar()'>ELIMINAR</a>"; ?>

                
                 </td>
            </tr>
    
    <?php
    }
}

?>

    
          
        </tbody>
    </table>
    <?php
    mysqli_close($conexion);
    ?>
</body>

</html>