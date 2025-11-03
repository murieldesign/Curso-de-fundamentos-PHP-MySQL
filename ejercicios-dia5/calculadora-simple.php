<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculadora Simple</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculadora {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
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
    <h2>Calculadora Simple</h2>

    <?php
    // Definir los números
    $num1 = 8;
    $num2 = 4;

    // Definir el operador
    $operador = "/"; // Puedes cambiar a "+", "-", "*" para probar

    // Función para realizar la operación
    function calculadora($num1, $num2, $operador) {
        switch ($operador) {
            case "+":
                return $num1 + $num2;
            case "-":
                return $num1 - $num2;
            case "*":
                return $num1 * $num2;
            case "/":
                if ($num2 != 0) {
                    return $num1 / $num2;
                } else {
                    return "Error: División por cero";
                }
            default:
                return "Operador no válido";
        }
    }

    // Calcular el resultado
    $resultado = calculadora($num1, $num2, $operador);

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
