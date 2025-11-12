<?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=crud_usuarios;charset=utf8mb4", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("❌ Error de conexión: " . $e->getMessage());
    }
?>
