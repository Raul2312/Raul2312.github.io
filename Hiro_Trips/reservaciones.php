<?php
include "../php/conexion.php";
$sql="select * from RESERVACIONES order by ID_RESERVACION ";
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

<main class="flex-grow-1 " >
<?php include "./layouts/header.php" ?>
<section class="container-mt-4 p-4">
 
   <!--Title section-->
   <div class="d-flex justify-content-between">
    <h4>Reservaciones</h4>
    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">   <i class="bi bi-plus-circle"></i>
        Agregar Reservacion
    </button>


   </div>
    <!--Title section-->
    

    <!--Data-->
   <div class="row">
    <table class="table  mt-4" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Completo</th>
<<<<<<< HEAD
            
            <th scope="col">Paquete</th>
            <th scope="col">EMPLEADO</th>
            <th scope="col">MONTO</th>
            <th scope="col">TRANSPORTE</th>
            <th scope="col">HOTEL</th>
            <th scope="col">COMIDA</th>
            <th scope="col">FECHA INICIO</th>
            <th scope="col">FECHA REGRESO</th>
=======
            <th scope="col">ID_Usuarios</th>
            <th scope="col">Id_Paquete</th>
            <th scope="col">ID_empleado</th>
            <th scope="col">ID_Pago</th>
            <th scope="col">ID_Transporte</th>
            <th scope="col">ID_Hospedaje</th>
            <th scope="col">ID_Comida</th>
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
            <th scope="col">Opciones</th>
            
          </tr>
        </thead>
        <tbody>
        <?php
        while($fila=mysqli_fetch_array($res)){

        ?>
          <tr>
            <th scope="row"><?php  echo $fila['ID_RESERVACION']?></th>
<<<<<<< HEAD
            <td><?php  echo $fila['USUARIO']?></td>
            <td><?php  echo $fila['PAQUETE']?></td>
            <td><?php  echo $fila['NOMBRE_EMPLEADO']?></td>
            <td><?php  echo $fila['MONTO']?></td>
            <td><?php  echo $fila['MODELO']?></td>
            <td><?php  echo $fila['HOTEL']?></td>
            <td><?php  echo $fila['COMIDA']?></td>
            <td><?php  echo $fila['FECHA_SALIDA']?></td>
            <td><?php  echo $fila['FECHA_REGRESO']?></td>
            
            
            <td>
                <button data-id="<?php  echo $fila['ID_RESERVACION']?>" class="btnEliminarReservas btn btn-outline-danger btn-sm mx-1" >
                    <i class="bi bi-trash3" data-id="<?php  echo $fila['ID_RESERVACION']?>"></i>
=======
            <td><?php  echo $fila['ID_NOMBRE']?></td>
            <td><?php  echo $fila['ID_USUARIOS']?></td>
            <td><?php  echo $fila['ID_PAQUETE']?></td>
            <td><?php  echo $fila['ID_EMPLEADO']?></td>
            <td><?php  echo $fila['ID_PAGO']?></td>
            <td><?php  echo $fila['ID_TRANSPORTE']?></td>
            <td><?php  echo $fila['ID_HOSPEDAJE']?></td>
            <td><?php  echo $fila['ID_COMIDA']?></td>
            
            <td>
                <button class="btn btn-outline-danger btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#modalseguro">
                    <i class="bi bi-trash3"></i>
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
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
<div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
<<<<<<< HEAD
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Reservacion</h1>
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
                        <div class="col-3">

                            <label for="">Paquete</label>
                            <input required type="text" class="form-control" placeholder="Inserta el paquete">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              ID  no valido
                               </div>
                        </div>

                        <div class="col-3">

                            <label for="">Empleado</label>
                            <input required type="text" class="form-control" placeholder="Inserta el empleado">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              ID no valido
                               </div>
                        </div>
                        <div class="col-4">

                            <label for="">Monto</label>
                            <input required type="text" class="form-control" placeholder="Inserta el monto de la reservacion">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Id no valido
                               </div>
                        </div>
                    
                       
                        <div class="col-4">

                            <label for="">Transporte</label>
                            <input required type="text" class="form-control" placeholder="Inserta el transporte">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Id no valido
                               </div>
                        </div>
                        <div class="col-4">

                            <label for="">Hotel</label>
                            <input required type="password" class="form-control" placeholder="Inserta el Hotel">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Id no valido
                               </div>
                        </div>

                        <div class="col-4">

                            <label for="">Comida</label>
                            <input required type="password" class="form-control" placeholder="Inserta el platillo">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Id no valido
                               </div>
                        </div>


                        <div class="col-4">

                            <label for="">Fecha de Inicio</label>
                            <input required type="password" class="form-control" placeholder="Inserta la fecha de inicio">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Id no valido
                               </div>
                        </div>
                        <div class="col-4">

                        <label for="">Fecha de Regreso</label>
                        <input required type="password" class="form-control" placeholder="Inserta la fecha de regreso">
                        <div class="valid-feedback">
                            Correcto
                          </div>
                          <div class="invalid-feedback">
                        Id no valido
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
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
=======
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Reservacion</h1>
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
                        <div class="col-3">

<<<<<<< HEAD
                            <label for="">Paquete</label>
                            <input required type="text" class="form-control" placeholder="Inserta el paquete">
=======
                            <label for="">ID_Usuario</label>
                            <input required type="text" class="form-control" placeholder="Inserta el id_usuario">
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              ID  no valido
                               </div>
                        </div>

                        <div class="col-3">

<<<<<<< HEAD
                            <label for="">Empleado</label>
                            <input required type="text" class="form-control" placeholder="Inserta el empleado">
=======
                            <label for="">Id_Paquete</label>
                            <input required type="text" class="form-control" placeholder="Inserta el Id_Paquete">
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              ID no valido
                               </div>
                        </div>
                        <div class="col-4">

<<<<<<< HEAD
                            <label for="">Monto</label>
                            <input required type="text" class="form-control" placeholder="Inserta el monto de la reservacion">
=======
                            <label for="">Id_Empleado</label>
                            <input required type="text" class="form-control" placeholder="Inserta el Id_Empleado">
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Id no valido
                               </div>
                        </div>
                    
                       
                        <div class="col-4">

<<<<<<< HEAD
                            <label for="">Transporte</label>
                            <input required type="text" class="form-control" placeholder="Inserta el transporte">
=======
                            <label for="">Id_Pago</label>
                            <input required type="text" class="form-control" placeholder="Inserta el Id_Pago">
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Id no valido
                               </div>
                        </div>
                        <div class="col-4">

<<<<<<< HEAD
                            <label for="">Hotel</label>
                            <input required type="password" class="form-control" placeholder="Inserta el Hotel">
=======
                            <label for="">Id_Transporte</label>
                            <input required type="password" class="form-control" placeholder="Inserta el Id_Transporte">
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Id no valido
                               </div>
                        </div>

                        <div class="col-4">

<<<<<<< HEAD
                            <label for="">Comida</label>
                            <input required type="password" class="form-control" placeholder="Inserta el platillo">
=======
                            <label for="">ID_Hospedaje</label>
                            <input required type="password" class="form-control" placeholder="Inserta el Id_Hospedaje">
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Id no valido
                               </div>
                        </div>


                        <div class="col-4">

<<<<<<< HEAD
                            <label for="">Fecha de Inicio</label>
                            <input required type="password" class="form-control" placeholder="Inserta la fecha de inicio">
=======
                            <label for="">ID_Comida</label>
                            <input required type="password" class="form-control" placeholder="Inserta el Id_Comida">
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Id no valido
                               </div>
                        </div>
<<<<<<< HEAD
                        <div class="col-4">

                        <label for="">Fecha de Regreso</label>
                        <input required type="password" class="form-control" placeholder="Inserta la fecha de regreso">
                        <div class="valid-feedback">
                            Correcto
                          </div>
                          <div class="invalid-feedback">
                        Id no valido
                          </div>
                        </div>
=======
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54

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
          <p>Seguro que quieres eliminar la reservacion? </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Si</button>
        </div>
      </div>
    </div>
  </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./js/user1.js"></script>



</body>
</html>