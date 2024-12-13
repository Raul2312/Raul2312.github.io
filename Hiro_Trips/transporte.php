<?php
include "../php/conexion.php";
$sql="select * from TRANSPORTE order by ID_TRANSPORTE ";
$res =$conexion ->query("$sql") or die ($conexion->error);


?>

<?php session_start();
if(!isset($_SESSION['user_data'])){
header("Location:../Hiro_Trips/inicio.php");


}
$user_data=$_SESSION['user_data'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
</head>
<body class="d-flex">
    <!--sidebar-->
    <?php include "./layouts/aside.php";    ?>
<!--end sidebar-->
<!--Main content-->

<main class="flex-grow-1 ">
<?php include "./layouts/header.php" ?>
<section class="container mt-4 p-4">
 
   <!--Title section-->
   <div class="d-flex justify-content-between">
    <h4>Transporte</h4>
    <a class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">   <i class="bi bi-plus"></i>
        Agregar Transporte
    </a>


   </div>
    <!--Title section-->
    

    <!--Data-->
<div class="row px-4 ">

<?php
        while($fila=mysqli_fetch_array($res)){

        ?>

    <div class="col-3  p-0 my-2 px-3">
        <div class="card">
            <img src="./img/transporte/<?php  echo $fila['IMAGEN']?>" class="card-img-top" style="height: 200px;" alt="...">
            <div class="card-body">
              <h5 class="card-title"> <?php  echo $fila['ID_TRANSPORTE']?>.<?php  echo $fila['NOMBRE']?></h5>
             <p class="card-text">
             MODELO:    <?php  echo $fila['MODELO']?> <br>
              PRECIO:    <?php  echo $fila['PRECIO']?> <br>
              CANTIDAD:   <?php  echo $fila['CANTIDAD']?> <br>
              MOTOR:   <?php  echo $fila['MOTOR']?> <br>
              CAPACIDAD:   <?php  echo $fila['CAPACIDAD']?> PERSONAS<br>
              CONSUMO DE COMBUSTIBLE:   <?php  echo $fila['CONSUMO']?><br>
              <?php  echo $fila['DESCRIPCION']?></p>
              <button  data-id="<?php  echo $fila['ID_TRANSPORTE']?>" class="btnEliminarTransporte btn btn-primary btn-dark">Eliminar</button>
            </div>
          </div>

    </div>
  
   
    <?php 
}


?>
</div>


    <!--Data-->


</section>



</main>

<!--End Main content-->
<div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Transporte</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

       <form action="../php/add-transporte.php" enctype="multipart/form-data"    class="needs-validation" novalidate id="form" method="post">


      
                <div class="modal-body " >

                    <div class="row">



                      

                        <div class="col-6">

                            <label for="">Modelo</label>
                            <input name="txtModelo" required type="text" class="form-control" placeholder="Inserta el modelo">
                            <div class="valid-feedback">
                               Correcto
                              </div>
                              <div class="invalid-feedback">
                            Modelo no valido
                              </div>
                        </div>
                        <div class="col-6">

                            <label for="">Nombre</label>
                            <input name="txtNombre" required type="text" class="form-control" placeholder="Inserta el nombre">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Nombre no valido
                               </div>
                        </div>

                        <div class="col-6">

                            <label for="">Descripcion</label>
                            <input name="txtDescripcion" required type="text" class="form-control" placeholder="Inserta una descripcion">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Descripcion no valida
                               </div>
                        </div>

                        <div class="col-4">

                            <label for="">Precio</label>
                            <input name="txtPrecio" required type="number" class="form-control" placeholder="Inserta el precio de la renta ">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Precio no valida
                               </div>
                        </div>




                        <div class="col-4">

                            <label for="">Cantidad</label>
                            <input name="txtCantidad" required type="number" class="form-control" placeholder="Inserta la cantidad de vehiculos">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Cantidad no valida
                               </div>
                        </div>





                        <div class="col-4">

                            <label for="">Capacidad</label>
                            <input name="txtCapacidad" required type="number" class="form-control" placeholder="Inserta la capacidad del vehiculo">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Capacidad no valida
                               </div>
                        </div>


                        <div class="col-6">

                            <label for="">Motor</label>
                            <input name="txtMotor" required type="text" class="form-control" placeholder="Inserta el motor del vehiculo">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Motor no valido
                               </div>
                        </div>

                        <div class="col-4">

                            <label for="">Consumo</label>
                            <input name="txtConsumo" required type="text" class="form-control" placeholder="Inserta el consumo de combustible ">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Consumo no valido
                               </div>
                        </div>
                        <div class="col-6">

                          <label for="">Imagen</label>
                          <input accept="image/*" name="txtImagen" required type="file" class="form-control" placeholder="No choose file">
                          <div class="valid-feedback">
                             Correcto
                            </div>
                            <div class="invalid-feedback">
                           Imagen no valida
                            </div>
                      </div>
                       
                    <div class="alert alert-danger mt-4 d-none" id="divAlerta" role="alert">
                    Favor de lenar los campos 
                    </div>
                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="btnGuardar">Guardar</button>
                </div>
    </form>

      </div>
     </div>
  </div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./js/user1.js"></script>


<?php

if(isset($_GET['status'])){
  $message="";
  
  if($_GET['status']==1){

    //inserta correcta
    $icon="success";
    $message="Registro insertado correctamente";

  }else if($_GET['status']==2){


    //actualizacion correcta
    $icon="success";
 $message="Registro actualizado correctamente";
 }  else if($_GET['status']==3){
  //eliminado corrctamente
  $icon="success";
 $message="Registro eliminado correctamente";

 }else{
  $icon="error";
  $message="Algo fallo al subir los datos";



 }
?>



<script>
Swal.fire({

  icon:"<?php echo $icon ?>",
  title: "<?php echo $message ?>",
  showConfirmButton: false,
  timer: 1500
});







</script>
<?php

}







?>




</body>
</html>