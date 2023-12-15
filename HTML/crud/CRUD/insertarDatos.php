<?php
include("../Config/Conexion.php");

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

$sql = "INSERT INTO planes (NombreP, DescripcionP, TotalcuposP, PrecioP,  Propietario_plan, JornadaP, FechaP, Fecha_finalP, Id_lugar, Nit_empresa, Id_categorias) VALUES ('$Nombre', '$Descripcion', '$TotalCupos', '$Precio', '$Propietario', '$Jornada', '$FechaInicio', '$FechaFin', '$Lugares', '$NitEmpresa', '$Categorias')";

$resultado = mysqli_query($conexion, $sql);
if ($resultado === TRUE) {
    header("location:../views/Index.php");
} else {
    echo "Error al insertar datos: " . mysqli_error($conexion);
}
?>
