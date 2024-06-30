<?php
    session_start();
    $conexion = mysqli_connect("localhost", "root", "", "fepi");

    $correo = trim($_POST['correo']);
    $nombre = trim($_POST['nombre']);
    $semestre = trim($_POST['semestre']);
    $telefono = trim($_POST['telefono']);
    $apellidos = trim($_POST['apellidos']);
    $carrera = trim($_POST['carrera']);
    $materias = $_POST['materias'];
    $horarios = $_POST['horarios'];
    $contra = trim($_POST['pass']);
    

    $query = "SELECT * FROM mentorados WHERE correo = '$correo'";
    $query2 = "SELECT * FROM mentores WHERE correo = '$correo'";
    $result = mysqli_query($conexion, $query);
    $result2 = mysqli_query($conexion, $query2);
    if(mysqli_num_rows($result) > 0 || mysqli_num_rows($result2) > 0){
        echo "El correo ya está registrado.<br>";
        echo "<a href='../login.php'>Iniciar Sesión</a>";
        exit();
    }else{
        $_SESSION['user'] = $correo;
        $query_mentores = "INSERT INTO mentores (correo, nombre, apellidos, telefono, semestre, carrera, contra) 
                        VALUES ('$correo', '$nombre', '$apellidos', '$telefono', '$semestre', '$carrera', '$contra')";
        $result = mysqli_query($conexion, $query_mentores);
        //query tabla mentor_materia
        foreach($materias as $materia){
            $query_mentor_materia = "INSERT INTO mentor_materia (id, materia, mentor) 
                                    VALUES (NULL, '$materia', '$correo')";
            $result = mysqli_query($conexion, $query_mentor_materia);
        }
        //query tabla mentor_hora
        foreach($horarios as $hora){
            $query_mentor_hora = "INSERT INTO mentor_hora (id, mentor, hora) 
                                    VALUES (NULL, '$correo', '$hora')";
            $result = mysqli_query($conexion, $query_mentor_hora);
        }
        $query_nombre_usuario = "SELECT nombre FROM mentores WHERE correo = '$correo'";
        $result = mysqli_query($conexion, $query_nombre_usuario);
        $nombre_usuario = $result->fetch_assoc();
        $_SESSION['nombre'] = $nombre_usuario['nombre'];
        header("Location: ../Mentores/calendario.php");
    }
    $conexion->close();
?>