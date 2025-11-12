<?php
include("conexion.php");
$categorias = $conexion->query("SELECT * FROM categorias");
?>
<form action="guardar_producto.php" method="POST">
  <input type="text" name="nombre" placeholder="Nombre" required><br>
  <textarea name="descripcion" placeholder="Descripción" required></textarea><br>
  <input type="number" step="0.01" name="precio" placeholder="Precio" required><br>
  <select name="categoria_id" required>
    <option value="">Selecciona categoría</option>
    <?php while ($cat = $categorias->fetch_assoc()): ?>
      <option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['nombre']) ?></option>
    <?php endwhile; ?>
  </select><br><br>
  <button type="submit">Guardar</button>
</form>
