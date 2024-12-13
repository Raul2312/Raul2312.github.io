<?php

include "./conexion.php";

$name=$_POST['txtNombre'];
$monto=$_POST['txtMonto'];
$fecha=$_POST['txtFecha'];
$metodo=$_POST['txtMetodo'];
$estado=$_POST['txtEstado'];


$consulta="INSERT INTO PAGOS(NOMBRE,MONTO,FECHA_PAGO,METODO_PAGO,ESTADO_PAGO) 
VALUES('$name','$monto','$fecha','$metodo','$estado');";

$conexion->query($consulta) or die ($conexion->error);
//echo "Registro insertado correctamente";

header("Location: ../Hiro_Trips/pagos.php?status=1");





?>