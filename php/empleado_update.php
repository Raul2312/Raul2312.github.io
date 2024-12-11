<?php 
    include "./conexion.php";
    $id=$_POST['id'];
    $name=$_POST['txtNombre'];
    $cargo=$_POST['txtCargo'];
    $salario=$_POST['txtSalario'];
    $fecha=$_POST['txtFecha'];
    $telefono=$_POST['txtTelefono'];
    $correo=$_POST['txtCorreo'];
    $direccion=$_POST['txtDireccion'];
    $estado=$_POST['txtEstado'];


   

$consulta = "update EMPLEADO set 
NOMBRE='$name',
CARGO='$cargo',
SALARIO=$salario,
CONTRATACON_FECHA='$fecha',
TELEFONO='$telefono',
CORREO='$correo',
DIRECCION='$direccion',
ESTADO='$estado'
 where ID_EMPLEADO=$id;";


 
 echo $consulta;

$conexion->query($consulta) or die($conexion->error);
header("Location: ../Hiro_Trips/empleados.php?status=2");
?>