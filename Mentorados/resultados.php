<?php
    session_start();
    $materia = $_POST['materia'];
    $horario = $_POST['horario'];
    $conexion = mysqli_connect("localhost", "root", "", "fepi");
    //if($horario == "matutino"){
        // SELECT hor.mentor, hor.hora FROM mentor_hora hor LEFT JOIN (SELECT me.correo, ma.materia FROM mentores me LEFT JOIN mentor_materia ma ON me.correo = ma.mentor WHERE ma.id = 2) coma ON hor.mentor = coma.correo;
    //}

    if($horario == "matutino"){
        $hora = "hora < 13";
    }else{
        $hora = "hora > 12";
    }

    $sql = "SELECT coma.nombre, coma.telefono, hor.mentor, GROUP_CONCAT(hor.hora ORDER BY hor.hora) AS horas 
                FROM mentor_hora hor RIGHT JOIN (SELECT me.nombre, me.telefono, me.correo, ma.materia FROM mentores me LEFT JOIN mentor_materia ma ON me.correo = ma.mentor WHERE ma.materia = $materia) coma ON hor.mentor = coma.correo WHERE hor.$hora 
            GROUP BY hor.mentor;";

    $result = $conexion->query($sql);

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="styles/resultados.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js'></script>
        <title>Resultados</title>
    </head>
    <body class="vh-100">
        <nav class="navbar navbar-expand-lg navbar-primary">
            <div class="container">
                <a class="navbar-brand fs-4" href="../index.php">
                    <img src="../img/logo.png" height="30" width="30"/>
                    <span class="align-middle ms-5">Polimentor</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a class="navbar-brand fs-4" href="../index.php">
                            <img src="../img/logo.png" height="30" width="30">
                            <span class="align-middle h5 ms-5"><strong>Polimentor</strong></span>
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    
                    <div class="offcanvas-body d-flex flex-column flex-lg-row">
                        <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
                            <li class="nav-item mx-2">
                                <a class="nav-link rounded-5 px-2" style="background-color: #ffde59;" aria-current="page" href="calendario.php">Mis Mentorías</a>
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
            <div class="row px-4 py-5 justify-content-center" id="contenido">
                <?php
                    if ($result->num_rows > 0) {
                        ?>
                            <div class="row col-12 justify-content-center mb-5">
                                <a href="" class="col-2 rounded-5" id="lista_rep">
                                    <i class="bi bi-play me-2"></i>Materia
                                </a>
                            </div>
                            <div class="row col-9 justify-content-between mb-3">
                                <div class="col-3">
                                    <h1>Mentor</h1>
                                </div>
                                <div class="col-3">
                                    <h1>Teléfono</h1>
                                </div>
                                <div class="col-3">
                                    <h1>Horario</h1>
                                </div>
                            </div>
                            <div class="row justify-content-center col-3 mb-3"></div>
                        <?php
                        while($row = $result->fetch_assoc()) {
                        ?>
                            <form class="row justify-content-center" action="inscribir.php" method="post">
                                <div class="row col-9 justify-content-between mb-3">
                                    <div class="col-3 celda rounded-2">
                                        <?php echo $row["nombre"]; ?>
                                    </div>
                                    <div class="col-3 celda rounded-2">
                                        <?php echo $row["telefono"]; ?>
                                    </div>
                                        <?php
                                            
                                            $horas_array = explode(",", $row["horas"]);
                                            
                                            echo "<input type='hidden' name='nombre' value='" . $row["nombre"] . "'>"; 
                                            echo "<input type='hidden' name='mentor' value='" . $row["mentor"] . "'>"; 
                                            echo "<input type='hidden' name='materia' value='" . $materia . "'>";
                                            echo "<select class='col-3 celda rounded-2' name='hora' style='font-size: 1.25rem;'>";
                                            foreach ($horas_array as $hora) {
                                                if($horario == "matutino" && $hora < 13){
                                                    echo "<option value='$hora'>$hora</option>";
                                                }else if($horario == "vespertino" && $hora > 12){
                                                    echo "<option value='$hora'>$hora</option>";
                                                }
                                            }
                                            echo "</select>";
                                        ?>
                                </div>
                                <div class="row justify-content-center align-items-center col-3 mb-3">
                                    <button class="col-5 justify-content-center link-light inscribir rounded-5" type="submit" name="submit">
                                        <div class="me-2">Inscribir</div>
                                        <i class="bi bi-caret-right-fill"></i>
                                    </button>
                                </div>
                            </form>

                        <?php
                        }
                    } else {
                    ?>
                        <div class="col-lg-6 col-sm-12" id="calend_title">
                            <h1 class="col-12" style="text-align: center; margin-top: 10%;">No se encontraron Resultados.</h1>
                            <p style="color: white; margin-top: 20%; margin-bottom: 20%; padding-left: 7%;">Prueba cambiando los criterios de búsqueda.</p>
                        </div>
                        <div class="row col-lg-6 col-sm-12 justify-content-center"></div>
                    <?php
                    }
                    //Terminar conexión
                    $conexion->close();
                    ?>  
                        <div class="row col-12 justify-content-center mt-3">
                            <a href="buscar.php" class="col-lg-3 col-md-8 col-sm-12 text-black align-self-end text-decoration-none btn-registro">
                                <i class="bi bi-arrow-left reg-arrow" style="background-color: #ffde59;"></i>
                                <span>Regresar</span>
                            </a>
                        </div>
            </div>
        </div>
        <script src="js/calendario.js"></script>
    </body>
</html>