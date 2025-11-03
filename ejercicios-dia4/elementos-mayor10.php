
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elementos mayores que 10</title>
</head>
<body>
    <?php 
    $valores = [3, 15, 8, 22, 1];
    $mayores = 0;
    foreach ($valores as $valor) {
        if ($valor > 10) {
            $mayores++;
        }
    }
    echo "<p>Hay $mayores valores mayores a 10.</p>";
    
    $cantidad = count($mayores);
    echo "<p>Hay $cantidad valores mayores a 10</p>";

    ?>
    
</body>
</html>