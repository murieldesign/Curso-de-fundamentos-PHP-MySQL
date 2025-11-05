<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select y Checkbox</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- select_checkbox.php -->
    <form method="post">
    <label>Lenguaje favorito:</label>
    <select name="lenguaje">
        <option value="">Selecciona uno</option>
        <option value="php">PHP</option>
        <option value="html">HTML</option>
    </select><br><br>

    <label><input type="checkbox" name="terminos"> Acepto los términos</label><br><br>
    <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Guardamos los valores
        $lenguaje = $_POST['lenguaje'] ?? '';
        $terminos = isset($_POST['terminos']);
        //isset comprueba si el checkbox fue marcado

        $errores = [];

        // Validamos selección
        if (!in_array($lenguaje, ['php', 'html'])) $errores[] = "Selecciona un lenguaje válido.";
        // in array asegura que el valor no fue manipulado
        if (!$terminos) $errores[] = "Debes aceptar los términos.";

        // Mostramos resultados
        if ($errores) {
            foreach ($errores as $e) echo "<p style='color:red;'>$e</p>";
        } else {
            echo "<p style='color:green;'>Lenguaje seleccionado: $lenguaje ✅</p>";
        }
    }
    ?>

    
    
</body>
</html>