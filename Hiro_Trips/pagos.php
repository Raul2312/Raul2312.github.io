<?php
include "../php/conexion.php";
$sql="SELECT 
    PAGOS.*,
    RESERVACIONES.ID_RESERVACION
FROM 
    PAGOS
INNER JOIN 
    RESERVACIONES ON PAGOS.ID_RESERVACION = RESERVACIONES.ID_RESERVACION; ";
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
<section class="container-mt-4 p-4">
 
   <!--Title section-->
   <div class="d-flex justify-content-between">
    <h4>Facturas y Pagos</h4>
    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">   <i class="bi bi-plus-circle"></i>
        Agregar
    </button>


   </div>
    <!--Title section-->
    

    <!--Data-->
   <div class="row">
    <table class="table " >
        <thead>
          <tr>
            <th scope="col">ID_PAGO</th>
            <th scope="col">ID_RESERVACION</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Monto</th>
            <th scope="col">Fecha Pago</th>
            <th scope="col">Metodo de Pago</th>
            <th scope="col">Estado de Pago</th>
            <th scope="col">Opciones</th>
            <th></th>
          </tr>
        </thead>
        <tbody>


        <?php
        while($fila=mysqli_fetch_array($res)){

        ?>
          <tr>
            <th scope="row"><?php  echo $fila['ID_PAGO']?></th>
            <td><?php  echo $fila['ID_RESERVACION']?></td>
            <td><?php  echo $fila['NOMBRE']?></td>
            <td>$<?php  echo $fila['MONTO']?></td>
            <td><?php  echo $fila['FECHA_PAGO']?></td>
            <td><?php  echo $fila['METODO_PAGO']?></td>
            <td><?php  echo $fila['ESTADO_PAGO']?></td>
            <td>
                <button data-id="<?php  echo $fila['ID_PAGO']?>" class="btnEliminar btn btn-outline-danger btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#modalseguro">
                    <i class="bi bi-trash3" data-id="<?php  echo $fila['ID_PAGO']?>"></i>
                 </button>

                 <button
                   data-id="<?php  echo $fila['ID_PAGO']?>"
                  data-reservacion="<?php  echo $fila['ID_RESERVACION']?>"
                  data-nombre="<?php  echo $fila['NOMBRE']?>"
                  data-monto="<?php  echo $fila['MONTO']?>"
                  data-fecha="<?php  echo $fila['FECHA_PAGO']?>"
                  data-metodo="<?php  echo $fila['METODO_PAGO']?>"
                  data-estado="<?php  echo $fila['ESTADO_PAGO']?>"     
                 
                 
                 
                 
                 class="btnEditar btn btn-outline-warning btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#modaleditar"  >
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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar pago</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

       <form action="../php/add-pagos.php" class="needs-validation" novalidate id="form" method="post">


      
                <div class="modal-body " >

                    <div class="row">
                        <div class="col-6">

                            <label for="">ID_Reservacion</label>
                            <input  name="txtReservacion" required type="number" class="form-control" placeholder="Inserta el id de la reservacion ">
                            <div class="valid-feedback">
                               Correcto
                              </div>
                              <div class="invalid-feedback">
                             Nombre no valido
                              </div>
                        </div>
                        <div class="col-6">

                            <label for="">Nombre</label>
                            <input  name="txtNombre" required type="text" class="form-control" placeholder="Inserta el nombre completo">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Apellido  no valido
                               </div>
                        </div>

                        <div class="col-4">

                            <label for="">Monto</label>
                            <input  name="txtMonto" required type="number" class="form-control" placeholder="Inserta el monto ">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Edad no valida
                               </div>
                        </div>
                        <div class="col-4">

                            <label for="">Fecha de Pago</label>
                            <input  name="txtFecha" required type="date" class="form-control" placeholder="Fecha de Pago">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Peso no valido
                               </div>
                        </div>
                        <div  class="col-4">

                            <label for="">Metodo de pago</label>
                            <select  name="txtMetodo" class="form-control" >
                                <option value="Efectivo">Efectivo</option>
                                <option value="Transferencia">Transferencia</option>
                                <option value="Deposito">Deposito</option>
                               
                    
                            </select>
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Altura no valida
                               </div>
                        </div>
                        
                      
                        <div class="col-12">

                            <label for="">Estado de Pago</label>
                            <select name="txtEstado" class="form-control" >
                                <option value="Pagado">Pagado</option>
                                <option value="Pendiente">Pendiente</option>
                          
                               
                    
                            </select>
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              La contraseña es igual
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




  <div class="modal fade modal-lg" id="modaleditar" tabindex="-1" aria-labelledby="modaleditar" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar pago</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

       <form action="../php/pago_update.php" class="needs-validation" novalidate id="form" method="post">


      
                <div class="modal-body " >
                    <input type="hidden" name="id" id="txtIdEdit"   />
                    <div class="row">
                        <div class="col-6">

                            <label for="">ID_Reservacion</label>
                            <input id="txtId" name="txtReservacion" required type="number" class="form-control" placeholder="Inserta el id de la reservacion ">
                            <div class="valid-feedback">
                               Correcto
                              </div>
                              <div class="invalid-feedback">
                             Nombre no valido
                              </div>
                        </div>
                        <div class="col-6">

                            <label for="">Nombre</label>
                            <input id="txtNombreEdit" name="txtNombre" required type="text" class="form-control" placeholder="Inserta el nombre completo">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Apellido  no valido
                               </div>
                        </div>

                        <div class="col-4">

                            <label for="">Monto</label>
                            <input id="txtMontoEdit" name="txtMonto" required type="number" class="form-control" placeholder="Inserta el monto ">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Edad no valida
                               </div>
                        </div>
                        <div class="col-4">

                            <label for="">Fecha de Pago</label>
                            <input id="txtFechaEdit" name="txtFecha" required type="date" class="form-control" placeholder="Fecha de Pago">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Peso no valido
                               </div>
                        </div>
                        <div  class="col-4">

                            <label for="">Metodo de pago</label>
                            <select id="txtMetodoEdit" name="txtMetodo" class="form-control" >
                                <option value="Efectivo">Efectivo</option>
                                <option value="Transferencia">Transferencia</option>
                                <option value="Deposito">Deposito</option>
                               
                    
                            </select>
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Altura no valida
                               </div>
                        </div>
                        
                      
                        <div class="col-12">

                            <label for="">Estado de Pago</label>
                            <select id="txtEstadoEdit" name="txtEstado" class="form-control" >
                                <option value="Pagado">Pagado</option>
                                <option value="Pendiente">Pendiente</option>
                          
                               
                    
                            </select>
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              La contraseña es igual
                               </div>
                        </div>
                    </div>
                
                    <div class="alert alert-danger mt-4 d-none" id="divAlerta" role="alert">
                    Favor de lenar los campos 
                    </div>
                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="btnEditar">Guardar</button>
                </div>
    </form>

      </div>
     </div>
  </div>


  <div class="modal" id="modalACTIVAR" tabindex="-1"aria-labelledby="modalACTIVAR" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Pasar de Pendiente a Pagado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>La reservacion pasara a Pagada ? Seguro que quieres Registrarla</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Si</button>
        </div>
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
          <p>Seguro que quieres eliminar el Pago, No hay forma de revertirlo </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button id="botoneliminar" type="button" class="btn btn-primary">Eliminar</button>
        </div>
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