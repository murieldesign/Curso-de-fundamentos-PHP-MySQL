<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario con método POST y validación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        h2 {
            color: #333;
        }
        form {
            background-color: #f9f9f9;
            padding: 15px;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 0 5px #ccc;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 95%;
            padding: 6px;
            margin: 5px 0;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
        }
        .exito {
            color: green;
        }
    </style>
</head>
<body>
    <h2>Registro de usuario</h2>

    <form method="POST" action="" novalidate >
        <label for="nombre">Nombre completo:</label><br>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label for="email">Correo electrónico:</label><br>
        <input type="email" name="email" id="email"><br><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" value="Registrar">
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $errores = [];

        // Validaciones básicas
        if (empty($nombre)) {
            $errores[] = "El campo nombre es obligatorio.";
        }

        if (empty($email)) {
            $errores[] = "El campo correo electrónico es obligatorio.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores[] = "El correo electrónico no es válido.";
        }

        if (empty($password)) {
            $errores[] = "La contraseña es obligatoria.";
        }

        // Mostrar resultados
        if (count($errores) > 0) {
            echo "<div class='error'>";
            echo "<h3>❌ Errores encontrados:</h3>";
            echo "<ul>";
            foreach ($errores as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
            echo "</div>";
        } else {
            // Ocultar parcialmente la contraseña
            $oculta_pass = substr($password, 0, 2) . str_repeat('*', strlen($password) - 2);

            echo "<div class='exito'>";
            echo "<h3>✅ Registro exitoso</h3>";
            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Contraseña:</strong> $oculta_pass</p>";
            echo "</div>";
        }
    }
    ?>
</body>
</html>
