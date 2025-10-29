<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array de frutas con foreach</title>
</head>
<body>
    <?php
        $frutas = ["Manzana", "Pera", "Banana", "Uva", "Melón"];
        foreach ($frutas as $fruta) {
            echo "Fruta: $fruta<br>";
        }

    ?>
    
</body>
</html>