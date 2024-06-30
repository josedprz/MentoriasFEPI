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
        <link rel="stylesheet" href="styles/mentores.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js'></script>
        <title>Validar Horas</title>
    </head>
    <body class="vh-100 overflow-hidden">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm navbar-primary">
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
                    <div class="offcanvas-body d-flex flex-column flex-sm-row">
                        <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
                            <li class="nav-item mx-2">
                                <a class="nav-link" aria-current="page" href="calendario.php">Mis Mentorías</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="mentores.php">Mis Mentores</a>
                            </li>
                            <li class="nav-item mx-2 rounded-5 px-2" style="background-color: #ffde59;">
                                <a class="nav-link" href="horas.php">Validar Horas</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="material.php">Material de Apoyo</a>
                            </li>
                        </ul>
                        <!-- Login -->
                        <div class="d-flex justify-content-center align-items-center gap-3">
                            <a class="text-black text-decoration-none px-3 py-1 rounded-4" href="login.php" style="background-color: #ffde59;">
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
            <div class="row px-4 justify-content-center" id="contenido" style="padding-top: 4%; padding-bottom: 10%;">
                <div class="col-5 justify-content-center mb-5 mt-5">
                    <h1>Número de Horas</h1>
                </div>
                <div class="col-5 justify-content-center mb-5 mt-5">
                    <h1>Mentor</h1>
                </div>
                <div class="col-2 justify-content-center mb-5 mt-5"></div>

                <form class="row col-12 justify-content-between mt-5 mb-3">
                    <div class="row col-5 justify-content-center">
                        <input type="number" class="col-8 celda rounded-2" value="1" style="border: 0; font-size: 1.5em;">
                    </div>
                    <div class="row col-5 justify-content-between">
                        <select class="col-5 celda rounded-2" name="nombre" id="">
                            <option value="">Juan</option>
                            <option value="">Pedro</option>
                            <option value="">María</option>
                            <option value="">Jesús</option>
                        </select>
                        <select class="col-5 celda rounded-2" name="materia" id="">
                            <option value="">Matemáticas Avanzadas</option>
                            <option value="">Formulación y Evaluación de  Proyectos Informáticos</option>
                            <option value="">Arquitectura de Computadoras</option>
                        </select>
                    </div>
                    <div class="row col-2 justify-content-center align-items-center">
                        <button class="col-4" style="background-color: #ffde5900; border: 0;">
                            <i class="bi bi-check-circle-fill link-warning" style="font-size: 2.5rem;"></i>
                        </button>
                    </div>
                </form>
                <!--
                <div class="col-lg-6 col-sm-12" id="calend_title">
                    <h1 class="col-12" style="text-align: center; margin-top: 10%;">No tienes Mentorados</h1>
                    <p style="color: white; margin-top: 20%; margin-bottom: 20%; padding-left: 7%;">Prueba actualizando tus materias para que mentorados se vean atraidos a tu perfil. <br> <br>
                        Tambien puedes actualizar tu horario para tener mayor posibilidad de coincidencia.</p>
                </div>
                <div class="row col-lg-6 col-sm-12 justify-content-center"></div>
                -->
            </div>
        </div>
        <script src="js/calendario.js"></script>
    </body>
</html>