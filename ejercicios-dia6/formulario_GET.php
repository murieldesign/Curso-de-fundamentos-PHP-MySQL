<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario básico con GET</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- formulario_get.php -->

    <!-- Formulario que envía los datos usando el método GET -->
    <form method="get">
    <label>Nombre:
        <input type="text" name="nombre" placeholder="Introduce tu nombre">
    </label>
    <input type="submit" value="Enviar">
    </form>

    <?php
    // Verificamos si se ha enviado el campo 'nombre'
    if (isset($_GET['nombre'])) {

        // htmlspecialchars evita inyección de HTML o JS
        $nombre = htmlspecialchars($_GET['nombre']);

        // Mostramos el valor recibido
        echo "<p>Hola, $nombre 👋</p>";
    }
    ?>

    
</body>
</html>