<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function saludar($nombre){
        return "Hola $nombre";
    }
    echo saludar("Paco");



    function sumaTres($a,$b,$c){
        return $a + $b + $c;
    }
    echo sumaTres(7,5,2);



    function esMayorDeEdad($edad){
        return $edad >= 18;  
    }

    if(esMayorDeEdad(20)){
        echo "Es mayor de edad";
    }else{
        echo"Es menor de edad";
    }

    function sumaArray($numeros){
        $sumar = 0;
        foreach ($numeros as $numero){
            $suma += $numero;
        }
        return $suma;

    }

    $lista =[1,2,3,4];
    echo sumaArray($lista);


    function maximo($a , $b){
        return ($a > $b) ? $a : $b;
    }
    echo maximo(7,10);


    ?>    
</body>
</html>