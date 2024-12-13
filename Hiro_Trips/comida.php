<?php
include "../php/conexion.php";
<<<<<<< HEAD
$sql="select * from COMIDA2 order by ID_COMIDA ";
=======
$sql="select * from COMIDA order by ID_COMIDA ";
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
    <?php include "./layouts/aside.php" ?>
   
<!--end sidebar-->
<!--Main content-->

<main class="flex-grow-1 ">
    <?php include "./layouts/header.php" ?>
<section class="container mt-4 p-4">
 
   <!--Title section-->
   <div class="d-flex justify-content-between">
    <h4>Comida</h4>
    <a class="btn btn-dark" href="./Comida/comidas_add.php">   <i class="bi bi-plus"></i>
        Agregar Platillo
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
            <img src="./img/huevo1.jpg" class="card-img-top" style="height: 200px;" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php  echo $fila['ID_COMIDA']?></h5>
<<<<<<< HEAD
              <p class="card-text"><?php  echo $fila['NOMBRE']?></p>
              <p class="card-text"><?php  echo $fila['DESCRIPCION']?></p>
              <p class="card-text"><?php  echo $fila['TOTAL_CALORIAS']?></p>
              <p class="card-text"><?php  echo $fila['CATEGORIA']?></p>
              <p class="card-text">$<?php  echo $fila['PRECIO']?></p>
              <p class="card-text"><?php  echo $fila['PROCEDIMIENTO']?></p>
              
=======
              <p class="card-text"><?php  echo $fila['TIPO']?></p>
              <p class="card-text"><?php  echo $fila['PRECIO']?></p>
              <p class="card-text"><?php  echo $fila['ID_PAQUETE']?></p>
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
              <a href="#" class="btn btn-primary btn-dark" data-bs-toggle="modal" data-bs-target="#modaleditar">Editar</a>
            </div>
          </div>

          

    </div>
    <?php 
}


?>



    <div class="col-3 p-0 my-2 px-3">
        <div class="card" >
            <img src="./img/salmon ahumaado.jpg" class="card-img-top" style="height: 200px;" alt="...">
            <div class="card-body">
              <h5 class="card-title">Salmon ahumado</h5>
              <p class="card-text">Salmon ahumado con ensalada y fresas gourmet</p>
              <a href="#" class="btn btn-primary btn-dark" data-bs-toggle="modal" data-bs-target="#modaleditar">Editar</a>
            </div>
          </div>

    </div>
    <div class="col-3 p-0 my-2 px-3">
        <div class="card" >
            <img src="./img/pizza.jpg" class="card-img-top" style="height: 200px;" alt="...">
            <div class="card-body">
              <h5 class="card-title">Salmon Cocinado</h5>
              <p class="card-text">Salmon cocinado 3/4 con ensalada fench y arroz japones </p>
              <a href="#" class="btn btn-primary btn-dark" data-bs-toggle="modal" data-bs-target="#modaleditar">Editar</a>
            </div>
          </div>

    </div>
    <div class="col-3 p-0 my-2 px-3">
        <div class="card" >
            <img src="./img/pastel gourmet extravaganti.jpg" class="card-img-top" style="height: 200px;" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pastel extravaganti</h5>
              <p class="card-text">Pastel de tres leches con granos de nuez fresas y7 chocolate </p>
              <a href="#" class="btn btn-primary btn-dark" data-bs-toggle="modal" data-bs-target="#modaleditar">Editar</a>
            </div>
          </div>

    </div>
    <div class="col-3 p-0 my-2 px-3">
        <div class="card" >
            <img src="./img/pizza.jpg" class="card-img-top" style="height: 200px;" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pizza estilo Italia</h5>
              <p class="card-text">Pizza con queso chedar pimientos rojos y verdes extra de cerezas</p>
              <a href="#" class="btn btn-primary btn-dark" data-bs-toggle="modal" data-bs-target="#modaleditar">Editar</a>
            </div>
          </div>

    </div>
    <div class="col-3 p-0 my-2 px-3">
        <div class="card" >
            <img src="./img/PanCakes con arandanos y moras.jpg" class="card-img-top" style="height: 200px;" alt="...">
            <div class="card-body">
              <h5 class="card-title">PanCakes</h5>
              <p class="card-text">PanCakes con arandanos y moras y miel de maple</p>
              <a href="#" class="btn btn-primary btn-dark" data-bs-toggle="modal" data-bs-target="#modaleditar">Editar</a>
            </div>
          </div>

    </div>
    <div class="col-3 p-0 my-2 px-3">
        <div class="card" >
            <img src="./img/crepa.jpg" class="card-img-top" style="height: 200px;" alt="...">
            <div class="card-body">
              <h5 class="card-title">Crepa Venezolana</h5>
              <p class="card-text">Crepa Estilo Venezuela con cereza y relleno de leche condensada</p>
              <a href="#" class="btn btn-primary btn-dark" data-bs-toggle="modal" data-bs-target="#modaleditar">Editar</a>
            </div>
          </div>

    </div>
    <div class="col-3 p-0 my-2 px-3">
        <div class="card" >
            <img src="./img/corteribon.jpg" class="card-img-top" style="height: 200px;" alt="...">
            <div class="card-body">
              <h5 class="card-title">Corte de carne </h5>
              <p class="card-text">Corte carne estilo ribon preparada con dondimentos y ensalada</p>
              <a href="#" class="btn btn-primary btn-dark" data-bs-toggle="modal" data-bs-target="#modaleditar">Editar</a>
            </div>
          </div>

    </div>
</div>


    <!--Data-->


</section>



</main>

<!--End Main content-->
<div class="modal fade modal-lg" id="modaleditar" tabindex="-1" aria-labelledby="modaleditar" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Platillo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

       <form action="" class="needs-validation" novalidate id="form">


      
                <div class="modal-body " >

                    <div class="row">
                        <div class="col-6">

                            <label for="">Nombre</label>
                            <input  required type="text" class="form-control" placeholder="Inserta el nombre del empleado ">
                            <div class="valid-feedback">
                               Correcto
                              </div>
                              <div class="invalid-feedback">
                             Nombre no valido
                              </div>
                        </div>
                        <div class="col-6">

                            <label for="">Descripcion</label>
                            <input  required type="text" class="form-control" placeholder="Inserta la descripcion del platillo">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Descripcion no valida
                               </div>
                        </div>

                        <div class="col-4">

                            <label for="">Total de calorias </label>
                            <input required type="number" class="form-control" placeholder="Inserta las calorias  ">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Calorias no validas
                               </div>
                        </div>
                        <div class="col-4">

                            <label for="">Categoria </label>
                            <input required type="text" class="form-control" placeholder="Categoria del platillo">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Categoria no valida
                               </div>
                        </div>
                        <div class="col-4">

                            <label for="">Precio </label>
                            <input required type="number" class="form-control" placeholder="Precio del Platillo">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Precio no valido
                               </div>
                              </div>

                              <div class="col-12">

                                <label for="">Procedimiento</label>
                                <input required type="text" class="form-control" placeholder="Inserta el procedimiento del Platillo">
                                <div class="valid-feedback">
                                    Correcto
                                   </div>
                                   <div class="invalid-feedback">
                                Procedimiento no valido
                                   </div>
                                  </div>


                                  <div class="mb-3">
                                    <label for="formFile" class="form-label">Subir Imagen</label>
                                    <input class="form-control" type="file" id="formFile" accept="image/*">
                                    <div class="valid-feedback">
                                        Correcto
                                       </div>
                                       <div class="invalid-feedback">
                                     Imagen no valida
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




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./js/user1.js"></script>



</body>
</html>