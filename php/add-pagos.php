<?php

include "./conexion.php";
<<<<<<< HEAD

=======
$id_reservacion=$_POST['txtReservacion'];
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
$name=$_POST['txtNombre'];
$monto=$_POST['txtMonto'];
$fecha=$_POST['txtFecha'];
$metodo=$_POST['txtMetodo'];
$estado=$_POST['txtEstado'];


<<<<<<< HEAD
$consulta="INSERT INTO PAGOS(NOMBRE,MONTO,FECHA_PAGO,METODO_PAGO,ESTADO_PAGO) 
VALUES('$name','$monto','$fecha','$metodo','$estado');";
=======
$consulta="INSERT INTO PAGOS(ID_RESERVACION,NOMBRE,MONTO,FECHA_PAGO,METODO_PAGO,ESTADO_PAGO) 
VALUES('$id_reservacion','$name','$monto','$fecha','$metodo','$estado');";
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54

$conexion->query($consulta) or die ($conexion->error);
//echo "Registro insertado correctamente";

header("Location: ../Hiro_Trips/pagos.php?status=1");





?>