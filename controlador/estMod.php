<?php

include '../clases/conexion.php';
include '../clases/estudiante.php';

$objConexion = new conexion();
$conexion = $objConexion->conectar();

$objEstudiante = new Estudiante();

$date = date('Y/m/d', strtotime($_POST['fechaNacimiento']));

$objEstudiante->actualizarEstudianteId($conexion, $_POST['id'], $_POST['nombre'], $_POST['apellido'], $date, $_POST['idMunicipio'], $_POST['idAcudiente']);

echo "<br><a href='../menu.php'>Volver al menú</a>";
