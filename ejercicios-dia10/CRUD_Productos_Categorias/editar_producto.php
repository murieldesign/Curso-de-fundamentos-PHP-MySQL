 <?php
include("conexion.php");
$id = intval($_GET['id']);
$producto = $conexion->query("SELECT * FROM productos WHERE id=$id")->fetch_assoc();
$categorias = $conexion->query("SELECT * FROM categorias");
?>
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
 <h1>Editas el producto</h1>

<form action="actualizar.php" method="POST">
  <input type="hidden" name="id" value="<?= $producto['id'] ?>">
  <input type="text" name="nombre" value="<?= htmlspecialchars($producto['nombre']) ?>" required><br>
  <textarea name="descripcion" required><?= htmlspecialchars($producto['descripcion']) ?></textarea><br>
  <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>" required><br>
  <select name="categoria_id" required>
    <?php while ($cat = $categorias->fetch_assoc()): ?>
      <option value="<?= $cat['id'] ?>" <?= $cat['id'] == $producto['categoria_id'] ? 'selected' : '' ?>>
        <?= htmlspecialchars($cat['nombre']) ?>
      </option>
    <?php endwhile; ?>
  </select><br>
  <button type="submit">Actualizar</button>
</form>
</div>

<div class="footer">
  &copy; <?php echo date("Y"); ?> Proyecto CRUD - PHP y MySQL
</div>

</body>
</html>