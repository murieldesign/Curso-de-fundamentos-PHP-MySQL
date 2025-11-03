<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Función operaciones</title>
</head>
<body>
    <?php 
        function operacionMatematica($num1, $num2, $operador) {
            switch($operador) {
                case "+":
                    return $num1 + $num2;
                case "-":
                    return $num1 - $num2;
                case "*":
                    return $num1 * $num2;
                case "/":
                    if($num2 != 0) {
                        return $num1 / $num2;
                    } else {
                        return "Error: División por cero";
                    }
                default:
                    return "Operador no válido";
            }
        }

        echo operacionMatematica(10, 5, "+");  // Resultado: 15

    ?>
    
</body>
</html>