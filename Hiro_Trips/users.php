<?php
include "../php/conexion.php";
<<<<<<< HEAD
$sql="select * from USUARIOS order by ID_USUARIOS ";
=======
$sql="select * from USUARIOS order by ID_USUARIOS DESC";
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
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
    <?php  include "./layouts/aside.php" ?>
   
<!--end sidebar-->
<!--Main content-->

<main class="flex-grow-1 " >
   <?php  include "./layouts/header.php" ?>
<section class="container-mt-4 p-4">
 
   <!--Title section-->
   <div class="d-flex justify-content-between">
    <h4>Usuarios Activos</h4>
<<<<<<< HEAD
    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalagregar">   <i class="bi bi-plus-circle"></i>
=======
    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">   <i class="bi bi-plus-circle"></i>
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
        Agregar Usurios 
    </button>


   </div>
    <!--Title section-->
    

    <!--Data-->
   <div class="row">
    <table class="table table-dark mt-4" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
<<<<<<< HEAD
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Edad</th>
            
            <th scope="col">Correo</th>
            <th scope="col">telefono</th>
=======
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            
            <th scope="col">Correo</th>
            <th scope="col">img</th>
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
            <th scope="col">Opciones</th>
            
          </tr>
        </thead>
        <tbody>

        <?php
        while($fila=mysqli_fetch_array($res)){

        ?>
          <tr>
            <th scope="row"><?php  echo $fila['ID_USUARIOS']?></th>
            <td> <?php echo $fila ['NOMBRE'] ?></td>
            <td><?php echo $fila ['AP_PATERNO'] ?></td>
<<<<<<< HEAD
            <td><?php echo $fila ['AP_MATERNO'] ?></td>
=======
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
            <td><?php echo $fila ['EDAD'] ?></td>
            <td><?php echo $fila ['CORREO'] ?></td>
            <td><?php echo $fila ['TELEFONO'] ?></td>
            <td>
                <button data-id="<?php  echo $fila['ID_USUARIOS']?>" class="btnEliminarUser btn btn-outline-danger btn-sm mx-1">
                    <i class="bi bi-trash3" data-id="<?php  echo $fila['ID_USUARIOS']?>" ></i>
                 </button>

                 <button class="btn btn-outline-warning btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-pencil"></i>

                 </button>

                


            </td>
            </tr>

            <?php 
}


?>


  

        
        </tbody>
      </table>
   </div>


    <!--Data-->


</section>



</main>

<!--End Main content-->
<<<<<<< HEAD
<div class="modal fade modal-lg" id="modalagregar" tabindex="-1" aria-labelledby="modalagregar" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

       <form action="../php/add-user.php" class="needs-validation" novalidate id="form" method="post">


      
                <div class="modal-body " >

                    <div class="row">
                        <div class="col-6">

                            <label for="">Nombre</label>
                            <input name="txtNombre" required type="text" class="form-control" placeholder="Inserta tu nombre">
                            <div class="valid-feedback">
                               Correcto
                              </div>
                              <div class="invalid-feedback">
                             Nombre no valido
                              </div>
                        </div>
                        <div class="col-6">

                            <label for="">Apellido Paterno</label>
                            <input name="txtApellidoPaterno" required type="text" class="form-control" placeholder="Inserta tus apellidos">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Apellido  no valido
                               </div>
                        </div>

                        <div class="col-6">

                              <label for="">Apellido Materno</label>
                              <input name="txtApellidoMaterno" required type="text" class="form-control" placeholder="Inserta tus apellidos">
                              <div class="valid-feedback">
                                  Correcto
                                </div>
                                <div class="invalid-feedback">
                                Apellido  no valido
                                </div>
                              </div>

                        <div class="col-8">

                            <label for="">Correo</label>
                            <input name="txtCorreo" required type="email" class="form-control" placeholder="Correo electronico">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Correo no valido
                               </div>
                        </div>
                        <div class="col-4">

                            <label for="">Edad</label>
                            <input name="txtEdad" required type="number" class="form-control" placeholder="Edad">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Edad no valida
                               </div>
                        </div>


                        <div class="col-4">

                          <label for="">Telefono</label>
                          <input name="txtTelefono" required type="number" class="form-control" placeholder="Edad">
                          <div class="valid-feedback">
                              Correcto
                            </div>
                            <div class="invalid-feedback">
                          Edad no valida
                            </div>
                          </div>
                    
                       
                        <div class="col-12">

                            <label for="">Contraseña</label>
                            <input name="txtContraseña" required type="password" class="form-control" placeholder="Inserta la contraseña">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Contraseña no valida
                               </div>
                        </div>
                        <div class="col-12">

                            <label for="">Confirmar Contraseña</label>
                            <input required type="password" class="form-control" placeholder="Confirma la contraseña">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              La contraseña no es igual
                               </div>
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



  <div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
