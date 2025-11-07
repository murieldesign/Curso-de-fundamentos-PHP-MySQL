<?php
$conexion = new mysqli("localhost", "root", "", "curso_php");
if ($conexion->connect_error) {
    die("Error al conectar: " . $conexion->connect_error);
}
?>

