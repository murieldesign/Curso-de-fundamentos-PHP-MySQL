<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario básico con POST</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- formulario_post.php -->
    <form method="post">
    <label>Nombre:
        <input type="text" name="nombre" placeholder="Tu nombre">
    </label>
    <input type="submit" value="Enviar">
    </form>

    <?php
    // Comprobamos si el formulario fue enviado con POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Limpiamos el dato para mayor seguridad
        $nombre = htmlspecialchars($_POST['nombre']);

        // Mostramos un mensaje personalizado
        echo "<p>Bienvenido, $nombre ✅</p>";
    }
    ?>

    
</body>
</html>