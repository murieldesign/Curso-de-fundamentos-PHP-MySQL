<?php
include("conexion.php");

// Recogemos y limpiamos los datos
$nombre = trim($_POST['nombre']);
$email = trim($_POST['email']);
$mensaje = trim($_POST['mensaje']);

// Validación
if ($nombre && $email && $mensaje) {
    $nombre = $conexion->real_escape_string($nombre);
    $email = $conexion->real_escape_string($email);
    $mensaje = $conexion->real_escape_string($mensaje);

    $sql = "INSERT INTO contactos (nombre, email, mensaje) 
            VALUES ('$nombre', '$email', '$mensaje')";

    if ($conexion->query($sql)) {
        echo "<p>Contacto guardado correctamente.</p>";
    } else {
        echo "<p>Error al guardar: " . $conexion->error . "</p>";
    }
} else {
    echo "<p>Todos los campos son obligatorios.</p>";
}
?>
<a href='ver_contactos.php'>Ver todos los contactos</a>
