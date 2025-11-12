<?php
include("conexion.php");
$id = intval($_GET['id']);
$resultado = $conexion->query("SELECT * FROM productos WHERE id=$id");
$producto = $resultado->fetch_assoc();
?>


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
<form action="actualizar.php" method="POST">
  <input type="hidden" name="id" value="<?= $producto['id'] ?>">
  <input type="text" name="nombre" value="<?= htmlspecialchars($producto['nombre']) ?>" required><br>
  <textarea name="descripcion" required><?= htmlspecialchars($producto['descripcion']) ?></textarea><br>
  <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>" required><br>
  <button type="submit">Actualizar</button>
</form>

 
</div>

<div class="footer">
  &copy; <?php echo date("Y"); ?> Proyecto CRUD - PHP y MySQL
</div>

</body>
</html>