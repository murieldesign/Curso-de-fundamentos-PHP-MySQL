<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>PHP Día 5 - Challenge y Superchallenge</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background: #f9f9f9;
    }
    h1, h2 {
      color: #333;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 20px;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }
    th {
      background-color: #eee;
    }
    .mayor-edad {
      background-color: #d4edda;
    }
    .stock-critico {
      background-color: #f8d7da;
    }
    p {
      font-weight: bold;
    }
    code {
      background: #efefef;
      padding: 2px 4px;
      border-radius: 4px;
    }
  </style>
</head>
<body>

  <h1>PHP Día 5</h1>



  <h2>Superchallenge: Gestión de Inventario Avanzado</h2>
  <?php
    $inventario = [
      ["nombre" => "Teclado", "cantidad" => 3, "precio" => 25],
      ["nombre" => "Pantalla", "cantidad" => 7, "precio" => 120],
      ["nombre" => "Ratón", "cantidad" => 2, "precio" => 18],
      ["nombre" => "Tablet", "cantidad" => 10, "precio" => 200]
    ];

    $totalProductos = 0;
    $valorTotal = 0;
    $stockCritico = 0;

    echo "<table>
      <tr><th>Producto</th><th>Cantidad</th><th>Precio (€)</th></tr>";
    foreach ($inventario as $item) {
        $nombre = $item["nombre"];
        $cantidad = $item["cantidad"];
        $precio = $item["precio"];
        $clase = $cantidad < 5 ? "class='stock-critico'" : "";
        echo "<tr $clase><td>$nombre</td><td>$cantidad</td><td>$precio</td></tr>";

        $totalProductos += $cantidad;
        $valorTotal += $cantidad * $precio;
        if ($cantidad < 5) $stockCritico++;
    }
    echo "</table>";

    echo "<p>Total de productos: $totalProductos</p>";
    echo "<p>Valor total del stock: $valorTotal €</p>";
    echo "<p>Productos en stock crítico: $stockCritico</p>";
  ?>

</body>
</html>

