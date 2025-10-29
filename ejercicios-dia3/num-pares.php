<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números pares del 1 al 20</title>
</head>
<body>
    <?php
        for ($i = 1; $i <= 20; $i++) {
            //if ($i % 2 == 0) {
              //  echo "$i es par<br>";
            //}
            if ($i % 2 != 0){
                echo "$i es impar<br>";
            }
    }

    ?>
    
</body>
</html>