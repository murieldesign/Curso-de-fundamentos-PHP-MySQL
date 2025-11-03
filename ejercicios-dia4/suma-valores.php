<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma valores de un array</title>
</head>
<body>
    <?php 
    $numeros = [2, 5, 8];
    $suma = 0;
    foreach ($numeros as $num) {
        $suma += $num;
    }
    echo "<h3>Total: $suma</h3>"; // Imprime: Total: 15
    
    ?>
    
</body>
</html>