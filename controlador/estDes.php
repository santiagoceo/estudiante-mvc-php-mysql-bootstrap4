<?php

include '../clases/conexion.php';
include '../clases/estudiante.php';

$objConexion = new conexion();
$conexion = $objConexion->conectar();

$objEstudiante = new Estudiante();

$objEstudiante->eliminarEstudianteId($conexion, $_POST['id']);

echo "<br><a href='../menu.php'>Volver al menú</a>";
