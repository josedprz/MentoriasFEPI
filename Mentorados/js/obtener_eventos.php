<?php
session_start();
$materias = [
    1 => "Matematicas Avanzadas",
    2 => "Formulación y Evaluacion de Proyectos Informaticos",
    3 => "Arquitectura de Computadoras",
    4 => "Redes de Computadoras",
];

$conexion = mysqli_connect("localhost", "root", "", "fepi");
$correo = $_SESSION['user'];
$query = "SELECT * FROM asesorias WHERE asesorias.mentorado = '$correo'";
$result = mysqli_query($conexion, $query);

$events = array();

while($row = mysqli_fetch_assoc($result)) {
    $events[] = array(
        'title' => $materias[$row['materia']],
        'start' => '2024-06-03T' . str_pad($row['hora'], 2, '0', STR_PAD_LEFT) . ':00:00',
        'end' => '2024-06-07T' . str_pad($row['hora'] + 1, 2, '0', STR_PAD_LEFT) . ':00:00',
    );
    $events[] = array(
        'title' => $materias[$row['materia']],
        'start' => '2024-06-10T' . str_pad($row['hora'], 2, '0', STR_PAD_LEFT) . ':00:00',
        'end' => '2024-06-14T' . str_pad($row['hora'] + 1, 2, '0', STR_PAD_LEFT) . ':00:00',
    );
    $events[] = array(
        'title' => $materias[$row['materia']],
        'start' => '2024-06-17T' . str_pad($row['hora'], 2, '0', STR_PAD_LEFT) . ':00:00',
        'end' => '2024-06-21T' . str_pad($row['hora'] + 1, 2, '0', STR_PAD_LEFT) . ':00:00',
    );
    $events[] = array(
        'title' => $materias[$row['materia']],
        'start' => '2024-06-24T' . str_pad($row['hora'], 2, '0', STR_PAD_LEFT) . ':00:00',
        'end' => '2024-06-28T' . str_pad($row['hora'] + 1, 2, '0', STR_PAD_LEFT) . ':00:00',
    );
}
// imprimir events

header('Content-Type: application/json');
echo json_encode($events);

mysqli_free_result($result);
mysqli_close($conexion);
?>
