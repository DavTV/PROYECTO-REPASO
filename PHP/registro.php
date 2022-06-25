<?php

    include("conexion.php");
    if(isset($_POST["btn-enviar"])){
        if(!empty($_POST["nombre"]) && !empty($_POST["usuario"])  && !empty($_POST["password"])){

            $nombre = $_POST["nombre"];
            $usuario =$_POST["usuario"];
            // $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            // echo $password, $usuario, $nombre;

            $consulta = "INSERT INTO `usuarios`(`nombre`, `usuario`, `contrasenia`, `rol`) VALUES ('$nombre','$usuario','$password','user')";
            $resultado = $conex -> query($consulta);
            if($resultado){
                echo "Registro Exitoso, espera que el adminitrador te de acceso.";
            }

        }else{
            echo "Debe ingresar todos los datos primero.";
        }

    }
   

?>