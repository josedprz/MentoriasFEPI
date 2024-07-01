<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="styles/index.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Poli Mentor</title>
        <script src="js/jquery-3.7.1.js"></script>
    </head>
    <body class="vh-100">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm navbar-primary">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand fs-4" href="index.php">
                    <img src="img/logo.png" height="30" width="30"/>
                    <span class="align-middle ms-5">Polimentor</span>
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
                            <span class="align-middle h5 ms-5"><strong>Polimentor</strong></span>
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <!-- Sidebar Body -->
                    <div class="offcanvas-body d-flex flex-column flex-sm-row">
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
                            <a class="text-black text-decoration-none px-3 py-1 rounded-4" href="login.php" style="background-color: #ffde59;">
                                Iniciar Sesión
                                <i class="bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row px-4 py-5" id="contenido">
                <span class="row col-lg-6 col-sm-12">
                    <span class="row col-3 px-4 py-1 my-3" style="max-height:50px;">
                        <p class="rounded-4" style="background-color: #ffde59; text-align:center;display:flex;align-items:center;justify-content:center;">
                            Polimentor
                        </p>
                    </span>
                    <h1 class="col-12 text-white my-4" style="font-weight:bold;">Mentorias flexibles para tus metas.</h1>
                    <p class="col-12 text-white my-3" id="descrip">Polimentor es una iniciativa para ofrecer a alumnos de nuevo ingreso la oportunidad de mejorar su desempeño académico a través de mentorías impartidas por alumnos de últimos semestres, y a la vez que ellos puedan liberar horas del servicio social.</p>
                    <div class="row justify-content-center align-items-center align-self-end my-5">    
                        <a href="mentorado.html" class="col-4 col-lg-4 col-md-8 col-sm-12 align-self-end text-black text-decoration-none btn-registro">
                            <span>Registrarse como Mentorado</span>
                            <i class="bi-arrow-right reg-arrow" style="background-color: #ffde59;"></i>
                        </a>
                        <a href="mentor.html" class="col-4 col-lg-4 col-md-8 col-sm-12 align-self-end text-black text-decoration-none btn-registro">
                            <span>Registrarse como Mentor</span>
                            <i class="bi-arrow-right align-items-center reg-arrow" style="background-color: #ffde59;"></i>
                        </a>
                    </div>
                </span>
                <img class="col-lg-6 col-sm-12" id="cont-img" src="img/image.png" alt="">
            </div>
            <div class="row px-4 py-5 justify-content-center" id="continuacion">
                <h1 class="col-12 mb-5 justify-content-center" style="text-align: center; color: #6c1d45;"><strong>Figuras Clave</strong></h1>
                <div class="col-4 tarjetas">
                    <h3 class="card_title">Mentores</h3>
                    <img class="my-4" src="img/mentor.jpg" alt="">
                    <p>Estudiantes de semestres más avanzados de la ESCOM, que se forman como mentores.</p>
                </div>
                <div class="col-2"></div>
                <div class="col-4 tarjetas">
                    <h3 class="card_title">Mentorados</h3>
                    <img class="my-4" src="img/skill.jpg" alt="">
                    <p class="">Estudiantes de recién ingreso y hasta  tercer semestre de la ESCOM, con los cuales se llevará a cabo el ejercicio mentoral.</p>
                </div>
                <div class="col-8 mt-5" style="text-align: center; color:white;">Para mayor información acudir a la oficina de servicio social en el Departamento de Extensiones y Apoyos Educativos.</div>
            </div>
        </div>
    </body>
</html>