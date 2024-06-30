<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $mentor = $_POST['mentor'];
    $hora = $_POST['horas'];
    
    // Aquí puedes realizar el procesamiento para inscribir al usuario con el mentor y la hora seleccionados
    // Por ejemplo, guardar los datos en la base de datos, enviar correos, etc.
    
    // Redirigir o mostrar un mensaje de confirmación
    echo "Inscripción realizada con éxito para el mentor $mentor en la hora $hora.";
}
?>
