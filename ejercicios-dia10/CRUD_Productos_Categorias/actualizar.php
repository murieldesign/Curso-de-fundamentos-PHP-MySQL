
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>CRUD Productos con categorias</title>
   <link rel="stylesheet" href="estilos.css"> 
</head>
<body>

<header>
  <h1>CRUD de Productos con categorias</h1>
  <p>PHP + MySQL</p>
</header>

<div class="container">
<?php
include("conexion.php");
$id = intval($_POST['id']);
$nombre = trim($_POST['nombre']);
$descripcion = trim($_POST['descripcion']);
$precio = floatval($_POST['precio']);
$categoria_id = intval($_POST['categoria_id']);

if ($nombre && $descripcion && $precio > 0 && $categoria_id > 0) {
    $nombre = $conexion->real_escape_string($nombre);
    $descripcion = $conexion->real_escape_string($descripcion);
    $sql = "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio='$precio', categoria_id='$categoria_id' WHERE id=$id";
    if ($conexion->query($sql)) {
        echo "Producto actualizado.";
    } else {
        echo "Error al actualizar: " . $conexion->error;
    }
} else {
    echo "Todos los campos son obligatorios.";
}
?>
<a href='index.php'>Volver</a>
</div>

<div class="footer">
  &copy; <?php echo date("Y"); ?> Proyecto CRUD - PHP y MySQL
</div>

</body>
</html>