<?php

include "./conexion.php";

$name=$_POST['txtNombre'];
$ap_paterno=$_POST['txtApellidoPaterno'];
$ap_materno=$_POST['txtApellidoMaterno'];
$password=$_POST['txtContraseña'];
$correo=$_POST['txtCorreo'];
$edad=$_POST['txtEdad'];
$telefono=$_POST['txtTelefono'];


$consulta="INSERT INTO USUARIOS(PASSWORD,CORREO,NOMBRE,AP_PATERNO,AP_MATERNO,EDAD,TELEFONO) 
VALUES('$password','$correo','$name','$ap_paterno','$ap_materno','$edad','$telefono');";

$conexion->query($consulta) or die ($conexion->error);
echo "Registro insertado correctamente";

    header("Location: ../Hiro_Trips/users.php?status=1");





?>