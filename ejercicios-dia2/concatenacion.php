<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4: Concatenación</title>
</head>
<body>
    <?php 
    // 📝 Ejercicio 4: Concatenación
    $nombre = "Laura";
    $ciudad = "Barcelona";

    echo "<h3>Ejercicio 4</h3>";
    // Forma 1: concatenación con punto (.)
    echo "Hola, soy " . $nombre . " y vivo en " . $ciudad . ".<br>";
    // Forma 2: interpolación con comillas dobles
    echo "Hola, soy $nombre y vivo en $ciudad.<br>";

    ?>
    
</body>
</html>