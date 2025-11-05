<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🚀 SUPERCHALLENGE: Simulación de Inicio de Sesión + Recordatorio de Usuario
</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- superchallenge_login.php -->
    <?php
    session_start(); // Iniciamos la sesión

    // Usuario predefinido (simulación de base de datos)
    $usuario_valido = [
        "email" => "admin@curso.com",
        "password" => "123456",
        "nombre" => "Administrador"
    ];

    // Si el usuario pide cerrar sesión
    if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: superchallenge_sesion.php");
        exit;
    }

    // Si ya está logueado, mostramos saludo directamente
    if (isset($_SESSION['nombre'])) {
        echo "<p>👋 Hola, {$_SESSION['nombre']}!</p>";
        echo "<a href='?logout=true'>Cerrar sesión</a>";
        exit;
    }
    ?>

    <!-- Formulario de login -->
    <form method="post">
    <label>Email:
        <input type="text" name="email">
    </label><br>
    <label>Contraseña:
        <input type="password" name="password">
    </label><br>
    <input type="submit" value="Entrar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Sanitizamos entrada
        $email = htmlspecialchars(trim($_POST['email']));
        $password = trim($_POST['password']);

        // Validaciones básicas
        if (empty($email) || empty($password)) {
            echo "<p style='color:red;'>Completa todos los campos.</p>";
        } elseif ($email === $usuario_valido['email'] && $password === $usuario_valido['password']) {
            // Credenciales correctas
            $_SESSION['nombre'] = $usuario_valido['nombre'];
            echo "<p style='color:green;'>Bienvenido, {$_SESSION['nombre']} ✅</p>";
            echo "<a href='?logout=true'>Cerrar sesión</a>";
        } else {
            // Credenciales incorrectas
            echo "<p style='color:red;'>Email o contraseña incorrectos ❌</p>";
        }
    }
    ?>

    
</body>
</html>