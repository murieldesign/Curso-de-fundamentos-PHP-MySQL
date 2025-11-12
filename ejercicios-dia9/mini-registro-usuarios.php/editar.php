<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="estilos.css">

    
</head>
<body>
    <?php
include("conexion.php");
$id = $_GET['id'] ?? 0;

if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<form action="actualizar.php" method="post">
  <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
  <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>" required><br><br>
  <input type="email" name="email" value="<?= $usuario['email'] ?>" required><br><br>
  <button type="submit">Actualizar</button>
</form>
    
</body>
</html>

