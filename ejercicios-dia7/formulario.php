<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body>
    <h2>Enviar mensaje</h2>
    <form action="validar_guardar.php" method="post" novalidate> 
        <!--cambia validar_guardar.php por guardar_mensaje.php para el ejercicio 3-->
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="4" cols="40" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>