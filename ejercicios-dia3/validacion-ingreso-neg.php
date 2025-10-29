<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de ingreso con negación</title>
</head>
<body>
    <?php
        $activo = false;

        if (!$activo) {
            echo "Acceso denegado.";
        } else {
            echo "Bienvenido.";
        }



    ?>
    
</body>
</html>