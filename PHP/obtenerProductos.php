<?php
    include 'conexion.php';
    if(empty($_GET["categoria"])){
        $categoria = 1;
    }else{
        $categoria = $_GET["categoria"];
    }
    $consulta= "SELECT * FROM Producto WHERE fk_categoria =$categoria";
    // echo $consulta; 
    $resultado = $conex->query($consulta);
   


?> 