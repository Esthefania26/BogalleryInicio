<?php
include("../Config/Conexion.php");

$id = $_POST['Id'];
$Nombre = $_POST['nombrePlan'];
$Descripcion = $_POST['descripcion'];
$TotalCupos = $_POST['totalCupos'];
$Precio = $_POST['precio'];
$Propietario = $_POST['propietario'];
$Jornada = $_POST['jornada'];
$FechaInicio = $_POST['fechaInicio'];
$FechaFin = $_POST['fechaFinal'];
$Lugares = $_POST['lugar'];
$NitEmpresa = $_POST['nitEmpresa'];
$Categorias = $_POST['categorias'];


$sql ="UPDATE planes SET 
NombreP = '".$Nombre."',
DescripcionP = '".$Descripcion."',
 TotalcuposP = '".$TotalCupos."',
 PrecioP = '".$Precio."',
  Propietario_plan = '".$Propietario."',
  JornadaP = '".$Jornada."',
   FechaP = '".$FechaInicio."',
    Fecha_finalP = '".$FechaFin."',
    Id_lugar = '".$Lugares."',
     Nit_empresa = '".$NitEmpresa."',
      Id_categorias = '".$Categorias."' WHERE Id_planes =".$id."";



      if($resultado = $conexion->query($sql)){

        header("location:../views/Index.php");

      }