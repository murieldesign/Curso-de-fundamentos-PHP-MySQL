
<?php
// Leemos todo el contenido del archivo log.txt
$contenido = file_get_contents("log.txt");

// Mostramos el contenido, nl2br convierte saltos de línea en HTML
echo nl2br($contenido);
?>

