<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar si una persona puede votar</title>
</head>
<body>
    <?php
        $edad = 17;
        if ($edad >= 18) {
            echo "Puede votar.";
        } else {
            echo "No puede votar.";
        }

    ?>
    
</body>
</html>