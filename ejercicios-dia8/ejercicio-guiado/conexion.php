<?php 
// parametros de conexion
$conexion = new mysqli("localhost", "root", "", "curso_php2");

//verificamos que no hay errores
if($conexion->connect_error){
    die("Conexion fallida: " . $conexion->connect_error);
}

//Establocemos el conjunto de caracteres UTF8
mysqli_set_charset($conexion, "utf8");

echo "Conexion exitosa a la base de datos";

?>

