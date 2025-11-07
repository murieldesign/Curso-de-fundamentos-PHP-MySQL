
<?php
$conexion = new mysqli("localhost", "root", "", "curso_php");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa.";
}
?>
