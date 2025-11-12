<?php
include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];

$stmt = $pdo->prepare("UPDATE usuarios SET nombre = :nombre, email = :email WHERE id = :id");
$stmt->execute([':nombre' => $nombre, ':email' => $email, ':id' => $id]);

echo "✅ Usuario actualizado correctamente.<br><a href='listar.php'>Volver</a>";
?>
