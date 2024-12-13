<?php 
include "./conexion.php";
if($_GET['id']){
$consulta="delete from PAQUETE where ID_PAQUETE=".$_GET['id'];
$conexion->query($consulta) or die ($conexion->error);
echo "Paquete eliminado correctamente";

}
header("Location: ../Hiro_Trips/paquetes.php?status=3");
//header("Location:../Hiro_Trips/pagos.php");


?>