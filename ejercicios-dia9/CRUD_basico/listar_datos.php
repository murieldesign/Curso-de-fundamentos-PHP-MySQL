<?php
include("conexion_PDO.php");

//$resultado = mysqli_query($conexion, "SELECT * FROM usuarios");
$resultado = $pdo->query("SELECT * FROM usuarios");


echo "<table border='1' cellpadding='6'>
<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Fecha</th></tr>";

while ($fila = $resultado->fetch(PDO:FETCH_ASSOC)) {
    echo "<tr>
            <td>{$fila['id']}</td>
            <td>{$fila['nombre']}</td>
            <td>{$fila['email']}</td>
            <td>{$fila['fecha_registro']}</td>
          </tr>";
}

echo "</table>";
?>
