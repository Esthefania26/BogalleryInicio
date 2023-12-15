<?php
include("conexion.php");
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <?php
     if(isset($_POST['Enviar'])){
        $nit=$_POST['Nit_empresa'];
        $nombre=$_POST['nombre'];
    
        $razon=$_POST['razon'];
        $rut=$_POST['rut'];
        $telefono=$_POST['telefono'];
        $nomeclatura=$_POST['nomeclatura'];
        $localidad=$_POST['localidad'];
        $barrio=$_POST['barrio'];
        $fecha=$_POST['fecha'];
        $correo=$_POST['correo'];
        $contrasena=$_POST['contrasena'];
        
        $sql = "UPDATE empresa SET 
        Nombre_em='$nombre',
        Razon_social='$razon',
        Rut='$rut',
        Telefono_em='$telefono',
        Nomenclatura_em='$nomeclatura',
        Localidad_em='$localidad',
        Barrio_em='$barrio',
        Fecha_registro_em='$fecha',
        Correo_em='$correo',
        Contrasena='$contrasena' WHERE Nit_empresa='$nit'";

        
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
        $nit=$_GET['Nit_empresa'];
        $sql="SELECT * FROM empresa WHERE Nit_empresa='$nit'";
        $resultado=mysqli_query($conexion,$sql);

        $fila=mysqli_fetch_assoc($resultado);
       
        $nombre=$fila['Nombre_em'];
        $razon=$fila['Razon_social'];
        $rut=$fila['Rut'];
        $telefono=$fila['Telefono_em'];
        $nomeclatura=$fila['Nomenclatura_em'];
        $localidad=$fila['Localidad_em'];
        $barrio=$fila['Barrio_em'];
        $fecha=$fila['Fecha_registro_em'];
        $correo=$fila['Correo_em'];
        $contrasena=$fila['contrasena'];

        mysqli_close($conexion);


     
    ?>

<h2>Registro Empresa</h2>
    <div class="contenedor">
            <div class="formulario">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post" id="registroForm">
 

  <div class="fila">
    <div class="columna">
      <div class="input-contenedor">
        <input type="hidden" name="Nit_empresa" value="<?php echo $nit; ?>" required placeholder="Ingrese el Nit de la empresa">
        <label for="Nit_empresa">Ingrese el Nit de la empresa</label>
      </div>
    </div>
    <div class="columna">
      <div class="input-contenedor">
        <input type="text" id="nombre"  name="nombre" value="<?php echo $nombre; ?>" required placeholder="Nombre de la empresa">
        <label for="Nombre_em">Nombre de la empresa</label>
      </div>
    </div>
    <div class="columna">
      <div class="input-contenedor">
        <input type="text" id="razon"  name="razon" value="<?php echo $razon; ?>" required placeholder="Razón social">
        <label for="Razon_social">Razón social</label>
      </div>
    </div>
  </div>

  <div class="fila">
    <div class="columna">
      <div class="input-contenedor">
        <input type="email" id="correo" name="correo" value="<?php echo $correo; ?>" required placeholder="Correo">
        <label for="Correo_em">Correo</label>
      </div>
    </div>
    <div class="columna">
      <div class="input-contenedor">
        <input type="number" id="rut" name="rut" value="<?php echo $rut; ?>" required placeholder="Rut">
        <label for="Rut">Rut</label>
      </div>
    </div>
    <div class="columna">
      <div class="input-contenedor">
        <input type="text" id="telefono" name="telefono" value="<?php echo $telefono; ?>" required placeholder="Teléfono">
        <label for="Telefono_em">Teléfono</label>
      </div>
    </div>
  </div>

  <div class="fila">
    <div class="columna">
      <div class="input-contenedor">
        <input type="text" id="nomeclatura" name="nomeclatura" value="<?php echo $nomeclatura; ?>" required placeholder="Nomenclatura">
        <label for="Nomenclatura_em">Nomenclatura</label>
      </div>
    </div>
    <div class="columna">
      <div class="input-contenedor">
        <input type="text" id="localidad" name="localidad" value="<?php echo $localidad; ?>" required placeholder="Localidad">
        <label for="Localidad_em">Localidad</label>
      </div>
    </div>
    <div class="columna">
      <div class="input-contenedor">
        <input type="text" id="barrio" name="barrio" value="<?php echo $barrio; ?>" required placeholder="Barrio">
        <label for="Barrio_em">Barrio</label>
      </div>
    </div>
  </div>
  <div class="columna">
      <div class="input-contenedor">
        <input type="hidden" id="fecha" name="fecha" value="<?php echo $fecha ?>" required placeholder="Fecha">
        <label for="Fecha_registro_em">Fecha Registro</label>
      </div>
    </div>
  </div>

  <div class="fila">
    <div class="columna centrada">
      <div class="input-contenedor">
        <label for="Contrasena">Contraseña</label>
        <input type="password" id="contrasena" name="contrasena" value="<?php echo $contrasena; ?>" placeholder="Ingrese la Contraseña" required>
      </div>
    </div>
  </div>

  <button  type="submit" name="Enviar">Actualizar</button>
           
  <a href="index.php">Regresar</a>
</form>
<?php
    }
?>

        </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>