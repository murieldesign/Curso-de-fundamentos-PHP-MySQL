<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra libros</title>
</head>
<body>
    <?php 
    $libros = ["1984" => "George Orwell", "Rayuela" => "Julio Cortázar"];
    foreach ($libros as $titulo => $autor) {
        echo "<p>El libro '$titulo' fue escrito por $autor.</p><br>";
    }

    ?>
    
</body>
</html>