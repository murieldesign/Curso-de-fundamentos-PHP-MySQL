<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantener valores tras error</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- mantener_valores.php -->
    <form method="post">
    <label>Nombre:
        <!-- Mostramos el valor anterior si existe -->
        <input type="text" name="nombre" value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>"><!-- imprime el valor anterior. -->
        <!--Permite al usuario corregir errores sin reescribir.-->
    </label>
    <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = trim($_POST['nombre']);

        if (empty($nombre)) {
            echo "<p style='color:red;'>Debes escribir tu nombre.</p>";
        } else {
            echo "<p style='color:green;'>Hola, $nombre!</p>";
        }
    }
    ?>

    
</body>
</html>