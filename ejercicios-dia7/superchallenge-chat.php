<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mini Chat</title>
</head>
<body>
    <h2>Mini Chat PHP</h2>
    <form action="" method="post">
        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="mensaje">Mensaje:</label><br>
        <input type="text" id="mensaje" name="mensaje" required><br><br>

        <input type="submit" value="Enviar">
    </form>

    <hr>

    <h3>Mensajes:</h3>
    <?php include("chat.php"); ?>
</body>
</html>