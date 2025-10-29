<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge: Evaluación Estudiantes - Notas y Resultadosh</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: left;
    }
    th {
      background-color: #007BFF;
      color: white;
    }
    .aprobado {
      background-color: #d4edda;
    }
    .suspendido {
      background-color: #f8d7da;
    }
  </style>

</head>
<body>
   <h2>Resultados de Evaluación</h2>

<?php
// Lista de estudiantes y sus notas
$estudiantes = [
    "Pedro" => 8,
    "Lucía" => 5,
    "Manuel" => 4,
    "Sara" => 7,
    "Laura" => 9
];

// Inicialización de variables para las estadísticas
$aprobados = 0;
$notaTotal = 0;
$contValidas = 0;

echo "<table>";
echo "<thead><tr><th>Nombre</th><th>Nota</th><th>Resultado</th></tr></thead><tbody>";

// Iteramos por los estudiantes y sus notas
foreach ($estudiantes as $nombre => $nota) {
    // Clasificación de estudiantes
    if ($nota >= 6) {
        echo "<tr class='aprobado'><td>$nombre</td><td>$nota</td><td>Aprobado</td></tr>";
        $aprobados++;
    } else {
        echo "<tr class='suspendido'><td>$nombre</td><td>$nota</td><td>Suspendido</td></tr>";
    }

    // Acumulamos las notas para calcular la media
    $notaTotal += $nota;
    $contValidas++;
}

// Calcular y mostrar la media de los aprobados
if ($contValidas > 0) {
    $media = round($notaTotal / $contValidas, 2);
    echo "<tr><td colspan='3'><strong>Media de las notas:</strong> $media</td></tr>";
}

echo "</tbody></table>";

?>

    
</body>
</html>