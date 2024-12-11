<?php

include "./conexion.php";
$name=$_POST['txtNombre'];
$precio=$_POST['txtPrecio'];
$descripcion=$_POST['txtDescripcion'];
$cantidad=$_POST['txtCantidad'];
$descuento=$_POST['txtDescuento'];
$imagen=$_POST['txtImagen'];

$consulta="INSERT INTO PAQUETE (NOMBRE_PAQUETE, PRECIO, CANTIDAD_PERSONAS, DESCUENTOS, DESCRIPCION, IMAGEN) 
VALUES('$name','$precio', '$cantidad', '$descuento', '$descripcion', '$imagen');";

$conexion->query($consulta) or die ($conexion->error);
echo "Registro insertado correctamente";


?>