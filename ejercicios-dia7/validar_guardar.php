<?php
// Verificamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']); // Recogemos y limpiamos los campos
    $email = trim($_POST['email']);
    $mensaje = trim($_POST['mensaje']);

    // Validamos que no haya campos vacíos
    if ($nombre && $email && $mensaje) {
        $fecha = date("Y-m-d H:i:s"); // Fecha actual
        $registro = "[$fecha] Nombre: $nombre | Email: $email | Mensaje: $mensaje\n";
        
        // Guardamos el registro en el archivo formulario.txt
        file_put_contents("formulario.txt", $registro, FILE_APPEND);
        echo "Datos guardados con éxito";
    } else {
        echo "Error: Todos los campos son obligatorios.";
    }
}
?>
