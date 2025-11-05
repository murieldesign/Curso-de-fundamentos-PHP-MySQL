<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto completo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- formulario_contacto.php -->
    <form method="post">
    <label>Nombre: 
        <input type="text" name="nombre" value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>">
    </label><br>

    <label>Email: 
        <input type="text" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
    </label><br>

    <label>Mensaje:</label><br>
    <textarea name="mensaje"><?= htmlspecialchars($_POST['mensaje'] ?? '') ?></textarea><br>

    <label>
        <input type="checkbox" name="terminos" <?= isset($_POST['terminos']) ? 'checked' : '' ?>> 
        Acepto los términos
    </label><br>

    <input type="submit" value="Enviar">
    </form>

    <?php
    // Función para limpiar texto
    function limpiar($d) { 
        return htmlspecialchars(trim($d)); 
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Sanitizamos los campos
        $nombre = limpiar($_POST['nombre']);
        $email  = limpiar($_POST['email']);
        $mensaje = limpiar($_POST['mensaje']);
        $terminos = isset($_POST['terminos']);

        $errores = [];

        // Validaciones básicas
        if (empty($nombre)) $errores[] = "El nombre es obligatorio.";
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errores[] = "Correo inválido.";
        if (strlen($mensaje) < 10) $errores[] = "El mensaje debe tener al menos 10 caracteres.";
        if (!$terminos) $errores[] = "Debes aceptar los términos.";

        // Mostrar resultados
        if ($errores) {
            foreach ($errores as $e) echo "<p style='color:red;'>$e</p>";
        } else {
            echo "<p style='color:green;'>Formulario enviado correctamente ✅</p>";
        }
    }
    ?>

    
</body>
</html>