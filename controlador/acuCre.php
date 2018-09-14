<?php

include '../clases/conexion.php';
include '../clases/acudiente.php';

$objConexion = new conexion();
$conexion = $objConexion->conectar();

$objAcudiente = new Acudiente();

$date = date('Y/m/d', strtotime($_POST['fechaNacimiento']));

$objAcudiente->registrar($conexion, $_POST['nombre'], $_POST['apellido'], $date, $_POST['telefono'], $_POST['direccion'], $_POST['idMunicipio']);

echo "<br><a href='../menu.php'>Volver al menú</a>";
