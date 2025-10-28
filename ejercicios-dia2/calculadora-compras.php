<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 2: Calculadora de compras</title>
</head>
<body>
    <?php 
    // Challenge 2: Calculadora de compras
    $producto = "Camiseta";
    $precioUnitario = 25;
    $cantidad = 3;
    $impuesto = 21; // %

    $subtotal = $precioUnitario * $cantidad;
    $impuestos = $subtotal * $impuesto / 100;
    $total = $subtotal + $impuestos;

    echo "<h3>Challenge 2</h3>";
    echo "
    <table border='1' cellpadding='5' style='border-collapse:collapse;'>
    <tr><th>Producto</th><th>Cantidad</th><th>Subtotal</th><th>IVA ($impuesto%)</th><th>Total</th></tr>
    <tr>
        <td>$producto</td>
        <td>$cantidad</td>
        <td>$subtotal €</td>
        <td>$impuestos €</td>
        <td><strong>$total €</strong></td>
    </tr>
    </table>
    ";

    ?>
    
</body>
</html>