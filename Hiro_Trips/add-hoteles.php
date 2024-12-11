<?php

include "./conexion.php";
$name=$_POST['txtNombre'];
$direccion=$_POST['txtDireccion'];
$descripcion=$_POST['txtDescripcion'];
$fecha=date('Y-m-d');

$file=$_FILES['txtImagen']['name'];
$temp = explode(".",$file);
$ext = end($temp); 
$destino="../Hiro_Trips/img/hoteles/";
$file_name=date('Y_m_d_h_i_s')."_".rand(10000,99999).".".$ext;
if(move_uploaded_file($_FILES["txtImagen"]['tmp_name'],$destino.$file_name)){
    echo "Archivo subido correctamente";
    $consulta="INSERT INTO HOSPEDAJE (HOTEL, DIRECCION, DESCRIPCION,IMAGEN) VALUES ('$name', '$direccion', '$descripcion','$file_name');";

$conexion->query($consulta) or die ($conexion->error);
echo "Registro insertado correctamente";
header("Location:../Hiro_Trips/hospedaje.php?status=1");



}else{
    echo "Algo fallo en la subida del archivo";
    header("Loacation:../Hiro_Trips/hospedaje.php?status=0");
}



//echo $file;




//die();



?>