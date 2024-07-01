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
        <link rel="stylesheet" href="styles/buscar.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js'></script>
        <title>Buscar</title>
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
                            <li class="nav-item mx-2 rounded-5 px-2" style="background-color: #ffde59;">
                                <a class="nav-link" aria-current="page" href="calendario.php">Mis Mentorías</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="mentores.php">Mis Mentores</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="horas.php">Validar Horas</a>
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
                <!--
                <span class="col-lg-6 col-sm-12">
                    <div id="calendar"></div>
                </span>
                <div class="row col-lg-6 col-sm-12 justify-content-center" id="calend_title">
                    <h1 class="col-12" style="text-align: center;">Mentorías Activas</h1>
                    <a href="" class="col-lg-5 col-md-8 col-sm-12 text-black align-self-end text-decoration-none btn-registro">
                        <span>Actualizar Datos</span>
                        <i class="bi-arrow-right reg-arrow" style="background-color: #ffde59;"></i>
                    </a>
                </div>
                -->
            <form class="row px-4 py-5 justify-content-center" action="resultados.php" method="post" id="contenido">
                <div class="row col-lg-6 col-sm-12 title justify-content-center">
                    <label for="materia">Materia de Intereses</label>
                </div>
                <div class="row col-lg-6 col-sm-12 title justify-content-center">
                    <label for="horario">Horario</label>
                </div>
                <div class="row col-lg-6 col-sm-12 justify-content-center mt-5 mb-5">
                    <select class="col-6 rounded-3" name="materia" id="">
                        <option value="1">Matemáticas Avanzadas</option>
                        <option value="2">Formulación y Evaluación de Proyectos Informáticos</option>
                        <option value="3">Arquitectura de Computadoras</option>
                        <option value="4">Redes de Computadoras</option>
                    </select>
                </div>
                <div class="row col-lg-6 col-sm-12 justify-content-center mt-5 mb-5">
                    <select class="col-6 rounded-3" name="horario" id="">
                        <option value="matutino">Matutino</option>
                        <option value="vespertino">Vespertino</option>
                    </select>
                </div>

                <div class="row col-12 justify-content-center">
                    <button class="col-lg-3 col-md-8 col-sm-12 text-black align-self-end text-decoration-none btn-registro" style="border: 0;">
                        <span>Realizar Búsqueda</span>
                        <i class="bi bi-arrow-right reg-arrow" style="background-color: #ffde59;"></i>
                    </button>
                </div>
            </form>
        </div>
        <script src="js/calendario.js"></script>
    </body>
</html>