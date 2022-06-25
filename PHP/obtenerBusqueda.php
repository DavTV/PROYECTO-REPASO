<?php
    
    include 'conexion.php';

     $producto = $_GET["producto"];
    
    $consulta= "SELECT * FROM producto WHERE nombre LIKE '%$producto%'";
    // var_dump($consulta); 
    $resultado = $conex->query($consulta);

    $data = array();
    while ($fila = $resultado->fetch_assoc()) {
            array_push($data,$fila);
    }

    echo json_encode($data);
    
?>