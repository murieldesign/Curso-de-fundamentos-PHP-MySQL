<!-- insertar.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
</head>
<body>
    <h2>Agregar Nuevo Usuario</h2>
    <form action="insertar-usuario.php" method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <button type="submit">Guardar</button>
    </form>
    <?php include ("listar_datos.php")?>
</body>
</html>