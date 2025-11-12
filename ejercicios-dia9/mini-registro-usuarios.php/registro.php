<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
    <form action="guardar.php" method="post">
    <input type="text" name="nombre" placeholder="Nombre completo" required><br><br>
    <input type="email" name="email" placeholder="Correo electrónico" required><br><br>
    <button type="submit">Registrar</button>
    </form>
    <a href="listar.php">Ver usuarios registrados</a>

    
</body>
</html>