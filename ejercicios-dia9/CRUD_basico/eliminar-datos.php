<?php
include("conexion_PDO.php");

$id = 7; // ID a eliminar

$sql = "DELETE FROM usuarios WHERE id=$id";

if (mysqli_query($conexion, $sql)) {
    echo "🗑️ Usuario eliminado correctamente.";
} else {
    echo "❌ Error al eliminar: " . mysqli_error($conexion);
}
?>
