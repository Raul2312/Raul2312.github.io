<?php 
include "./conexion.php";
if($_GET['id']){
$consulta="delete from USUARIOS where ID_USUARIOS=".$_GET['id'];
$conexion->query($consulta) or die ($conexion->error);
echo "Usuario eliminado correctamente  eliminado correctamente";

}
header("Location: ../Hiro_Trips/users.php?status=3");
//header("Location:../Hiro_Trips/pagos.php");


?>