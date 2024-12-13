<?php 
include "./conexion.php";
if($_GET['id']){
$consulta="delete from RESERVACIONES where ID_RESERVACION=".$_GET['id'];
$conexion->query($consulta) or die ($conexion->error);
echo "Reserva eliminada correctamente  eliminado correctamente";

}
header("Location: ../Hiro_Trips/reservaciones.php?status=3");



?>