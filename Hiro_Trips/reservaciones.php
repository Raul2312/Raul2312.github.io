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
            
            <th scope="col">Paquete</th>
            <th scope="col">EMPLEADO</th>
            <th scope="col">MONTO</th>
            <th scope="col">TRANSPORTE</th>
            <th scope="col">HOTEL</th>
            <th scope="col">COMIDA</th>
            <th scope="col">FECHA INICIO</th>
            <th scope="col">FECHA REGRESO</th>
            <th scope="col">Opciones</th>
            
          </tr>
        </thead>
        <tbody>
        <?php
        while($fila=mysqli_fetch_array($res)){

        ?>
          <tr>
            <th scope="row"><?php  echo $fila['ID_RESERVACION']?></th>
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