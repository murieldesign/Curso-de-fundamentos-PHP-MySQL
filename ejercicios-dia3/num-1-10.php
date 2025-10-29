<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar números del 1 al 10</title>
</head>
<body>
    <?php
        $numero = 1;
        while ($numero <= 10) {
            echo $numero . "<br>";
            $numero++;      
        }
    ?>
    
</body>
</html>