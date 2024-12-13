


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio de sesion </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800&family=Rubik:ital,wght@0,300..900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800&family=Rubik:ital,wght@0,300..900&display=swap" rel="stylesheet">
    </noscript>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    </noscript>
    <link rel="stylesheet" href="./css/inicio.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="./css/mediaquery.css" media="print" onload="this.media='all'">
</head>
<body>
   <section class="main">
    <div id="imagen">
        <img   src="./img/aa.webp" alt="">
    </div>
    <div class="form-side">
        <div class="form-container">
            <h2>Ya tienes una cuenta?</h2>
            <div class="line-container">
                <div class="line"></div>
                <div class="circle"></div>
                <div class="line"></div>
            </div>
            
            <form action="../php/login.php" method="post">
                <label for="email">Correo Electronico</label>
                <div class="input-container">
                    <i class="fa fa-user"></i>
                    <input name="txtEmail" required type="email" id="email" placeholder="Introduce tu Email">
                </div>
                
                <label for="password">Contraseña</label>
                <div class="input-container">
                    <i class="fa fa-lock"></i>
                    <input name="txtPassword" required type="password" id="password" placeholder="Introduce tu contraseña">
                </div>
                
                <button   type="submit" class="create-account"  onclick="location.href='reservaciones.html'" >Iniciar</button>
            </form>


            <div class="line-container">
                <div class="line"></div>
                <div class="circle"></div>
                <div class="line"></div>
            </div>
            
            <div class="footer">
                <span>Olvidaste tu contraseña ?<a href="#">Cambiar de Contraseña</a></span> <br>
                <span>No tienes cuenta ?<a href="registro.html">Registrate</a></span>
               
            </div>

            <button type="submit" class="atras" onclick="location.href='index.html'">Atras</button>
        </div>
    </div>








   </section>
       
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
if(isset($_GET['error'])){






?>
   <script>



Swal.fire({
  icon: "error",
  title: "Error",
  text: "Datos No validos",
  
});
    
   </script>


<?php 



}
?>
</body>
</html>
    