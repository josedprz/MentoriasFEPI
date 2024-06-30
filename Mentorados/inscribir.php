<?php
    session_start();

    $conexion = mysqli_connect("localhost", "root", "", "fepi");
    $nombre_mentor = $_POST['nombre'];
    $mentor = $_POST['mentor'];
    $materia = $_POST['materia'];
    $hora = $_POST['hora'];

    //Verificar si el mentorado ya está inscrito en esa hora
    $query_verifica = "SELECT * FROM asesorias WHERE mentorado = '" . $_SESSION['user'] . "' AND hora = '$hora'";
    $result = mysqli_query($conexion, $query_verifica);
    if(mysqli_num_rows($result) > 0){
        echo "Ya tienes una asesoría en ese horario.";
        echo "<a href='buscar.php'>Regresar</a>";
        exit();
    }else{
        /*
        $query_verifica = "SELECT * FROM asesorias WHERE mentor = '$mentor' AND hora = '$hora'";
        $result = mysqli_query($conexion, $query_verifica);
        if(mysqli_num_rows($result) > 0){
            echo "El mentor ya tiene una asesoría en ese horario.";
            echo "<a href='buscar.php'>Regresar</a>";
            exit();
        }
        */
        $query = "INSERT INTO asesorias (mentor, mentorado, materia, hora, n_mentor, n_mentorado) 
                VALUES ('$mentor', '" . $_SESSION['user'] . "', '$materia', '$hora', '$nombre_mentor', '" . $_SESSION['nombre'] . "')";

        $result = mysqli_query($conexion, $query);

        echo "Inscripción realizada con éxito para el mentor <strong>$nombre_mentor</strong> con correo <strong>$mentor</strong> en la hora <strong>$hora.</strong>";   
        echo "<br><a href='calendario.php'>Regresar a Mentorías</a>";
    }
?>
