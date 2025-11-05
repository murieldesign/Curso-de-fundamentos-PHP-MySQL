<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar correo electrónico</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
    <!-- validar_email.php -->
    <form method="post">
    <label>Email:
        <input type="email" name="correo" placeholder="ejemplo@correo.com">
    </label>
    <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Obtenemos el correo (si no existe, devolvemos cadena vacía)
        $correo = $_POST['correo'] ?? '';

        // Validamos el formato con filter_var
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color:green;'>Correo válido: " . htmlspecialchars($correo) . "</p>";
        } else {
            echo "<p style='color:red;'>Correo no válido ❌</p>";
        }
    }
    ?>

    
</body>
</html>