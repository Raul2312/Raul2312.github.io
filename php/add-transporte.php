<?php

include "./conexion.php";

$name=$_POST['txtNombre'];
$modelo=$_POST['txtModelo'];
$descripcion=$_POST['txtDescripcion'];
$precio=$_POST['txtPrecio'];
$cantidad=$_POST['txtCantidad'];
$capacidad=$_POST['txtCapacidad'];
$motor=$_POST['txtMotor'];
$consumo=$_POST['txtConsumo'];
$imagen=$_POST['txtImagen'];



$file=$_FILES['txtImagen']['name'];
$temp = explode(".",$file);
$ext = end($temp); 
$destino="../Hiro_Trips/img/transporte/";
$file_name=date('Y_m_d_h_i_s')."_".rand(10000,99999).".".$ext;
if(move_uploaded_file($_FILES["txtImagen"]['tmp_name'],$destino.$file_name)){
    echo "Archivo subido correctamente";

$consulta="INSERT INTO TRANSPORTE
 (NOMBRE, MODELO, DESCRIPCION, PRECIO, CANTIDAD, CAPACIDAD, MOTOR, CONSUMO, IMAGEN)  
 VALUES('$name', '$modelo', '$descripcion', '$precio', '$cantidad', '$capacidad', '$motor', '$consumo', '$file_name');";

$conexion->query($consulta) or die ($conexion->error);
echo "Registro insertado correctamente";

header("Location:../Hiro_Trips/transporte.php?status=1");



}else{
    echo "Algo fallo en la subida del archivo";
    header("Loacation:../Hiro_Trips/transporte.php?status=0");
}


?>