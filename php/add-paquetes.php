<?php

include "./conexion.php";
$name=$_POST['txtNombre'];
$precio=$_POST['txtPrecio'];
$descripcion=$_POST['txtDescripcion'];
$cantidad=$_POST['txtCantidad'];
$descuento=$_POST['txtDescuento'];


$file=$_FILES['txtImagen']['name'];
$temp = explode(".",$file);
$ext = end($temp); 
$destino="../Hiro_Trips/img/paquetes/";
$file_name=date('Y_m_d_h_i_s')."_".rand(10000,99999).".".$ext;
if(move_uploaded_file($_FILES["txtImagen"]['tmp_name'],$destino.$file_name)){
    echo "Archivo subido correctamente";
    $consulta="INSERT INTO PAQUETE (NOMBRE_PAQUETE,PRECIO,CANTIDAD_PERSONAS,DESCUENTOS,DESCRIPCION,IMAGEN) VALUES ('$name','$precio', '$cantidad','$descuento', '$descripcion','$file_name');";

$conexion->query($consulta) or die ($conexion->error);
echo "Registro insertado correctamente";
header("Location:../Hiro_Trips/paquetes.php?status=1");



}else{
    echo "Algo fallo en la subida del archivo";
    header("Loacation: ../Hiro_Trips/paquetes.php?status=0");
}


?>