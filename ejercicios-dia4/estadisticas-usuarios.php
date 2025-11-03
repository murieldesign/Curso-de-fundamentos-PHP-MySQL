<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>PHP Día 4 - Challenge y Superchallenge</title>
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

  <h1>PHP Día 4</h1>

  <h2>Challenge: Estadísticas de Usuarios</h2>
  <?php 
        $usuarios = ["Ana" => 17, "Pedro" => 22, "Marta" => 18];
        $edadTotal = 0;

        // Inicio de la tabla
        echo "<table border='1'>
        <tr><th>Nombre</th><th>Edad</th></tr>";

        foreach ($usuarios as $nombre => $edad) {
            // Si el usuario es mayor de edad, aplicamos estilo verde
            $clase = $edad >= 18 ? "style='background:#d4edda'" : "";
            echo "<tr $clase><td>$nombre</td><td>$edad</td></tr>";
            $edadTotal += $edad;
        }

        // Fin de la tabla
        echo "</table>";

        // Cálculo de la edad media
        $media = round($edadTotal / count($usuarios), 2);
        echo "<p>Edad media: $media</p>";
?>


  </body>
</html>
