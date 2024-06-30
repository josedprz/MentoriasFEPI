<?php
    session_start();
    $conexion = mysqli_connect("localhost", "root", "", "fepi");

    $correo = trim($_POST['correo']);
    $nombre = trim($_POST['nombre']);
    $semestre = trim($_POST['semestre']);
    $telefono = trim($_POST['telefono']);
    $apellidos = trim($_POST['apellidos']);
    $carrera = trim($_POST['carrera']);
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
        $query_mentorados = "INSERT INTO mentorados (correo, nombre, apellidos, telefono, semestre, carrera, contra) 
                        VALUES ('$correo', '$nombre', '$apellidos', '$telefono', '$semestre', '$carrera', '$contra')";
        $result = mysqli_query($conexion, $query_mentorados);
        
        $query_nombre_usuario = "SELECT nombre FROM mentorados WHERE correo = '$correo'";
        $result = mysqli_query($conexion, $query_nombre_usuario);
        $nombre_usuario = $result->fetch_assoc();
        $_SESSION['nombre'] = $nombre_usuario['nombre'];
        header("Location: ../Mentorados/calendario.php");
    }
    
    $conexion->close();
?>