<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']); // Recogemos los datos
    $email = trim($_POST['email']);

    // Validamos que no estén vacíos
    if ($nombre && $email) {
        $fecha = date("Y-m-d H:i:s"); // Fecha actual
        $registro = "[$fecha] Nombre: $nombre | Email: $email\n";
        
        // Guardamos el registro en visitantes.txt
        file_put_contents("visitantes.txt", $registro, FILE_APPEND);
        echo "Gracias por registrarte!";
    } else {
        echo "Error: Debes completar todos los campos.";
    }
}
?>
