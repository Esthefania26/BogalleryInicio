<?php
include("../Config/Conexion.php");
$Id = $_GET['Id']; // Agregar punto y coma al final de esta línea

$sql = "DELETE FROM planes WHERE Id_planes = '$Id'";

$query = mysqli_query($conexion, $sql);

if ($query) { // Verificar si la consulta se ejecutó correctamente
    header("location:../views/Index.php");
} else {
    echo "Error al eliminar el registro: " . mysqli_error($conexion);
}
?>
