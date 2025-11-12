<?php
include("conexion_PDO.php");

$id = 1; // ID de ejemplo
$nuevo_email = "nuevo@email.com";

$sql = "UPDATE usuarios SET email='$nuevo_email' WHERE id=$id";

if (mysqli_query($conexion, $sql)) {
    echo "✅ Usuario actualizado correctamente.";
} else {
    echo "❌ Error al actualizar: " . mysqli_error($conexion);
}
?>
