<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Función area circulo</title>
</head>
<body>
    <?php 
        function calcularAreaCirculo($radio) {
            return pi() * pow($radio, 2);
        }

        echo calcularAreaCirculo(5);  // Resultado: 78.539816339745

    ?>
    
</body>
</html>