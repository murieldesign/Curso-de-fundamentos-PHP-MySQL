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

<div class="container"><?php
include("conexion.php");
$id = intval($_GET['id']);
$sql = "DELETE FROM productos WHERE id=$id";
if ($conexion->query($sql)) {
    echo "Producto eliminado.";
} else {
    echo "Error: " . $conexion->error;
}
?>
<a href='index.php'>Volver</a>
</div>

<div class="footer">
  &copy; <?php echo date("Y"); ?> Proyecto CRUD - PHP y MySQL
</div>

</body>
</html>