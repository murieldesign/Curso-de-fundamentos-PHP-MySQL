<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar beneficio con operadores lógicos</title>
</head>
<body>
    <?php
        $edad = 65;
        $esEstudiante = false;

        if ($edad > 60 || $esEstudiante) {
            echo "Tiene acceso al beneficio.";
        } else {
            echo "No tiene acceso.";
        }


    ?>
    
</body>
</html>