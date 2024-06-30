<?php
    // Conexion a base de datos
    $conexion = mysqli_connect("localhost", "root", "", "fepi");

    $correo = trim($_POST['correo']);
    $nombre = trim($_POST['nombre']);
    $semestre = trim($_POST['semestre']);
    $telefono = trim($_POST['telefono']);
    $apellidos = trim($_POST['apellidos']);
    $carrera = trim($_POST['carrera']);
    $materias = $_POST['materias'];
    $horarios = $_POST['horarios'];
    

    $query = "SELECT * FROM mentores WHERE correo = '$correo'";
    $result = mysqli_query($conexion, $query);
    if(mysqli_num_rows($result) > 0){
        echo "El correo ya está registrado.<br>";
        echo "<a href='../mentor.html'>Regresar</a>";
        exit();
    }else{
        $query_mentores = "INSERT INTO mentores (correo, nombre, apellidos, telefono, semestre, carrera) 
                        VALUES ('$correo', '$nombre', '$apellidos', '$telefono', '$semestre', '$carrera')";
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
    }
    $conexion->close();
?>