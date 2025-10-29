<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar el nombre del día con switch</title>
</head>
<body>
    <?php
        $diaNumero = 3;

        switch ($diaNumero) {
            case 1: echo "Lunes"; break;
            case 2: echo "Martes"; break;
            case 3: echo "Miércoles"; break;
            case 4: echo "Jueves"; break;
            case 5: echo "Viernes"; break;
            case 6: echo "Sábado"; break;
            case 7: echo "Domingo"; break;
            default: echo "Número inválido";
        }

    ?>
    
</body>
</html>