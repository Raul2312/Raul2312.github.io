<?php session_start();
include "./conexion.php";
//CACHAR LOS DATOS
$email=$_POST['txtEmail'];
$password = $_POST['txtPassword'];


echo "Bienvenido: $email tu password es: $password ";
$sql="select * from USUARIOS where CORREO='$email' and PASSWORD= '$password'";
$res = $conexion->query($sql)  or die ($conexion->error);
if(mysqli_num_rows($res)>0){

echo "Login Correcto";
$fila = mysqli_fetch_row($res);
$name = $fila[3];
$last = $fila[4];
$age = $fila[6];
$id = $fila[0];
$email = $fila[2];



echo "Hola tu id es :$id  tu nombre es : $name y tu apellido es $last";

$_SESSION['user_data']=[
    'ID_USUARIO'=>$id,
    'NOMBRE'=>$name,
    'AP_PATERNO'=>$last,
    'EDAD'=>$age,
    'CORREO'=>$email,
   
];
header('Location:../Hiro_Trips/admin.php');

}else{
echo "Datos No validos";
header("Location:../Hiro_Trips/inicio.php?error=1");//redireccionar


}
?>