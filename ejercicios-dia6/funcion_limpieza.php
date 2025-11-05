<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Función de limpieza reutilizable</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- funcion_limpieza.php -->
    <?php
    // Definimos una función que limpia los datos
    function limpiar($dato) {
        return htmlspecialchars(trim($dato)); // Quitamos espacios y codificamos HTML
    }
    ?>

    <form method="post">
    <label>Nombre: <input type="text" name="nombre"></label><br>
    <label>Email: <input type="text" name="email"></label><br>
    <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Aplicamos la función a los campos
        $nombre = limpiar($_POST['nombre']);
        $email  = limpiar($_POST['email']);

        // Validamos
        if (empty($nombre) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color:red;'>Datos incorrectos ❌</p>";
        } else {
            echo "<p style='color:green;'>Formulario correcto ✅</p>";
        }
    }
    ?>

    
</body>
</html>