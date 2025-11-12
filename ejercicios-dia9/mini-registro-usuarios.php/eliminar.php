<?php
include("conexion.php");

$id = $_GET['id'] ?? 0;

if ($id) {
    $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
    $stmt->execute([':id' => $id]);
    echo "🗑️ Usuario eliminado correctamente.<br><a href='listar.php'>Volver</a>";
} else {
    echo "⚠️ ID no válido.";
}
?>

