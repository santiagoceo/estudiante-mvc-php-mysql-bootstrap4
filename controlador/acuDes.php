<?php

include '../clases/conexion.php';
include '../clases/acudiente.php';

$objConexion = new conexion();
$conexion = $objConexion->conectar();

$objAcudiente = new Acudiente();

$objAcudiente->eliminarAcudienteId($conexion, $_POST['id']);

echo "<br><a href='../menu.php'>Volver al menú</a>";
