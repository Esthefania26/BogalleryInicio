 <?php
  include("conexion.php");
 $Id_lugar=$_GET['Id_lugar'];


 $sql="DELETE  from lugar WHERE Id_lugar='$Id_lugar'";
 $resultado=mysqli_query($conexion, $sql);

 if($resultado){
    echo "<script language = 'JavaScript'>
    alert('Los datos fueron eliminafos correctamente a la BD');
    window.location.assign('index.php');
    </script> ";
 }else{
    echo "<script language = 'JavaScript'>
                alert('ERROR: Los datos No pudieron ser Eliminados BD');
                window.location.assign('index.php');
                </script> ";

    
 }
 ?>