<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Función saludar</title>
</head>
<body>
    <?php 
        function saludar($nombre, $mensaje) {
            echo "Hola, $nombre. $mensaje";
        }

        saludar("Paco", "Bienvenido al curso de PHP!");
    ?>
    
</body>
</html>