=======
<div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

       <form action="" class="needs-validation" novalidate id="form">


      
                <div class="modal-body " >

                    <div class="row">
                        <div class="col-6">

                            <label for="">Nombre</label>
                            <input required type="text" class="form-control" placeholder="Inserta tu nombre">
                            <div class="valid-feedback">
                               Correcto
                              </div>
                              <div class="invalid-feedback">
                             Nombre no valido
                              </div>
                        </div>
                        <div class="col-6">

                            <label for="">Apellido</label>
                            <input required type="text" class="form-control" placeholder="Inserta tus apellidos">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Apellido  no valido
                               </div>
                        </div>

                        <div class="col-8">

                            <label for="">Correo</label>
                            <input required type="email" class="form-control" placeholder="Correo electronico">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Correo no valido
                               </div>
                        </div>
                        <div class="col-4">

                            <label for="">Edad</label>
                            <input required type="number" class="form-control" placeholder="Edad">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Edad no valida
                               </div>
                        </div>
                    
                       
                        <div class="col-12">

                            <label for="">Contraseña</label>
                            <input required type="password" class="form-control" placeholder="Inserta la contraseña">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Contraseña no valida
                               </div>
                        </div>
                        <div class="col-12">

                            <label for="">Confirmar Contraseña</label>
                            <input required type="password" class="form-control" placeholder="Confirma la contraseña">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              La contraseña no es igual
                               </div>
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

  <div class="modal" id="modalseguro" tabindex="-1"aria-labelledby="modalseguro" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Eliminar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Seguro que quieres eliminar el usuario </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button id="botonEliminarUser" type="button" class="btn btn-primary">Si</button>
        </div>
      </div>
    </div>
  </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./js/user1.js"></script>

<<<<<<< HEAD
<?php
=======
<?php 
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54

if(isset($_GET['status'])){
  $message="";
  
  if($_GET['status']==1){

    //inserta correcta
<<<<<<< HEAD
    $icon="success";
=======
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
    $message="Registro insertado correctamente";

  }else if($_GET['status']==2){


    //actualizacion correcta
<<<<<<< HEAD
    $icon="success";
 $message="Registro actualizado correctamente";
 }  else if($_GET['status']==3){
  //eliminado corrctamente
  $icon="success";
 $message="Registro eliminado correctamente";

 }else{
  $icon="error";
  $message="Algo fallo al subir los datos";



=======
 $message="Registro actualizado correctamente";
 }  else if($_GET['status']==3){
  //eliminado corrctamente
 $message="Registro eliminado correctamente";

>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
 }
?>



<script>
Swal.fire({

<<<<<<< HEAD
  icon:"<?php echo $icon ?>",
=======
  icon: "success",
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
  title: "<?php echo $message ?>",
  showConfirmButton: false,
  timer: 1500
});


<<<<<<< HEAD





=======
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
</script>
<?php

}



<<<<<<< HEAD




=======
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
?>



</body>
</html>