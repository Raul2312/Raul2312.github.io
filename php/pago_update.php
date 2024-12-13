<?php 
    include "./conexion.php";
    $id=$_POST['id'];
<<<<<<< HEAD
    
=======
    $reservacion=$_POST['txtReservacion'];
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
    $name=$_POST['txtNombre'];
    $monto=$_POST['txtMonto'];
    $fecha=$_POST['txtFecha'];
    $metodo=$_POST['txtMetodo'];
    $estado=$_POST['txtEstado'];


   

$consulta = "update PAGOS set 
<<<<<<< HEAD

=======
ID_RESERVACION=$reservacion,
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
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