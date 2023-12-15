<?php
$nit=$_GET['Nit_empresa'];
include("conexion.php");

$sql="DELETE FROM empresa WHERE Nit_empresa='$nit'";
$resultado=mysqli_query($conexion,$sql);


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
