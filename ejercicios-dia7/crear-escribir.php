<?php 
// abrimos el archivo log.txt en modo escritura y si no existe se crea.
$archivo = fopen(__DIR__ . "/log.txt", "w");

if($archivo){
    // escribimos el texto Hola mundo en el archivo
    fwrite($archivo, "¡Hola Mundo!");
    //cerramos el archivo
    fclose($archivo);
    echo "Archivo creado y texto guardado";
}else{
    echo "Error al abrir el archivo";
}


?>