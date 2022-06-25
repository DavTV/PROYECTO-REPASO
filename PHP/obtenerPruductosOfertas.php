<?php
    include("conexion.php");
    $consulta = "SELECT * FROM producto JOIN producto_x_oferta ON producto.id = producto_x_oferta.fk_productos JOIN ofertas ON producto_x_oferta.fk_ofertas = ofertas.id";
    $resultado = $conex->query($consulta);

?>