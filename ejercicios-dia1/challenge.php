<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge: Tarjeta de presentación</title>
</head>
<body>
    <?php 
        $nombre = "Paco";
        $edad= 46;
        $frase = "Nunca te rindas";

        echo "<div style='font-family: Arial; border: 1px solid #ccc; padding:20px; width:300px; text-align:center'>";
        echo "<h2>$nombre</h2>";
        echo "<p>$edad</p>";
        echo "<blockquote>$frase</blockquote>";
        echo "</div>"
    ?>

    
</body>
</html>