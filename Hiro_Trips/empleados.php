
<?php
include "../php/conexion.php";
$sql="select * from EMPLEADO order by ID_EMPLEADO ";
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
    <h4>Empleados</h4>
    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalAgregar">   <i class="bi bi-plus-circle"></i>
        Agregar Empleados
    </button>


   </div>
    <!--Title section-->
    

    <!--Data-->
    
    <div class="container my-5">
        <h3 class="mb-3"></h3>
        
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Salario</th>
                    <th>Fecha Contratacion</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Direccion</th>
                    <th>Estatus</th>
                
                </tr>
            </thead>
            <tbody>


            <?php
        while($fila=mysqli_fetch_array($res)){

        ?>
                <tr>
                    <td><?php  echo $fila['ID_EMPLEADO']?></td>
                    <td>
                        <img src="./img/empleados/<?php  echo $fila['IMAGEN']?>" alt="Profile" style="height: 40px;width: 40px;" class="rounded-circle me-2">
                        
                    </td>

                    <td><?php  echo $fila['NOMBRE']?></td>
                    <td><?php  echo $fila['CARGO']?></td>
                    <td><?php  echo $fila['SALARIO']?></td>
                    <td><?php  echo $fila['CONTRATACON_FECHA']?></td>
                    <td><?php  echo $fila['TELEFONO']?></td>
                    <td><?php  echo $fila['CORREO']?></td>
                    <td><?php  echo $fila['DIRECCION']?></td>
                    




                    <td><span class="badge bg-primary ">Activo</span></td>
                    <td >
                        <button data-id="<?php echo $fila['ID_EMPLEADO']?>" class="btnEliminarEmpleado btn btn-link text-danger p-0"  >
                            <i class="bi bi-trash" ></i>
                        </button>
                        </td>

                        <td> <button 
                        data-id="<?php  echo $fila['ID_EMPLEADO']?>"
                       data-name="<?php  echo $fila['NOMBRE']?>"
                        data-cargo="<?php  echo $fila['CARGO']?>"
                      data-salario="<?php  echo $fila['SALARIO']?>"
                      data-fecha="<?php  echo $fila['CONTRATACON_FECHA']?>"
                       data-telefono="<?php  echo $fila['TELEFONO']?>"
                      data-correo="<?php  echo $fila['CORREO']?>"
                      data-direccion="<?php  echo $fila['DIRECCION']?>"     
                        
                        
                        
                        
                        
                        
                        
                        class="btnEditarEmpleado btn btn-link text-warning p-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar empleado</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

       <form action="../php/empleado_update.php" class="needs-validation" novalidate id="form" method="post">


      
                <div class="modal-body " >

                    <div class="row">
                        <div class="col-6">
                      <input type="hidden" id="txtIdEdit" name="id">
                            <label for="">Nombre</label>
                            <input id="txtNombreEdit" name="txtNombre" required type="text" class="form-control" placeholder="Inserta el nombre del empleado ">
                            <div class="valid-feedback">
                               Correcto
                              </div>
                              <div class="invalid-feedback">
                             Nombre no valido
                              </div>
                        </div>
                        <div class="col-6">

                            <label for="">Cargo</label>
                            <input id="txtCargoEdit" name="txtCargo" required type="text" class="form-control" placeholder="Inserta el cargo">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Cargo no valido
                               </div>
                        </div>

                        <div class="col-4">

                            <label for="">Salario</label>
                            <input id="txtSalarioEdit" name="txtSalario" required type="number" class="form-control" placeholder="Inserta el salario ">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Salario no valido
                               </div>
                        </div>
                        <div class="col-4">

                            <label for="">Fecha de Contratacion</label>
                            <input id="txtFechaEdit" name="txtFecha" required type="date" class="form-control" placeholder="Fecha de Pago">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Fecha no valida
                               </div>
                        </div>
                        <div class="col-4">

                            <label for="">Telefono</label>
                            <input id="txtTelefonoEdit" name="txtTelefono" required type="text" class="form-control" placeholder="Numero de Telefono">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Telefono no valido
                               </div>
                              </div>

                              <div class="col-12">

                                <label for="">Correo</label>
                                <input id="txtCorreoEdit" name="txtCorreo" required type="email" class="form-control" placeholder="Inserta el Correo">
                                <div class="valid-feedback">
                                    Correcto
                                   </div>
                                   <div class="invalid-feedback">
                                Correo  no valido
                                   </div>
                                  </div>


                                  <div class="col-9">

                                    <label for="">Direccion</label>
                                    <input id="txtDireccionEdit" name="txtDireccion" required type="text" class="form-control" placeholder="Inserta La direccion Del Empleado">
                                    <div class="valid-feedback">
                                        Correcto
                                       </div>
                                       <div class="invalid-feedback">
                                     Direccion no valida
                                       </div>
                                      </div>

                                      <div class="col-3 ">
            
                                        <label for="">Estado</label>
                                       <select id="txtEstadoEdit" name="txtEstado" class="form-control"  >
                                        <option value="1">Activo</option>
                                        <option value="2">Pasante</option>
                                        <option value="3">Vacaciones</option>
                                        <option value="4">Despedido</option>
                                       </select>
                                    </div>

                                    <div class="col-6">

                                      <label for="">Imagen</label>
                                      <input id="txtImagenEdit" accept="image/*" name="txtImagen" required type="file" class="form-control" placeholder="Inserta la imagen">
                                      <div class="valid-feedback">
                                          Correcto
                                        </div>
                                        <div class="invalid-feedback">
                                      Correo  no valido
                                        </div>
                                        </div>  

                                    
                      
                        
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




  <div class="modal fade modal-lg" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregar" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar empleado</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

       <form action="../php/add-empleados.php" enctype="multipart/form-data" class="needs-validation" novalidate id="form" method="post">


      
                <div class="modal-body " >

                    <div class="row">
                        <div class="col-6">

                            <label for="">Nombre</label>
                            <input name="txtNombre" required type="text" class="form-control" placeholder="Inserta el nombre del empleado ">
                            <div class="valid-feedback">
                               Correcto
                              </div>
                              <div class="invalid-feedback">
                             Nombre no valido
                              </div>
                        </div>
                        <div class="col-6">

                            <label for="">Cargo</label>
                            <input name="txtCargo" required type="text" class="form-control" placeholder="Inserta el cargo">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Cargo no valido
                               </div>
                        </div>

                        <div class="col-4">

                            <label for="">Salario</label>
                            <input name="txtSalario" required type="number" class="form-control" placeholder="Inserta el salario ">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Salario no valido
                               </div>
                        </div>
                        <div class="col-4">

                            <label for="">Fecha de Contratacion</label>
                            <input name="txtFecha" required type="date" class="form-control" placeholder="Fecha de Pago">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Fecha no valida
                               </div>
                        </div>
                        <div class="col-4">

                            <label for="">Telefono</label>
                            <input name="txtTelefono" required type="text" class="form-control" placeholder="Numero de Telefono">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Telefono no valido
                               </div>
                              </div>

                              <div class="col-12">

                                <label for="">Correo</label>
                                <input name="txtCorreo" required type="email" class="form-control" placeholder="Inserta el Correo">
                                <div class="valid-feedback">
                                    Correcto
                                   </div>
                                   <div class="invalid-feedback">
                                Correo  no valido
                                   </div>
                                  </div>


                                  <div class="col-9">

                                    <label for="">Direccion</label>
                                    <input name="txtDireccion" required type="text" class="form-control" placeholder="Inserta La direccion Del Empleado">
                                    <div class="valid-feedback">
                                        Correcto
                                       </div>
                                       <div class="invalid-feedback">
                                     Direccion no valida
                                       </div>
                                      </div>

                                      <div class="col-3 ">
            
                                        <label for="">Estado</label>
                                       <select name="txtEstado" class="form-control"  >
                                        <option value="1">Activo</option>
                                        <option value="2">Pasante</option>
                                        <option value="3">Vacaciones</option>
                                        <option value="4">Despedido</option>
                                       </select>
                                    </div>


                                    <div class="col-6">

                                <label for="">Imagen</label>
                                <input accept="image/*" name="txtImagen" required type="file" class="form-control" placeholder="Inserta la imagen">
                                <div class="valid-feedback">
                                    Correcto
                                   </div>
                                   <div class="invalid-feedback">
                                Correo  no valido
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


  <div class="modal" id="modalborrar" tabindex="-1"aria-labelledby="modalborrar" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Borrar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Estas Seguro de borrar al empleado?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button id="botonEliminarEmpleados" type="button" class="btn btn-primary">Eliminar</button>
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