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
    <h4>Panel de Administracion de Hiro trips </h4>
    <!--Stats-->
    <div class="row">
        <div class="col-3">
            <div class="card" style="height: 100px;">
                <div class="card-body">

                    <label class="">
                        <i class="bi bi-currency-exchange" style="color: blue;"></i>

                        Total de Ingresos Mensuales

                    </label>
                    <h5 class="h2 text-center">$250,000,000.00 </h5>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="height: 100px;">
                <div class="card-body">

                    <label class="">
                        <i class="bi bi-person-raised-hand" style="color: blue;"></i>


                        Usuario Activos

                    </label>
                    <h5 class="h2 text-center">800</h5>
                </div>
            </div>


        </div>
        <div class="col-3">
            <div class="card" style="height: 100px;">
                <div class="card-body">

                    <label class="">
                        <i class="bi bi-cash-coin" style="color: blue;"></i>



                        Usuario Por Pagar

                    </label>
                    <h5 class="h2 text-center">90 </h5>
                </div>
            </div>


           
        </div>
        <div class="col-3">

            <div class="card" style="height: 100px;">
                <div class="card-body">

                    <label class="">
                        <i class="bi bi-egg-fried" style="color: blue;"></i>



                      Gastos

                    </label>
                    <h5 class="h2 text-center">$900,000 </h5>
                </div>
            </div>

        </div>


    </div>


    <!--Stats-->


     <!--Graficas-->

    <div class="row mt-4">


        <div class="col-6">
            <div class="card" style="height: 300px;">
                <div class="card-header">
                    Ingresos Por mes 

                </div>

                <div class="card-body">
                    <canvas id="chartIngresos"></canvas>
                </div>
                
            </div>


        </div>




        <div class="col-6">

            <div class="card" >
                <div class="card-header"  >
                    Por Destino 

                </div>

                <div class="card-body"  style="height: 500px;" >   
                    <canvas id="chartCategorias" ></canvas> </div>
                
            </div>


        </div>
    </div>



     <!--Graficas-->


</section>



</main>

<!--End Main content-->
    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="./js/script.js"></script>
</body>
</html>