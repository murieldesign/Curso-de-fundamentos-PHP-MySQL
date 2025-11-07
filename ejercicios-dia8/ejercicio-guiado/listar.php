<?php 
    include(__DIR__ . "/conexion.php");

    //consultar todos los registros
    $resultado = $conexion->query("SELECT * FROM usuarios");

    //mostrar tabla en html
    echo "<table border='1' cellpadding='6'>
    <tr><th>ID</th><th>Nombre</th><th>Email</th><th>Fecha</th></tr>";

    while($fila = $resultado->fetch_assoc()){
        echo "<tr>
                <td>{$fila['id']}</td>
                <td>{$fila['nombre']}</td>
                <td>{$fila['email']}</td>
                <td>{$fila['creado']}</td>
        
                </tr>";
    }
    echo "</table>";
?>

