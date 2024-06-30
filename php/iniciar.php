<?php
    $conexion = mysqli_connect("localhost", "root", "", "fepi");
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $query = "SELECT * FROM mentores WHERE correo = '$correo' AND contra = '$pass'";
    $query2 = "SELECT * FROM mentorados WHERE correo = '$correo' AND contra = '$pass'";
    $resultado = mysqli_query($conexion, $query);
    $resultado2 = mysqli_query($conexion, $query2);

    if(mysqli_num_rows($resultado) > 0){
        session_start();
        $_SESSION['user'] = $correo;

        $query_nombre_usuario = "SELECT nombre FROM mentores WHERE correo = '$correo'";
        $result = mysqli_query($conexion, $query_nombre_usuario);
        $nombre_usuario = $result->fetch_assoc();
        $_SESSION['nombre'] = $nombre_usuario['nombre'];

        header("Location: ../Mentores/calendario.php");
    } else if(mysqli_num_rows($resultado2) > 0){
        session_start();
        $_SESSION['user'] = $correo;
        
        $query_nombre_usuario = "SELECT nombre FROM mentorados WHERE correo = '$correo'";
        $result = mysqli_query($conexion, $query_nombre_usuario);
        $nombre_usuario = $result->fetch_assoc();
        $_SESSION['nombre'] = $nombre_usuario['nombre'];

        header("Location: ../Mentorados/calendario.php");
    } else {
        echo "Usuario o contraseña incorrectos.";
        echo "<br><a href='../login.php'>Volver</a>";
    }
?>