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
  <h2>Añadir nuevo producto</h2>
  <form action="guardar_producto.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre del producto" required>
    <textarea name="descripcion" placeholder="Descripción" required></textarea>
    <input type="number" name="precio" step="0.01" placeholder="Precio (€)" required>
    <button type="submit">Guardar Producto</button>
  </form>

  <h2>Listado de Productos</h2>
  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio (€)</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <!-- Aquí iría el código PHP para mostrar productos -->
      <?php
      include("conexion.php");
      $resultado = $conexion->query("SELECT * FROM productos");

      while ($producto = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($producto['nombre']) . "</td>";
        echo "<td>" . htmlspecialchars($producto['descripcion']) . "</td>";
        echo "<td>" . number_format($producto['precio'], 2) . "</td>";
        echo "<td class='actions'>
                <a href='editar_producto.php?id=" . $producto['id'] . "'><button>Editar</button></a>
                <a href='eliminar_producto.php?id=" . $producto['id'] . "'><button>Eliminar</button></a>
              </td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<div class="footer">
  &copy; <?php echo date("Y"); ?> Proyecto CRUD - PHP y MySQL
</div>

</body>
</html>