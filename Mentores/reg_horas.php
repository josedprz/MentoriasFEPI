<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="styles/reg_horas.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Registrar horas</title>
    </head>
    <body class="vh-100">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-primary">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand fs-4" href="../index.php">
                    <img src="../img/logo.png" height="30" width="30"/>
                    <span class="align-middle ms-5">Polimentor</span>
                </a>
                <!-- Toggle Btn -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- Sidebar -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a class="navbar-brand fs-4" href="../index.php">
                            <img src="../img/logo.png" height="30" width="30">
                            <span class="align-middle h5 ms-5"><strong>Polimentor</strong></span>
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <!-- Sidebar Body -->
                    <div class="offcanvas-body d-flex flex-column flex-lg-row">
                        <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
                            <li class="nav-item mx-2">
                                <a class="nav-link" aria-current="page" href="calendario.php">Mis Mentorías</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="mentorados.php">Mentorados</a>
                            </li>
                            <li class="nav-item mx-2 rounded-5 px-2" style="background-color: #ffde59;">
                                <a class="nav-link" href="#">Mis Horas</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="material.php">Material de Apoyo</a>
                            </li>
                        </ul>
                        <!-- Login -->
                        <div class="d-flex justify-content-center align-items-center gap-3">
                            <a class="text-black text-decoration-none px-3 py-1 rounded-4" href="#" style="background-color: #ffde59;">
                                <?php echo $_SESSION['nombre']; 
                                ?>
                            </a>
                            <a class="text-light text-decoration-none px-3 py-1 rounded-4" href="cerrar.php"  style="background-color: rgb(227, 68, 68)">
                                Cerrar Sesión
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <form class="row px-4 py-5 justify-content-center" id="contenido">
                <div class="row col-lg-6 col-sm-12 justify-content-center">
                    <label class="col-8 mb-5 mt-4" for="num_horas">
                        <h1 style="text-align: center;">Número de horas</h1>
                    </label>
                    <input class="col-8 horas justify-content-center d-flex align-self-end rounded-2 border border-2 border-secondary" type="number" style="color:#4b4b4b;">
                </div>
                <div class=" row col-lg-6 col-sm-12 justify-content-center">
                    <label class="col-8 mb-5 mt-4" for="correo">
                        <h1 style="text-align: center;">Mentorado</h1>
                    </label>
                    <input class="col-8 horas align-self-end rounded-2 border border-2 border-secondary" type="email" placeholder="Correo" required>
                </div>
                <a href="horas.php" class="col-lg-3 col-md-8 col-sm-12 text-black align-self-end text-decoration-none btn-registro" style="border: 0;">
                    <i class="bi-arrow-left reg-arrow" style="background-color: #ffde59;"></i>
                    <span>Cancelar</span>
                </a>
                <button class="col-lg-3 col-md-8 col-sm-12 text-black align-self-end text-decoration-none btn-registro" style="border: 0;">
                    <span>Aceptar</span>
                    <i class="bi-arrow-right reg-arrow" style="background-color: #ffde59;"></i>
                </button>
            </form>
        </div>
        <script src="js/calendario.js"></script>
    </body>
</html>