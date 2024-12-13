<?php 
    include "./conexion.php";
    $id=$_POST['id'];
    
    $name=$_POST['txtNombre'];
    $monto=$_POST['txtMonto'];
    $fecha=$_POST['txtFecha'];
    $metodo=$_POST['txtMetodo'];
    $estado=$_POST['txtEstado'];


   

$consulta = "update PAGOS set 

NOMBRE='$name',
MONTO=$monto,
FECHA_PAGO='$fecha',
METODO_PAGO='$metodo',
ESTADO_PAGO='$estado'
 where ID_PAGO=$id;";


 
 echo $consulta;

$conexion->query($consulta) or die($conexion->error);
header("Location:../Hiro_Trips/pagos.php?status=2");
?>