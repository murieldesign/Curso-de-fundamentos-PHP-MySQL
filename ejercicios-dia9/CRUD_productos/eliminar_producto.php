

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
    $id = intval($_GET['id']);
    $sql = "DELETE FROM productos WHERE id=$id";

    if ($conexion->query($sql)) {
        echo "<p style='text-align:center'>Producto eliminado correctamente.</p>";
    } else {
        echo "<p>Error al eliminar: " . $conexion->error . "</p>";
    }
    echo "<p style='text-align:center'><a style='text-align:center; text-decoration: none; color:#498fe0; font-weight:bold' href='index.php'>Volver al listado</a></p>";
?>

 
</div>

<div class="footer">
  &copy; <?php echo date("Y"); ?> Proyecto CRUD - PHP y MySQL
</div>

</body>
</html>