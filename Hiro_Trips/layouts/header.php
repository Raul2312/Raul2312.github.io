<header class="pt-4 " >
        <nav class="navbar navbar-expand-lg " >
            <div class="container-fluid">
                <a href="" class="navbar-brand">Dashboard  Hiro Trips</a>
                

                <div class="collapse navbar-collapse justify-content-end">

                    <ul class="navbar-nav">

                        <li class="navbar-item mx-3">
                            <button type="button" class="btn btn-light position-relative pt-3">
                                <i class="bi bi-bell"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                  99+
                                  <span class="visually-hidden">unread messages</span>
                                </span>
                              </button>


                        </li>

                        <li class="navbar-item mx-2">
                            <img style="width: 45px;height: 45px; border-radius: 50%; border: 3px solid rgb(24, 19, 71);"  src="./img/fotoperfil.jpg" alt="">
                        </li>


                        <li class="navbar-item dropdown mx-3">
                                <a href="" class="nav-link dropdown-toggle" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   <?php echo $user_data['NOMBRE'].''.$user_data['AP_PATERNO'] ;?> 
                            </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                    <li>
                                        <a href="" class="dropdown-item">
                                            
                                            <i class="bi bi-person"></i>&nbsp;&nbsp; 
                                            Perfil
                                        </a>
                                    </li>

                                    <li>
                                            <hr class="dropdown-divider">
                                     </li>

                                    <li>
                                         <a href=".././php/cerrar_sesion.php" class="dropdown-item ">
                                            <i class="bi bi-box-arrow-in-right"></i>&nbsp;&nbsp; 
                                            Cerrar Sesion
                                        </a>
                                     </li>


                                </ul>
                        </li>




                    </ul>
                       

                </div>



            </div>
        </nav>
    </header>