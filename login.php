<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('Location: index.php');
    }  
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="styles/login.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Iniciar Sesión</title>
    </head>
    <body class="vh-100 overflow-hidden">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-primary">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand fs-4" href="index.php">
                    <img src="img/logo.png" height="30" width="30"/>
                    <span class="align-middle ms-5">Iniciar Sesión</span>
                </a>
                <!-- Toggle Btn -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- Sidebar -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a class="navbar-brand fs-4" href="index.php">
                            <img src="img/logo.png" height="30" width="30">
                            <span class="align-middle h5 ms-5"><strong>Iniciar Sesión</strong></span>
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <!-- Sidebar Body -->
                    <div class="offcanvas-body d-flex flex-column flex-md-row">
                        <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
                            <li class="nav-item mx-2">
                                <a class="nav-link" aria-current="page" href="nosotros.html">Nosotros</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="mision.html">Misión</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="vision.html">Visión</a>
                            </li>
                        </ul>
                        <!-- Login -->
                        <div class="d-flex justify-content-center align-items-center gap-3">
                            <a class="text-black text-decoration-none px-3 py-1 rounded-4" href="index.php" style="background-color: #ffde59;">
                                Registrarse
                                <i class="bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <form class="row px-4 py-5 justify-content-center" id="contenido" method="post" action="php/iniciar.php">
                <div class="row col-lg-7 col-md-9 justify-content-center">
                    <img class="col-4" src="img/user.png" alt="" id="login-img">
                </div>
                <div class="row col-lg-9 col-md-11 justify-content-center mt-5">
                    <div action="" class="row col-6">
                        <label for="correo" class="col-lg-3 col-md-3 col-sm-12 mt-3 me-4 text-white"><strong>Correo:</strong></label>
                        <div class="col-lg-8 col-md-7 col-sm-12">
                            <input type="email" class="form-control border-0 rounded-5 mt-3" style="background-color: #ffde59;" name="correo" required>
                        </div>
                        <label for="pass" class="col-lg-3 col-md-3 col-sm-12 mt-3 me-4 text-white"><strong>Contraseña:</strong></label>
                        <div class="col-lg-8 col-md-7 col-sm-12">
                            <input type="password" class="form-control col-md-3 col-sm-12 border-0 rounded-5 mt-3" style="background-color: #ffde59;" name="pass" required>
                        </div>
                    </div>
                    <a class="col-12 justify-content-center my-5 text-white" href="recuperar.html" style="text-align: center;">¿Has olvidado tu contraseña?</a>
                </div>
                <div class="row col-6">
                    <div class="row justify-content-center align-items-center my-3">    
                        <a href="index.php" class="col-4 col-lg-4 col-md-8 col-sm-12 text-black text-decoration-none btn-registro">
                            <i class="bi-arrow-left align-items-center reg-arrow" style="margin-right: 5px;"></i>
                            <span class="acep_canc">Cancelar</span>
                        </a>
                        <button class="col-4 col-lg-4 col-md-8 col-sm-12 text-black text-decoration-none btn-registro" style="border:0;">
                            <span class="acep_canc">Aceptar</span>
                            <i class="bi-arrow-right align-items-center reg-arrow"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>