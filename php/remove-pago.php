<?php 
include "./conexion.php";
if($_GET['id']){
$consulta="delete from PAGOS where ID_PAGO=".$_GET['id'];
$conexion->query($consulta) or die ($conexion->error);
echo "Registro eliminado correctamente";

}
header("Location:../Hiro_Trips/pagos.php?status=3");
//header("Location:../Hiro_Trips/pagos.php");


?>