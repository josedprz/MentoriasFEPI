<?php
    session_start();
    $materias = [
        1 => "Matemáticas Avanzadas",
        2 => "Formulación y Evaluación de Proyectos Informáticos",
        3 => "Arquitectura de Computadoras",
        4 => "Redes de Computadoras",
    ];
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
        <title>Mis Mentores</title>
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
                            <li class="nav-item mx-2 rounded-5 px-2" style="background-color: #ffde59;">
                                <a class="nav-link" href="#">Mis Mentores</a>
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
            <div class="row px-4 py-5 justify-content-center" id="contenido">
                <?php
                    $conexion = mysqli_connect("localhost", "root", "", "fepi");
                    $correo = $_SESSION['user'];
                    $query = "SELECT * FROM asesorias WHERE asesorias.mentorado = '$correo'";
                    $result = mysqli_query($conexion, $query);
                    if(mysqli_num_rows($result) > 0){
                        echo "  <div class='row col-12 justify-content-center mb-4'>
                                <h1 class='col-2'>Mentores</h1>
                                </div>
                                <div class='row col-9 justify-content-between mb-3'>
                                    <div class='col-3 header rounded-2'>
                                        Nombre
                                    </div>
                                    <div class='col-3 header rounded-2'>
                                        Materia
                                    </div>
                                    <div class='col-3 header rounded-2'>
                                        Horario
                                    </div>
                                </div>";
                        while($row = $result->fetch_assoc()){
                            echo "<div class='row col-9 justify-content-between mb-3'>";
                            echo "<div class='col-3 celda rounded-2'>" . $row['n_mentor'] . "</div>";
                            echo "<div class='col-3 celda rounded-2'>" . $materias[$row['materia']] . "</div>";
                            echo "<div class='col-3 celda rounded-2'>" . $row['hora'] . "</div>";
                            echo "</div>";
                        }
                    }else{
                        echo "  <div class='col-lg-6 col-sm-12' id='calend_title'>
                                    <h1 class='col-12' style='text-align: center; margin-top: 10%;'>No tienes Mentores</h1>
                                    <p style='color: white; margin-top: 20%; margin-bottom: 7%; padding-left: 7%;'>Prueba actualizando tus materias para que mentorados se vean atraidos a tu perfil. <br> <br>
                                    Tambien puedes actualizar tu horario para tener mayor posibilidad de coincidencia.</p>
                                </div>
                                <div class='row col-lg-6 col-sm-12 justify-content-center'></div>";
                    }
                ?>
                <div class="row col-lg-6 col-sm-12 justify-content-center mt-4" id="calend_title">
                    <a href="" class="col-lg-5 col-md-8 col-sm-12 text-black align-self-end text-decoration-none btn-registro">
                        <span>Actualizar Datos</span>
                        <i class="bi-arrow-right reg-arrow" style="background-color: #ffde59;"></i>
                    </a>
                </div>
            </div>
        </div>
        <script src="js/calendario.js"></script>
    </body>
</html>