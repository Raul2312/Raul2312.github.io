<?php 
$server ="localhost";
$user ="root";
$pass="";
$db="hirotrips";
$conexion=new mysqli($server,$user,$pass,$db);
if($conexion->connect_error){
    die("No se pudo conectar a MySQL PRENDE EL MySQL");
}

?>
