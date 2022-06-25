<?php
    include("conexion.php");
   
        $nombre = $_POST["nombre"];
        $fInicio = $_POST["f-inicio"];
        $fFin = $_POST["f-fin"];
        $descuento = $_POST["descuento"];
        if(empty($nombre) || empty($fInicio) || empty($fFin) ||  empty($descuento) ){
            echo  "Llene todos los campos primero";
        }else{
            $consulta = "INSERT INTO `ofertas`(`nombre_o`, `fecha_inicio`, `fecha_fin`, `descuento`, `activo`) VALUES('$nombre','$fInicio','$fFin','$descuento','1')";
            $resultado = $conex->query($consulta);

            if($resultado){
                echo "Exito";
            }
            else{
                echo "Error";
            }

        }
    

?>