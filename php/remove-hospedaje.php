<?php 
include "./conexion.php";
if($_GET['id']){
$consulta="delete from HOSPEDAJE where ID_HOSPEDAJE=".$_GET['id'];
$conexion->query($consulta) or die ($conexion->error);
echo "Registro eliminado correctamente";

}
header("Location:../Hiro_Trips/hospedaje.php?status=3" );



?>