<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar campo obligatorio</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- validar_campo_obligatorio.php -->
    <form method="post">
    <input type="text" name="nombre" placeholder="Tu nombre">
    <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Eliminamos espacios en blanco antes y después del texto
        $nombre = trim($_POST['nombre']);

        // Si el campo está vacío, mostramos un error
        if (empty($nombre)) {
            echo "<p style='color:red;'>⚠️ El campo nombre es obligatorio.</p>";
        } else {
            // Si no está vacío, saludamos al usuario
            echo "<p style='color:green;'>Hola, " . htmlspecialchars($nombre) . "!</p>";
        }
    }
    ?>

    
</body>
</html>