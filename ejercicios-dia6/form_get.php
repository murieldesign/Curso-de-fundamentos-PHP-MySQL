<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario con Select y Términos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        form {
            background-color: #f9f9f9;
            padding: 15px;
            width: 350px;
            border-radius: 8px;
            box-shadow: 0 0 5px #ccc;
        }
        input[type="text"], select {
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
        .error { color: red; }
        .exito { color: green; }
        label a { color: #007bff; text-decoration: none; }
    </style>
</head>
<body>
    <h2>Formulario con Select, Checkbox y Validación de Términos</h2>

    <form method="POST" action="">
        <label for="nombre">Nombre completo:</label><br>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label for="pais">País de residencia:</label><br>
        <select name="pais" id="pais">
            <option value="">Seleccione un país</option>
            <option value="España">España</option>
            <option value="México">México</option>
            <option value="Argentina">Argentina</option>
            <option value="Chile">Chile</option>
        </select><br><br>

        <label>Intereses:</label><br>
        <input type="checkbox" name="intereses[]" value="Programación"> Programación<br>
        <input type="checkbox" name="intereses[]" value="Música"> Música<br>
        <input type="checkbox" name="intereses[]" value="Deportes"> Deportes<br>
        <input type="checkbox" name="intereses[]" value="Lectura"> Lectura<br><br>

        <input type="checkbox" name="terminos" id="terminos" value="1">
        <label for="terminos">Acepto los <a href="#">términos y condiciones</a></label><br><br>

        <input type="submit" value="Enviar">
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = trim($_POST['nombre']);
        $pais = $_POST['pais'];
        $intereses = isset($_POST['intereses']) ? $_POST['intereses'] : [];
        $terminos = isset($_POST['terminos']); // true si está marcado

        $errores = [];

        // Validaciones básicas
        if (empty($nombre)) {
            $errores[] = "El campo nombre es obligatorio.";
        }

        if (empty($pais)) {
            $errores[] = "Debe seleccionar un país.";
        }

        if (!$terminos) {
            $errores[] = "Debes aceptar los términos y condiciones.";
        }

        // Mostrar mensajes
        if (count($errores) > 0) {
            echo "<div class='error'><h3>❌ Errores:</h3><ul>";
            foreach ($errores as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul></div>";
        } else {
            echo "<div class='exito'>";
            echo "<h3>✅ Datos enviados correctamente</h3>";
            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>País:</strong> $pais</p>";

            if (!empty($intereses)) {
                echo "<p><strong>Intereses:</strong></p><ul>";
                foreach ($intereses as $item) {
                    echo "<li>$item</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No seleccionaste ningún interés.</p>";
            }

            echo "<p>Has aceptado los términos y condiciones.</p>";
            echo "</div>";
        }
    }
    ?>
</body>
</html>
