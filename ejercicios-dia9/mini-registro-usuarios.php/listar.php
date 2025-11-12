<?php
include("conexion.php");

$stmt = $pdo->query("SELECT * FROM usuarios ORDER BY fecha_registro DESC");

echo "<h2>Lista de Usuarios</h2>";
echo "<table border='1' cellpadding='6'>
<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Fecha</th><th>Acciones</th></tr>";

while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>
            <td>{$fila['id']}</td>
            <td>{$fila['nombre']}</td>
            <td>{$fila['email']}</td>
            <td>{$fila['fecha_registro']}</td>
            <td>
                <a href='editar.php?id={$fila['id']}'>Editar</a> |
                <a href='eliminar.php?id={$fila['id']}'>Eliminar</a>
            </td>
          </tr>";
}

echo "</table>";
?>

