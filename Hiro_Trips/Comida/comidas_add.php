<?php
include "../../php/conexion.php";
<<<<<<< HEAD
$sql="select * from COMIDA2 order by ID_COMIDA ";
=======
$sql="select * from COMIDA order by ID_COMIDA ";
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
$res =$conexion ->query("$sql") or die ($conexion->error);


?>

<?php session_start();
if(!isset($_SESSION['user_data'])){
<<<<<<< HEAD
header("Location: ../Hiro_Trips/inicio.php");
=======
header("Location:../Hiro_Trips/inicio.php");
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54


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
<<<<<<< HEAD
    <aside class="d-flex " style="width: 13%;">
        <div class=" text-black p-3  w-100 " style="background-color: #080808; min-height: 100vh;" >
            <h2 class="h3 text-center text-white">  <img src="../img/LOGOBLANCO.webp " class="card-img-top" alt="..." style="height: 100PX; width: 100PX; " >
                <br>
                
                Hiro Trips</h2>
            <nav>
                <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="../admin.php" class="nav-link text-white"><i class="bi bi-house"></i>&nbsp;&nbsp;   Inicio </a>
                        </li>
                        <li class="nav-item">
                            <a href="../users.php" class="nav-link text-white"><i class="bi bi-person"></i>&nbsp;&nbsp;   Usuarios </a>
                        </li>
                        <li class="nav-item">
                            <a href="../comida.php" class="nav-link text-white"><i class="bi bi-egg-fried"></i>&nbsp;&nbsp;   Comida</a>
                        </li>
                        <li class="nav-item">
                            <a href="../reservaciones.php" class="nav-link text-white"><i class="bi bi-airplane-engines"></i>&nbsp;&nbsp;   Reservaciones</a>
                        </li>
                        <li class="nav-item">
                            <a href="../pagos.php" class="nav-link text-white"><i class="bi bi-cash"></i>
                                &nbsp;&nbsp;   Pagos</a>
                        </li>

                        <li class="nav-item">
                            <a href="../empleados.php" class="nav-link text-white"><i class="bi bi-person-arms-up"></i>

                                &nbsp;&nbsp;   Empleados</a>    
                        </li>

                        <li class="nav-item">
                            <a href="../hospedaje.php" class="nav-link text-white"><i class="bi bi-house-fill"></i>

                                &nbsp;&nbsp;  Hospedaje</a>
                        </li>
                        <li class="nav-item">
                            <a href="../transporte.php" class="nav-link text-white"><i class="bi bi-bicycle"></i>

                                &nbsp;&nbsp;  Transporte</a>
                        </li>
                        <li class="nav-item">
                            <a href="../paquetes.php" class="nav-link text-white"><i class="bi bi-gift"></i>

                                &nbsp;&nbsp;  Paquete</a>
                        </li>


                        
                      
                </ul>
            </nav>
        </div>
    </aside>
=======
    <?php include "../layouts/aside.php";    ?>
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
   
<!--end sidebar-->
<!--Main content-->

<main class="flex-grow-1 ">
<<<<<<< HEAD
<?php include "../layouts/header.php"?>
=======
<?php include "../layouts/header.php" ?>
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54

    
<section class="container mt-4 p-4">
 
   <!--Title section-->
   <div class="d-flex justify-content-between">
    <h4>Agregar </h4>
    <a class="btn btn-outline-danger" href="../comida.php">   <i class="bi bi-arrow-left"></i>
       Volver
    </a>


   </div>
    <!--Title section-->
    

    <!--Data-->
   <div class="row px-4">
    <div class="row">
        <div class="col-3">

            <label for="">Nombre</label>
            <input required type="text" class="form-control" placeholder="Nombre del platillo">
            <div class="valid-feedback">
               Correcto
              </div>
              <div class="invalid-feedback">
             Nombre no valido
              </div>
        </div>
        <div class="col-3">

            <label for="">Descripcion</label>
            <input required type="text" class="form-control" placeholder="Inserta tu descripcion">
            <div class="valid-feedback">
               Correcto
              </div>
              <div class="invalid-feedback">
             Nombre no valido
              </div>
        </div>
        <div class="col-3">

            <label for="">Imagen</label>
            <input required type="file" class="form-control" placeholder="No choose file">
            <div class="valid-feedback">
               Correcto
              </div>
              <div class="invalid-feedback">
             Nombre no valido
              </div>
        </div>
        <div class="col-3">

            <label for="">Total de calorias </label>
            <input required type="text" class="form-control" placeholder="# de calorias">
            <div class="valid-feedback">
               Correcto
              </div>
              <div class="invalid-feedback">
             Nombre no valido
              </div>
        </div>
        


    </div>


    <div class="row mt-3">
        <hr>Categorias <hr>
        <div class="col-3 ">
            
            <label for="">Categorias</label>
           <select class="form-control"  >
            <option value="1">Desayuno</option>
            <option value="2">Comida</option>
            <option value="2">Cena </option>
           </select>
        </div>
        <div class="col-9">

            <label for="">Procedimineto </label>
            <input required type="text" class="form-control" placeholder="Ingresa el procedimineto ">
            <div class="valid-feedback">
               Correcto
              </div>
              <div class="invalid-feedback">
             Procedimiento no valido
              </div>


         </div>


   </div>
   <div class="row mt-3">
    <hr>Ingredientes <hr>
    <div class="col-4 ">

        <label for="">Ingredientes</label>
        <select class="form-control" >
            <option value="1">Tomate</option>
            <option value="2">Huevo</option>

        </select>


     </div>
     <div class="col-4">

        <label for="">Precio </label>
        <input required type="number" class="form-control" placeholder="Ingresa el Precio  ">
        <div class="valid-feedback">
           Correcto
          </div>
          <div class="invalid-feedback">
        Cantidad no valida
          </div>


     </div>
    
     <div class="col-2 mt-4">
        <button class="btn btn-dark"  >   <i class="bi bi-arrow-down"></i>
          Ver tabla

     </div>
     
     <div class="col-2 mt-4">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalGuardar" >  
             <i class="bi bi-floppy"></i>

          Guardar

     </div>

     
     


   

     <div class="row mt-3   ">
        <table class="table " >
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Cantidad de calorias </th>
                <th scope="col">Categorias  </th>
                <th>Ingredientes</th>
                <th>Precio</th>
                <th>Opciones</th>
                
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Huevos a la Mexicana</td>
                <td>Huevos estilo mexico con tomate,cebolla,chile</td>
                <td>300c</td>
                <td>Desayuno</td>
                <td>Huevos,Tomate,cebolla,chile</td>
                <td>200$</td>

                
            
                <td>
                    <button class="btn btn-outline-danger btn-sm mx-1"data-bs-toggle="modal" data-bs-target="#modalseguro" >
                        <i class="bi bi-trash3"></i>
                     </button>

                   
    
                   
    
    
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Salmon ahumado</td>
                <td>Salmon ahumado con ensalada y fresas gourmet</td>
                <td>800c</td>
                <td>Comida</td>
                <td>Salmon,ensalada</td>
                <td>300$</td>
          
    
           
                <td>
                    <button class="btn btn-outline-danger btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#modalseguro">
                        <i class="bi bi-trash3"></i>
                     </button>
    
                     
    
    
                </td>
              </tr>

              <tr>
                <th scope="row">3</th>
                <td>Salmon Cocinado</td>
                <td>Salmon cocinado 3/4 con ensalada fench y arroz japones</td>
                <td>1000c</td>
                <td>Comida</td>
                <td>Salmon,ensalada,pimiento</td>
                <td>400$</td>
          
    
           
                <td>
                    <button class="btn btn-outline-danger btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#modalseguro">
                        <i class="bi bi-trash3"></i>
                     </button>
    
                     
    
    
                </td>
              </tr>

              <tr>
                <th scope="row">4</th>
                <td>Pastel extravaganti</td>
                <td>Pastel de tres leches con granos de nuez fresas y chocolate</td>
                <td>1400c</td>
                <td>Postre</td>
                <td>Pastel,Huevos,Leche ,levadura</td>
                <td>500$</td>
          
    
           
                <td>
                    <button class="btn btn-outline-danger btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#modalseguro">
                        <i class="bi bi-trash3"></i>
                     </button>
    
                     
    
    
                </td>
              </tr>

              <tr>
                <th scope="row">5</th>
                <td>Pizza estilo Italia</td>
                <td>Pizza con queso chedar pimientos rojos y verdes extra de cerezas</td>
                <td>900c</td>
                <td>Comida</td>
                <td>Levadura,Masa,queso,peperoni,cerezas ,pimientos</td>
                <td>1000$</td>
          
    
           
                <td>
                    <button class="btn btn-outline-danger btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#modalseguro">
                        <i class="bi bi-trash3"></i>
                     </button>
    
                     
    
    
                </td>
              </tr>


              <tr>
                <th scope="row">6</th>
                <td>PanCakes</td>
                <td>PanCakes con arandanos y moras y miel de maple </td>
                <td>1300c</td>
                <td>Desayuno</td>
                <td>Levadura,masa,miel,arandanos,moras</td>
                <td>400$</td>
          
    
           
                <td>
                    <button class="btn btn-outline-danger btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#modalseguro">
                        <i class="bi bi-trash3"></i>
                     </button>
    
                     
    
    
                </td>
              </tr>

              <tr>
                <th scope="row">5</th>
                <td>Crepa Venezolana</td>
                <td>Crepa Estilo Venezuela con cereza y relleno de leche condensada</td>
                <td>800c</td>
                <td>Comida</td>
                <td>Levadura,Masa,queso,peperoni,cerezas ,leche condensada</td>
                <td>700$</td>
          
    
           
                <td>
                    <button class="btn btn-outline-danger btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#modalseguro">
                        <i class="bi bi-trash3"></i>
                     </button>
    
                     
    
    
                </td>
              </tr>

              <tr>
                <th scope="row">5</th>
                <td>Corte de carne</td>
                <td>Corte carne estilo ribon preparada con dondimentos y ensalada</td>
                <td>2000c</td>
                <td>Comida</td>
                <td>Ribon,Ensalada</td>
                <td>1500$</td>
          
    
           
                <td>
                    <button class="btn btn-outline-danger btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#modalseguro">
                        <i class="bi bi-trash3"></i>
                     </button>
    
                     
    
    
                </td>
              </tr>
              
            </tbody>
          </table>




     </div>
 
     
     


   </div>


   </div>


    <!--Data-->


</section>



</main>

<!--End Main content-->
<div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Usuario</h1>
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
                        <div class="col-4">

                            <label for="">Peso</label>
                            <input required type="number" class="form-control" placeholder="Peso">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                             Peso no valido
                               </div>
                        </div>
                        <div class="col-4">

                            <label for="">Altura</label>
                            <input required type="number" class="form-control" placeholder="Altura">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Altura no valida
                               </div>
                        </div>
                        <div class="col-12">

                            <label for="">Email</label>
                            <input required type="email" class="form-control" placeholder="Inserta tu email">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Email no valido
                               </div>
                        </div>
                        <div class="col-12">

                            <label for="">Password</label>
                            <input required type="password" class="form-control" placeholder="Inserta tu contraseña">
                            <div class="valid-feedback">
                                Correcto
                               </div>
                               <div class="invalid-feedback">
                              Contraseña no valida
                               </div>
                        </div>
                        <div class="col-12">

                            <label for="">Confirm Password</label>
                            <input required type="password" class="form-control" placeholder="Confrima tu contraseña">
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


  <div class="modal" id="modalseguro" tabindex="-1"aria-labelledby="modalseguro" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Eliminar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Seguro que quieres eliminar el platillo </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Si</button>
        </div>
      </div>
    </div>
  </div>




  <div class="modal" id="modalGuardar" tabindex="-1"aria-labelledby="modalGuardar" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Guardar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Quieres Guardar el Platillo</p>
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