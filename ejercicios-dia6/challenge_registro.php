<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>⚡ CHALLENGE: Formulario de Registro de Usuario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- challenge_registro.php -->
    <form method="post">
    <label>Nombre completo: <input type="text" name="nombre" value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>"></label><br>

    <label>Email: <input type="text" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"></label><br>

    <label>Contraseña: <input type="password" name="password"></label><br>

    <label>Confirmar contraseña: <input type="password" name="password2"></label><br>

    <label>Edad: <input type="number" name="edad" value="<?= htmlspecialchars($_POST['edad'] ?? '') ?>"></label><br>

    <label>Género:
        <select name="genero">
        <option value="">Selecciona</option>
        <option value="masculino" <?= (($_POST['genero'] ?? '') == 'masculino') ? 'selected' : '' ?>>Masculino</option>
        <option value="femenino" <?= (($_POST['genero'] ?? '') == 'femenino') ? 'selected' : '' ?>>Femenino</option>
        <option value="otro" <?= (($_POST['genero'] ?? '') == 'otro') ? 'selected' : '' ?>>Otro</option>
        </select>
    </label><br>

    <label><input type="checkbox" name="terminos" <?= isset($_POST['terminos']) ? 'checked' : '' ?>> Acepto los términos</label><br>

    <input type="submit" value="Registrarme">
    </form>

    <?php
    // Función para limpiar texto
    function limpiar($dato) {
        return htmlspecialchars(trim($dato));
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nombre = limpiar($_POST['nombre']);
        $email = limpiar($_POST['email']);
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $edad = $_POST['edad'];
        $genero = $_POST['genero'];
        $terminos = isset($_POST['terminos']);

        $errores = [];

        // Validaciones
        if (empty($nombre)) $errores[] = "El nombre es obligatorio.";
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errores[] = "Email no válido.";
        if (strlen($password) < 6) $errores[] = "La contraseña debe tener al menos 6 caracteres.";
        if ($password !== $password2) $errores[] = "Las contraseñas no coinciden.";
        if (!is_numeric($edad) || $edad < 18) $errores[] = "Debes ser mayor de edad.";
        if (empty($genero)) $errores[] = "Selecciona un género.";
        if (!$terminos) $errores[] = "Debes aceptar los términos.";

        // Resultados
        if ($errores) {
            foreach ($errores as $e) {
                echo "<p style='color:red;'>$e</p>";
            }
        } else {
            echo "<p style='color:green;'>✅ Registro exitoso, bienvenido $nombre</p>";
        }
    }
    ?>

    
</body>
</html>