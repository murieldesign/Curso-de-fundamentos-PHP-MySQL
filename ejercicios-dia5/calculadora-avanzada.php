<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Avanzada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculadora {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }
        .resultado {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="calculadora">
    <h2>Calculadora Avanzada</h2>

    <?php
    // Definir los números como un array
    $numeros = [5, 10, 2];  // Puedes añadir más números aquí

    // Definir el operador
    $operador = "*";  // Cambia el operador para probar otras operaciones

    // Función para realizar la operación
    function calculadora($numeros, $operador) {
        // Empezamos con el primer número
        $resultado = $numeros[0];

        // Iteramos sobre el resto de los números para hacer la operación
        for ($i = 1; $i < count($numeros); $i++) {
            switch ($operador) {
                case "+":
                    $resultado += $numeros[$i];  // Suma
                    break;
                case "-":
                    $resultado -= $numeros[$i];  // Resta
                    break;
                case "*":
                    $resultado *= $numeros[$i];  // Multiplicación
                    break;
                case "/":
                    if ($numeros[$i] != 0) {
                        $resultado /= $numeros[$i];  // División
                    } else {
                        return "Error: División por cero";  // Evitar división por cero
                    }
                    break;
                default:
                    return "Operador no válido";  // Si el operador no es válido
            }
        }
        return $resultado;
    }

    // Calcular el resultado
    $resultado = calculadora($numeros, $operador);

    // Mostrar el resultado
    if ($resultado === "Error: División por cero") {
        echo "<div class='resultado error'>$resultado</div>";
    } else {
        echo "<div class='resultado'>El resultado de la operación es: $resultado</div>";
    }
    ?>
</div>

</body>
</html>
