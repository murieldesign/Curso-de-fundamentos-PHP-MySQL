<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar y mostrar usuarios en tabla HTML.</title>
</head>
<body>
    
<form method="post" action="guardar_usuario.php">
  <input type="text" name="nombre" placeholder="Nombre" required>
  <input type="email" name="email" placeholder="Email" required>
  <button type="submit">Registrar</button>
</form>

<h2>Guardar y mostrar (guardar_usuario.php):</h2>
<?php
include("conexion.php");

$nombre = trim($_POST['nombre']);
$email = trim($_POST['email']);

if ($nombre && $email) {
    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
    $conexion->query($sql);
}

$resultado = $conexion->query("SELECT * FROM usuarios");

echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Email</th></tr>";
while ($fila = $resultado->fetch_assoc()) {
    echo "<tr><td>{$fila['nombre']}</td><td>{$fila['email']}</td></tr>";
}
echo "</table>";
?>

    
</body>
</html>