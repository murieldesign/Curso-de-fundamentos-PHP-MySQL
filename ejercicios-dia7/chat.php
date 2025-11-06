<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = trim($_POST['usuario']);
    $mensaje = trim($_POST['mensaje']);

    if ($usuario && $mensaje) {
        $fecha = date("Y-m-d H:i:s");
        $registro = "[$fecha] $usuario: $mensaje\n";
        file_put_contents("chat.txt", $registro, FILE_APPEND);
    }
}

$contenido = file_get_contents("chat.txt");
$lineas = explode("\n", $contenido);

foreach ($lineas as $linea) {
    if (!empty($linea)) {
        echo "<p>$linea</p>";
    }
}
?>
