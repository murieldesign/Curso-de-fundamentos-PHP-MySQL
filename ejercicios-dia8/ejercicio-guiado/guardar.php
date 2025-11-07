

<?php 
include(__DIR__ . "/conexion.php");

// Recoger los datos del formulario
$nombre = trim($_POST['nombre'] ?? '');
$email = trim($_POST['email'] ?? '');

if ($nombre && $email) {
    // Evitar inyección de SQL
    $nombre = $conexion->real_escape_string($nombre);
    $email = $conexion->real_escape_string($email);

    // Sentencia SQL
    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";

    // Ejecutar y verificar el resultado
    if ($conexion->query($sql)) {
        echo "✅ Registro guardado con éxito.";
    } else {
        echo "❌ Error al guardar: " . $conexion->error;
    }
} else {
    echo "⚠️ Todos los campos son obligatorios.";
}
?>
