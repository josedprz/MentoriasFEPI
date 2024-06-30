<?php
    // Conexion a base de datos
    $conexion = mysqli_connect("localhost", "root", "", "fepi");

    $correo = trim($_POST['correo']);
    $nombre = trim($_POST['nombre']);
    $semestre = trim($_POST['semestre']);
    $telefono = trim($_POST['telefono']);
    $apellidos = trim($_POST['apellidos']);
    $carrera = trim($_POST['carrera']);

    // Verificar si el correo ya está registrado

    $query = "SELECT * FROM mentorados WHERE correo = '$correo'";
    $result = mysqli_query($conexion, $query);
    if(mysqli_num_rows($result) > 0){
        echo "El correo ya está registrado.<br>";
        echo "<a href='../mentorado.html'>Regresar</a>";
        exit();
    }else{
        $query_mentorados = "INSERT INTO mentorados (correo, nombre, apellidos, telefono, semestre, carrera) 
                        VALUES ('$correo', '$nombre', '$apellidos', '$telefono', '$semestre', '$carrera')";
        $result = mysqli_query($conexion, $query_mentorados);
    }
    
    $conexion->close();
?>