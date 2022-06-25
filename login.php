<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="IMG/logo.png">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/loginRegistro.css">
  </head>
    <?php
        session_start();
        if(!empty($_SESSION["usuario"])){
            header("Location: home.php");
        }
    ?>
  <body class="bg-fondo">
        <div class="container">
            <div class="row p-2  d-flex justify-content-center align-items-center">
                <form class="p-3 col-12 col-md-6 shadow rounded bg-form" method="post">
                    <img src="IMG/logo.png" alt="..." class="logo d-block mx-auto mb-3" width="50">
                    <div class="mb-3">
                        <label for="usuario">Usuario</label>
                        <input type="text" id="usuario" class="form-control" name="usuario">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" name="password">
                    </div>
                    <div class="d-flex justify-content-between">
                        <button class="btn bg-fondo text-white" name="btn-enviar">Login</button>
                        <a href="registro.php" class="d-block text-white">Registrarse</a>
                    </div>

                    <?php include("PHP/login.php") ?>
                </form>
            </div>
        </div>  
  </body>
</html>