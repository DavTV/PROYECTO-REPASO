<?php
    include("conexion.php");
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $imagen = $_FILES["imagen"];
    // $oferta = $_POST["oferta"];
    $categoria = $_POST["categoria"];
    $comentario = $_POST["comentario"];
    
    if(empty($nombre) || empty($precio) || empty($imagen) || empty($categoria)){
        echo "Hay campos obligatorios que están vacios";
    }else{
        $rutaDestino = $_SERVER["DOCUMENT_ROOT"]."/PROYECTO REPASO/IMG/IMG_PRODUCTOS/". $imagen["name"];
        // echo $rutaDestino;
        $rutaBd = "IMG/IMG_PRODUCTOS/" . $imagen["name"];
        move_uploaded_file($imagen["tmp_name"],$rutaDestino);
        
        $consulta = "INSERT INTO `producto`( `nombre_p`, `precio`, `fk_categoria`, `descripcion`, `imagen`) VALUES ('$nombre','$precio','$categoria','$comentario','$rutaBd')";

        $resultado =  $conex -> query($consulta);

        if($resultado){
            echo "Exito";
        }else{
            echo "Fracaso";

        }
    }
        
?>