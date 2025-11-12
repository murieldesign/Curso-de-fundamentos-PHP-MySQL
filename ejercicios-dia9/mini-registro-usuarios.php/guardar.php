<?php
include("conexion.php");

$nombre = trim($_POST['nombre']);
$email = trim($_POST['email']);

if ($nombre && $email) {
    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email) VALUES (:nombre, :email)");
    $stmt->execute([':nombre' => $nombre, ':email' => $email]);
    echo "✅ Usuario registrado correctamente.<br><a href='listar.php'>Ver lista</a>";
} else {
    echo "⚠️ Todos los campos son obligatorios.";
}
?>
