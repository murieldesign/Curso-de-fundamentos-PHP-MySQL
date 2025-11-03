<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    //foreach lista

    /*$animales = ["Perro", "Gato", "Loro"];
    echo "<ul>";
    foreach ($animales as $animal){
        echo "<li>$animal</li>";
    }
    echo "</ul>";*/

    //for tabla

   /* $numeros =[10, 20, 30, 40];
    echo "<table border='1'>";
    for ($i = 0; $i < count($numeros); $i++){
        echo "<tr><td>$numeros[$i]</td></tr>";
    }

    echo "</table>";*/

    //foreach mutidimensional
    $productos =[
        ["nombre" => "Teclado", "Precio" => 25],
        ["nombre" => "Ratón", "Precio" => 15],
        ["nombre" => "Monitor", "Precio" => 200],
    ];
    foreach ($productos as $producto) {
        echo $producto ["nombre"] . $producto["Precio"] . "€". "<br>";
    }


    ?>
    
</body>
</html>