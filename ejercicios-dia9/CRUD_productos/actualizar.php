
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>CRUD Productos</title>
   <link rel="stylesheet" href="estilos.css"> 
</head>
<body>

<header>
  <h1>CRUD de Productos</h1>
  <p>PHP + MySQL</p>
</header>

<div class="container">
    <?php
include("conexion.php");
$id = intval($_POST['id']);
$nombre = trim($_POST['nombre']);
$descripcion = trim($_POST['descripcion']);
$precio = floatval($_POST['precio']);

if ($nombre && $descripcion && $precio > 0) {
    $nombre = $conexion->real_escape_string($nombre);
    $descripcion = $conexion->real_escape_string($descripcion);
    $sql = "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio='$precio' WHERE id=$id";

    if ($conexion->query($sql)) {
        echo "<p style='text-align:center'>Producto actualizado correctamente.</p>";
        echo "<p style='text-align:center;'><a style='text-align:center; text-decoration: none; color:#498fe0; font-weight:bold' href='index.php'>Volver al listado</a></p>";
    } else {
        echo "<p>Error al actualizar: " . $conexion->error . "</p>";
    }
} else {
    echo "<p>Todos los campos son obligatorios.</p>";
}
?>

 
</div>

<div class="footer">
  &copy; <?php echo date("Y"); ?> Proyecto CRUD - PHP y MySQL
</div>

</body>
</html>