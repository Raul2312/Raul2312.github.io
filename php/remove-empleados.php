<?php 
include "./conexion.php";
if($_GET['id']){
$consulta="delete from EMPLEADO where ID_EMPLEADO=".$_GET['id'];
$conexion->query($consulta) or die ($conexion->error);
echo "Empleado eliminado correctamente";

}
header("Location: ../Hiro_Trips/empleados.php?status=3");
//header("Location:../Hiro_Trips/pagos.php");


?>