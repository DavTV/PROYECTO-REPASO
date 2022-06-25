<?php
    include("conexion.php");
    $consulta = "SELECT * FROM ofertas";
    $resultado = $conex->query($consulta);

?>