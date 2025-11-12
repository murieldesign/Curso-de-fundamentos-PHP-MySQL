<?php
include("conexion.php");
$sql = "SELECT p.*, c.nombre AS categoria 
        FROM productos p 
        JOIN categorias c ON p.categoria_id = c.id";
$resultado = $conexion->query($sql);
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
 <h1>Añade un producto</h1>
<?php include("formulario.php"); ?>
<h2>Listado de Productos</h2>
  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Categorias</th>
        <th>Precio (€)</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <!-- Aquí iría el código PHP para mostrar productos -->
      <?php
      while ($producto = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($producto['nombre']) . "</td>";
        echo "<td>" . htmlspecialchars($producto['descripcion']) . "</td>";
        echo "<td>" . htmlspecialchars($producto['categoria']) . "</td>";
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