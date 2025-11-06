<?php 
    //leemos el contenido de mensajes.txt
    $contenido = file_get_contents("mensajes.txt");
    
    //Separamos el contenido por lineas
    $lineas = explode("\n", $contenido); // para separar el contenido en lineas

    //Recorremos las lineas y las mostramos como parrafos
    foreach($lineas as $linea){
        if(!empty($linea)){
            //evitamos las lineas vacias
            echo "<p>$linea</p>"; // mostramos cada linea como un parrafo
        }
    }
?>