<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Challenge:  Notas, medias, aprobados estudiantes</title>
     <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f0f0;
      padding: 20px;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      background: white;
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
    .ignorado {
      background-color: #ffeeba;
    }
    .invalido {
      background-color: #f5c6cb;
    }
  </style>

</head>
<body>
    <h2>Resultados de Evaluación</h2>
<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Nota</th>
      <th>Resultado</th>
      <th>Comentario</th>
    </tr>
  </thead>
  <tbody>

    <?php
    // Array con estudiantes y sus notas
    $estudiantes = [
        "Ana" => 9,
        "Luis" => 5,
        "Marta" => 7,
        "Carlos" => 0,
        "Elena" => 6
    ];

    // Inicialización de variables estadísticas
    $totalNotas = 0;
    $contador = 0;
    $aprobados = 0;
    $suspendidos = 0;

    // Recorremos cada estudiante
    foreach ($estudiantes as $nombre => $nota) {
        // Si la nota es 0, mostramos error y detenemos el script con break
        if ($nota == 0) {
            echo "<tr class='invalido'><td colspan='4'>Nota inválida detectada para $nombre: detener revisión.</td></tr>";
            break;
        }

        // Si la nota es 5, ignoramos esta fila con continue
        if ($nota == 5) {
            echo "<tr class='ignorado'><td colspan='4'>$nombre ha sido ignorado (nota 5).</td></tr>";
            continue;
        }

        // Determinamos si aprueba o suspende
        $resultado = $nota >= 6 ? "Aprobado" : "Suspendido";

        // Comentario adicional según la nota
        $comentario = "";
        if ($nota >= 9) $comentario = "Excelente";
        elseif ($nota >= 7) $comentario = "Notable";
        elseif ($nota == 6) $comentario = "Aprobado justo";
        else $comentario = "Suspenso";

        // Estilo visual de la fila según resultado
        $claseFila = $nota >= 6 ? "aprobado" : "suspendido";

        // Mostramos la fila del estudiante con sus datos
        echo "<tr class='$claseFila'>
            <td>$nombre</td>
            <td>$nota</td>
            <td>$resultado</td>
            <td>$comentario</td>
        </tr>";

        // Acumulamos datos para calcular estadísticas
        $totalNotas += $nota;
        $contador++;
        $nota >= 6 ? $aprobados++ : $suspendidos++;
    }

    // Si hay al menos un estudiante evaluado, mostramos resumen final
    if ($contador > 0) {
        $media = round($totalNotas / $contador, 2);
        echo "<tr><td colspan='4'><strong>Media de notas:</strong> $media - ✅ Aprobados: $aprobados - ❌ Suspendidos: $suspendidos</td></tr>";
    }
    ?>

    
</body>
</html>