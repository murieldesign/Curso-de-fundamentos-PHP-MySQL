
<?php
$conexion = mysqli_connect("localhost", "root", "", "crud_usuarios");

if (!$conexion) {
    die("❌ Error de conexión: " . mysqli_connect_error());
}

echo "✅ Conexión exitosa a MySQL.";
?>

<!--Versión PDO:-->

<!--
try {
    $pdo = new PDO("mysql:host=localhost;dbname=crud_usuarios;charset=utf8mb4", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Conexión establecida con PDO.";
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}
    -->

