<?php 
// verificar si el archivo log.txt tiene permisos
if(is_writable("log.txt")){
    // Abrimos el archivo en modo aññadir (append) para no sobreewscribir el contenido
    $archivo = fopen("log.txt", "a");
    fwrite($archivo, "Texto adicional\n"); // escribir mas contenido
    fclose($archivo);
    echo " texto agregado correctamente";

}else{
    echo " El archivo no es escribible";
}
?>