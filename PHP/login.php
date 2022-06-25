<?php

    include("conexion.php");
    if(isset($_POST["btn-enviar"])){
        if(!empty($_POST["usuario"]) && !empty($_POST["password"])){
            $usuario = $_POST["usuario"];
            $password = $_POST["password"];
            echo $usuario, $password;

            $consulta = "SELECT *  FROM usuarios WHERE usuario = '$usuario' AND rol ='admin'";
            $resultado = $conex->query($consulta);

            if(mysqli_num_rows($resultado)==1){
                // !cuenta las filas afectadas por la consulta
                while ($fila= $resultado->fetch_assoc()) {
                    # code...
                    if(password_verify($password,$fila["contrasenia"])){

                        session_start();
                        $_SESSION["usuario"] = $usuario; 
                        header("Location: home.php");
                    }
                }
            }else{
                // echo "Usuario desconocido";
               header("Location: login.php");

            }

        }else{
            echo "Llene todos los datos primero";
        }
    }
    

?>