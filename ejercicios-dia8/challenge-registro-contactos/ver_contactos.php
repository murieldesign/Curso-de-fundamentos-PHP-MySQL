<?php
include("conexion.php");

$resultado = $conexion->query("SELECT * FROM contactos ORDER BY fecha DESC");

echo "<h2>Contactos registrados</h2>";
echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Email</th><th>Mensaje</th><th>Fecha</th></tr>";

while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($fila['nombre']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['email']) . "</td>";
    echo "<td>" . nl2br(htmlspecialchars($fila['mensaje'])) . "</td>";
    echo "<td>" . $fila['fecha'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
