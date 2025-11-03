<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de estudiantes con notas</title>
</head>
<body>
    <?php
// Crear un array con varios estudiantes (nombre y nota)
        $estudiantes = [
            ["nombre" => "Ana", "nota" => 8.5],
            ["nombre" => "Luis", "nota" => 6.7],
            ["nombre" => "María", "nota" => 9.2],
            ["nombre" => "Carlos", "nota" => 5.8]
        ];

// Recorrer el array para mostrar los datos de cada estudiante
        echo "<h3>Listado de estudiantes</h3>";
        echo "<ul>";
        foreach ($estudiantes as $estudiante) {
            echo "<li>{$estudiante['nombre']} - Nota: {$estudiante['nota']}</li>";
        }
        echo "</ul>";

//  Añadir un nuevo estudiante al final del array
        $nuevoEstudiante = ["nombre" => "Sofía", "nota" => 7.9];
        $estudiantes[] = $nuevoEstudiante;

//  Mostrar el array actualizado
        echo "<h3>Listado actualizado</h3>";
        echo "<ul>";
        foreach ($estudiantes as $estudiante) {
            echo "<li>{$estudiante['nombre']} - Nota: {$estudiante['nota']}</li>";
        }
        echo "</ul>";
        ?>
    
</body>
</html>