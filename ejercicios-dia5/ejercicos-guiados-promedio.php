<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación de estudiante</title>
</head>
<body>
    <?php 

    //Funcion que evalua el rendimiento del estudiante
        function evaluarEstudiante ($nombre, $nota1, $nota2, $nota3){

            //calculamos el promedio
            $promedio =($nota1 + $nota2 + $nota3)/3;
            $comentario="";

            //Asignamos un comentario al promedio
            if($promedio >= 9){
                $comentario = "Excelente";
            }elseif($promedio >= 7){
                $comentario = "Bien";
            }elseif($promedio >= 6){
                $comentario = "Regular";
            }else{
                $comentario ="Insuficiente";
            }
            
            //Mostramos el resultado formateado en HTML

            echo "<p><strong>Estudiante</strong> $nombre</p>";
            echo "<p><strong>Promedio</strong> $promedio</p>";
            echo "<p><strong>Comentario</strong>$comentario</p>";

            // condicional para mostrar si aprobo o no

            echo "<p><strong>Resultado</strong>" . ($promedio >= 6 ? "Aprobado" : "Suspenso") . "</p>";
        };

        evaluarEstudiante("Mamen", 6, 7, 9);
    
    ?>
    
</body>
</html>