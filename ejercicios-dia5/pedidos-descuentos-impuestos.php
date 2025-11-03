<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen de Pedido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f9f9f9;
            color: #333;
        }

        h1 {
            color: #222;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #555;
            color: #fff;
        }

        .total {
            font-weight: bold;
            background-color: #f0f0f0;
        }

        .resumen {
            padding: 15px;
            background-color: #e6ffe6;
            border: 1px solid #b2ffb2;
        }
    </style>
</head>
<body>

<h1>Resumen del Pedido</h1>

<?php
// Esta función calcula el resumen del pedido, incluyendo impuestos y posibles descuentos
function calcularPedido($productos) {
    // Inicializamos acumuladores
    $totalSinImpuestos = 0;
    $totalImpuestos = 0;
    $detalles = [];

    // Recorremos cada producto para procesar los cálculos
    foreach ($productos as $producto) {
        // Extraemos los valores del array asociativo
        $nombre = $producto["nombre"];
        $cantidad = $producto["cantidad"];
        $precio = $producto["precio"];
        $tipo = $producto["tipo"];

        // Validamos que los datos sean numéricos y positivos
        if (!is_numeric($cantidad) || !is_numeric($precio) || $cantidad <= 0 || $precio <= 0) {
            return "Error en el producto '$nombre': cantidad o precio inválido.";
        }

        // Calculamos el subtotal (precio × cantidad)
        $subtotal = $cantidad * $precio;

        // Aplicamos el impuesto según el tipo de producto
        switch ($tipo) {
            case "alimento":
                $impuesto = $subtotal * 0.04; // 4% para alimentos
                break;
            case "ropa":
                $impuesto = $subtotal * 0.10; // 10% para ropa
                break;
            case "tecnologia":
                $impuesto = $subtotal * 0.21; // 21% para tecnología
                break;
            default:
                return "Error: tipo de producto '$tipo' no válido.";
        }

        // Calculamos el total de este producto (subtotal + impuesto)
        $totalProducto = $subtotal + $impuesto;

        // Acumulamos subtotales e impuestos globales
        $totalSinImpuestos += $subtotal;
        $totalImpuestos += $impuesto;

        // Guardamos el detalle formateado en un array
        $detalles[] = [
            "nombre" => $nombre,
            "subtotal" => round($subtotal, 2),
            "impuesto" => round($impuesto, 2),
            "total" => round($totalProducto, 2)
        ];
    }

    // Sumamos total bruto antes del descuento
    $totalBruto = $totalSinImpuestos + $totalImpuestos;

    // Si el total bruto supera los 100€, aplicamos un 10% de descuento
    $descuento = ($totalBruto > 100) ? $totalBruto * 0.10 : 0;

    // Calculamos el total final tras aplicar el descuento
    $totalFinal = $totalBruto - $descuento;

    // Devolvemos todos los datos en un array asociativo
    return [
        "detalles" => $detalles,
        "total_sin_impuestos" => round($totalSinImpuestos, 2),
        "total_impuestos" => round($totalImpuestos, 2),
        "descuento" => round($descuento, 2),
        "total_final" => round($totalFinal, 2)
    ];
}

// Array de productos (se puede simular como si viniera de un formulario)
$productos = [
    ["nombre" => "Pan", "cantidad" => 4, "precio" => 1.5, "tipo" => "alimento"],
    ["nombre" => "Chaqueta", "cantidad" => 1, "precio" => 40, "tipo" => "ropa"],
    ["nombre" => "Auriculares", "cantidad" => 2, "precio" => 35, "tipo" => "tecnologia"]
];

// Ejecutamos la función con los productos definidos
$resultado = calcularPedido($productos);

// Mostramos el resultado en pantalla (dentro de HTML)
if (is_string($resultado)) {
    // Si hubo un error, lo mostramos como texto
    echo "<p style='color: red;'>$resultado</p>";
} else {
    // Mostramos una tabla con los detalles de cada producto
    echo "<table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Subtotal (€)</th>
                    <th>Impuestos (€)</th>
                    <th>Total (€)</th>
                </tr>
            </thead>
            <tbody>";
    foreach ($resultado["detalles"] as $detalle) {
        echo "<tr>
                <td>{$detalle['nombre']}</td>
                <td>{$detalle['subtotal']}</td>
                <td>{$detalle['impuesto']}</td>
                <td>{$detalle['total']}</td>
              </tr>";
    }
    echo "  </tbody>
          </table>";

    // Mostramos resumen general del pedido
    echo "<div class='resumen'>
            <p><strong>Total sin impuestos:</strong> €{$resultado['total_sin_impuestos']}</p>
            <p><strong>Total impuestos:</strong> €{$resultado['total_impuestos']}</p>
            <p><strong>Descuento aplicado:</strong> €{$resultado['descuento']}</p>
            <p class='total'><strong>Total final a pagar:</strong> €{$resultado['total_final']}</p>
          </div>";
}
?>


</body>
</html>
