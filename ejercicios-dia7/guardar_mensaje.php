<?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $nombre = htmlspecialchars(trim($POST['nombre'] ?? ''));
        $email = htmlspecialchars(trim($POST['email']?? ''));
        $mensaje = htmlspecialchars(trim($POST['mensaje']?? ''));
        $fecha = date("Y-m-d H:i;s");

        $registro = "[$fecha] Nombre: $nombre | Email: $email | Mensaje: $mensaje" . PHP_EOL;
        file_put_contents(__DIR__ . "mensajes.txt", $registro, FILE_APPEND | LOCK_EX);

        echo "<p>Mensaje guardado con éxito</p>";
        echo "<p><a href='formulario.php'>Volver al formulario</a></p>";
    }



?>