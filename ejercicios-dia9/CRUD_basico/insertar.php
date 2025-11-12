<?php
// insertar.php
include("conexion_PDO.php"); // Reutiliza la conexión

// Recoger y limpiar datos
$nombre = trim($_POST['nombre']);
$email = trim($_POST['email']);

// Validar campos
if ($nombre && $email) {
    // Insertar registro
    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
    if (mysqli_query($conexion, $sql)) {
        echo "✅ Usuario agregado correctamente.";
    } else {
        echo "❌ Error al insertar: " . mysqli_error($conexion);
    }
} else {
    echo "⚠️ Todos los campos son obligatorios.";
}
?>