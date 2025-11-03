<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista array de frutas</title>
</head>
<body>
    <?php 
    $frutas = ["Manzana", "Pera", "Melón"];
    echo "<ul>";
    foreach ($frutas as $fruta) {
        echo "<li>$fruta</li>";
    }
    echo "</ul>";    
    
    ?>
    
</body>
</html>