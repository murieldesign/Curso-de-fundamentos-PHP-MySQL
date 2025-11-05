<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar número</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- validar_numero.php -->
    <form method="post">
    <label>Edad:
        <input type="text" name="edad" placeholder="Tu edad">
    </label>
    <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $edad = $_POST['edad'];

        // Comprobamos si el valor es numérico
        if (!is_numeric($edad)) {
            //is_numeric valida si la entrada contiene solo números.
            echo "<p style='color:red;'>La edad debe ser un número.</p>";
        } else {
            echo "<p style='color:green;'>Tienes $edad años 🎉</p>";
        }
    }
    ?>

    
</body>
</html>