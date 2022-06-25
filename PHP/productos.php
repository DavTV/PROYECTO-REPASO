<?php
    include 'conexion.php';
    $consulta= "SELECT * FROM Producto ORDER BY id desc";
    // echo $consulta; 
    $resultado = $conex->query($consulta);
   

?> 