<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="guardar.php" method="post">
        <input type="text" name="nombre" placeholder="Tu nombre" required><br><br>
        <input type="email" name="email" placeholder="Tu email" required><br><br>
        <button type="submit">Enviar</button>
    </form>
    <?php include(__DIR__ . "/listar.php"); ?>
    
</body>
</html>