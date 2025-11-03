<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Función Par o Impar</title>
</head>
<body>
   <?php
        function esPar($numero) {
            if ($numero % 2 == 0) {
                return "Par";
            } else {
                return "Impar";
            }
        }

        echo esPar(7);  // Resultado: Impar
        ?>

    
</body>
</html>