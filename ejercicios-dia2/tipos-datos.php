<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2: Tipos de datos</title>
</head>
<body>
    <?php 
        // 📝 Ejercicio 2: Tipos de datos
        $nombre = "Laura";       // string
        $edad = 25;              // integer
        $altura = 1.68;          // float
        $activo = true;          // boolean
        $direccion = null;       // null

        echo "<h3>Ejercicio 2</h3>";
        echo "Tipos de datos:<br>";
        echo gettype($nombre) . "<br>";
        echo gettype($edad) . "<br>";
        echo gettype($altura) . "<br>";
        echo gettype($activo) . "<br>";
        echo gettype($direccion) . "<br>";

    
    ?>
    
</body>
</html>