<?php

include "./conexion.php";
$name=$_POST['txtNombre'];
$cargo=$_POST['txtCargo'];
$salario=$_POST['txtSalario'];
$fecha=$_POST['txtFecha'];
$telefono=$_POST['txtTelefono'];
$correo=$_POST['txtCorreo'];
$direccion=$_POST['txtDireccion'];
$fecha=date('Y-m-d');

$file=$_FILES['txtImagen']['name'];
$temp = explode(".",$file);
$ext = end($temp); 
$destino="../Hiro_Trips/img/empleados/";
$file_name=date('Y_m_d_h_i_s')."_".rand(10000,99999).".".$ext;
if(move_uploaded_file($_FILES["txtImagen"]['tmp_name'],$destino.$file_name)){
    echo "Archivo subido correctamente";
    $consulta="INSERT INTO EMPLEADO (NOMBRE,CARGO, SALARIO,CONTRATACON_FECHA,TELEFONO,CORREO,DIRECCION,IMAGEN) VALUES ('$name', '$cargo', '$salario','$fecha','$telefono','$correo','$direccion','$file_name');";

$conexion->query($consulta) or die ($conexion->error);
echo "Registro insertado correctamente";
header("Location: ../Hiro_Trips/empleados.php?status=1");



}else{
    
    header("Location: ../Hiro_Trips/empleados.php?status=0");
}