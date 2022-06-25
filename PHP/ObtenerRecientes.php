<?php
    include("conexion.php");
    $consulta = "SELECT * FROM producto ORDER BY fecha DESC LIMIT 10";
    $resultado = $conex->query($consulta);

?>