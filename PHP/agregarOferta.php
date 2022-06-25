<?php 

    if(isset($_POST["agregarOferta"])){
        if(empty($_POST["producto"]) || empty($_POST["oferta"])){
            echo "Lleno todos los campos primero";
        }else{
            $producto = $_POST["producto"];
            $oferta = $_POST["oferta"];

            $consulta = "INSERT INTO `producto_x_oferta` (`fk_productos`,`fk_ofertas`) VALUES('$producto','$oferta')";
            $resultado = $conex->query($consulta);

            if($resultado){
                echo "Exito";
            }else{
                echo "Error";
            }
        }
    }


?>