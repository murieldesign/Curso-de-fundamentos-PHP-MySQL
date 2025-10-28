<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // 💰 Ejercicio 8: Descuento en producto
    $precioOriginal = 120;
    $descuento = 15; // en porcentaje
    $precioFinal = $precioOriginal - ($precioOriginal * $descuento / 100);

    echo "<h3>Ejercicio 8</h3>";
    echo "El precio original era $precioOriginal €<br>";
    echo "Descuento aplicado: $descuento%<br>";
    echo "Precio final: $precioFinal €<br>";

    ?>
    
</body>
</html>