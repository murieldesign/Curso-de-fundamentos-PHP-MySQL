<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar varios campos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- validar_varios_campos.php -->
    <form method="post">
    <label>Nombre: <input type="text" name="nombre"></label><br>
    <label>Email: <input type="text" name="email"></label><br>
    <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Limpiamos los datos
        $nombre = trim($_POST['nombre']);
        $email  = trim($_POST['email']);

        // Creamos un array para guardar errores
        $errores = [];

        // Comprobamos nombre vacío
        if (empty($nombre)) $errores[] = "El nombre es obligatorio.";

        // Validamos formato del correo
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errores[] = "El email no es válido.";

        // Mostramos los errores o confirmamos
        if ($errores) {
            foreach ($errores as $error) echo "<p style='color:red;'>$error</p>";
        } else {
            echo "<p style='color:green;'>Datos correctos 👍</p>";
        }
    }
    ?>

    
</body>
</html>