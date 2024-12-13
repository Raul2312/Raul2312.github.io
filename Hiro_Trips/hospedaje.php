<?php
include "../php/conexion.php";
$sql="select * from HOSPEDAJE order by ID_HOSPEDAJE";
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
    <h4>Hoteles</h4>
    <a class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">   <i class="bi bi-plus"></i>
        Agregar Hoteles
    </a>


   </div>
    <!--Title section-->
    

    <!--Data-->
   <div class="row">

   <?php
        while($fila=mysqli_fetch_array($res)){

        ?>

    <div class="col-6  p-0 my-2 px-3">

      <div class="card mb-3" style="max-width: 615px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="./img/hoteles/<?php  echo $fila['IMAGEN']?>" style="height: 230px;width: 300px;" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"> <?php  echo $fila['ID_HOSPEDAJE']?>.<?php  echo $fila['HOTEL']?></h5>
                <p class="card-text">
                <?php  echo $fila['DIRECCION']?>
               
                </p>
               
                <p>
                <?php  echo $fila['DESCRIPCION']?>
                </p>
                
<<<<<<< HEAD
                <button  class="btn btn-primary btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button>
                <button data-id="<?php  echo $fila['ID_HOSPEDAJE']?>" class="btnEliminarHospedaje btn btn-primary btn-dark"  >Eliminar</button>
=======
                <a href="#" class="btn btn-primary btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</a>
                <a href="#" class="btn btn-primary btn-dark" data-bs-toggle="modal" data-bs-target="#modalseguro">Eliminar</a>
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
              </div>
            </div>
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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Hotel</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

       <form action="../php/add-hoteles.php" enctype="multipart/form-data" class="needs-validation1" novalidate id="form" method="post">


      
                <div class="modal-body " >

                    <div class="row">



                   
                        <div class="col-6">

                            <label for="">Nombre</label>
                            <input name="txtNombre"  required type="text" class="form-control" placeholder="Inserta tu nombre">
                            <div class="valid-feedback">
                               Correcto
                              </div>
                              <div class="invalid-feedback">
                             Nombre no valido
                              </div>
                        </div>
                        <div class="col-6">

                            <label for="">Direccion</label>
                            <input name="txtDireccion" required type="text" class="form-control" placeholder="Inserta la direccion">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Direccion no valida
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
                        <div class="col-6">

                          <label for="">Imagen</label>
                          <input accept="image/*" name="txtImagen" required type="file" class="form-control" placeholder="No choose file">
                          <div class="valid-feedback">
                             Correcto
                            </div>
                            <div class="invalid-feedback">
                           Nombre no valido
                            </div>
                      </div>
                       
                    <div class="alert alert-danger mt-4 d-none" id="divAlerta" role="alert">
                    Favor de lenar los campos 
                    </div>
                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="btnGuardar1">Guardar</button>
                </div>
    </form>

      </div>
     </div>
  </div>


<<<<<<< HEAD
  <div class="modal" id="modalseguro" tabindex="-1" aria-labelledby="modalseguro" aria-hidden="true">
=======
  <div class="modal" id="modalseguro" tabindex="-1"aria-labelledby="modalseguro" aria-hidden="true">
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Eliminar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
<<<<<<< HEAD

        <form action="../php/add-hoteles.php" enctype="multipart/form-data" class="needs-validation1" novalidate id="form" method="post">
=======
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
        <div class="modal-body">
          <p>Seguro que quieres eliminar el Hotel, No hay forma de revertirlo </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Si</button>
        </div>
<<<<<<< HEAD
        </form>
      </div>

=======
      </div>
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
    </div>
  </div>

  




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./js/user1.js"></script>





<<<<<<< HEAD
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




=======
<?php 
if(isset($_GET['status'])){
  if($_GET['status']== 1){



?>

               <script>
                  Try me!
                  Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Your work has been saved",
                    showConfirmButton: false,
                    timer: 1500
                  });
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54



</script>
<<<<<<< HEAD
<?php

=======

<?php
  }else{



?>

<script>


footer

Try me!
Swal.fire({
  icon: "error",
  title: "Oops...",
  text: "Something went wrong!",
  footer: '<a href="#">Why do I have this issue?</a>'
});


</script>




<?php 



  }
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
}





<<<<<<< HEAD


?>


=======
?>



>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
</body>
</html>