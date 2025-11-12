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
$categoria_id = intval($_POST['categoria_id']);

$nombre = trim($_POST['nombre']);
$descripcion = trim($_POST['descripcion']);
$precio = floatval($_POST['precio']);
$categoria_id = intval($_POST['categoria_id']);

if ($nombre && $descripcion && $precio > 0 && $categoria_id > 0) {
    $nombre = $conexion->real_escape_string($nombre);
    $descripcion = $conexion->real_escape_string($descripcion);
    $sql = "INSERT INTO productos (nombre, descripcion, precio, categoria_id) 
            VALUES ('$nombre','$descripcion','$precio','$categoria_id')";
    if ($conexion->query($sql)) {
        echo "Producto guardado";
    } else {
        echo "Error: " . $conexion->error;
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