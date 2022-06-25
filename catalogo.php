<!doctype html>
<html lang="en">
  <head>
    <title>CATALOGO PRODUCTOS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="IMG/logo.png">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="CSS/catalogo.css">
  </head>
  <body>
      <?php
        include_once "menu.php";
      ?>
      <div class="container">
          <br>
         <div class="row p-3">
             <div class="col-12 col-md-3 mb-5">
                <div class="list-group ">
                    <a   class="list-group-item list-group-item-action active">FILTRO</a>
                    <a  href="catalogo.php?categoria=1" class="list-group-item list-group-item-action">Carnes</a>
                    <a  href="catalogo.php?categoria=2" class="list-group-item list-group-item-action">Cereales</a>
                    <a  href="catalogo.php?categoria=3" class="list-group-item list-group-item-action">Frutas</a>
                    <a  href="catalogo.php?categoria=4" class="list-group-item list-group-item-action">Verduras</a>
                    <a  href="catalogo.php?categoria=5" class="list-group-item list-group-item-action">Lacteos</a>
                    <a  href="catalogo.php?categoria=6" class="list-group-item list-group-item-action">Galletas</a>
                </div>
                <br>
              <div class="texto d-none d-md-block">
                <p class="text-primary fw-bold m-0 textoR">Texto de Relleno</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis error repellendus excepturi quas pariatur eligendi.</p>
              </div>
             </div>
            <div class="col-12 col-md-9" >
                <div class="row" id="pCatalogo">
                    <?php include("PHP/obtenerProductos.php");
                        $count = 0;
                            while ($fila = $resultado->fetch_assoc()){
                                $count++;
                                ?>
                                 <div class="producto col-6 col-md-4 col-lg-3">
                                    <figure >
                                        <img class ="w-100" src="<?php echo $fila["imagen"]; ?>" alt="<?php echo $fila["nombre_p"]; ?>">
                                        <div class="text-center detalles">
                                            <p class="nombre m-0 fw-bold" ><?php echo $fila["nombre_p"]; ?></p>
                                            <p class="m-0 text-danger fw-bold" >S/ <span><?php echo $fila["precio"];?></span> </p>
                                            <div class="d-flex btn-group my-2">
                                                <input type="number" class="form-control">
                                                <button class="text-white btn bg-color-btn agregar" data-id=<?php $fila["id"] ?>>Agregar</button>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                            
                                <?php
                            }
                            if ($count <=0) {
                                echo "<h2 class='text-center'>Aún no hay productos en esta categoría.</h2>";
                            }
                    ?> 

                </div>
            </div>

         </div>
      </div>
      <!-- traer un arreglo en json de la bd e ir filtrandolo por categoria -->
    <!-- <script src="JS/jquery-3.6.0.min.js"></script> -->
    <script src="JS/jquery-3.6.0.min.js"></script>    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="JS/bootstrap.js"></script>
   <script src="JS/main.js"></script>
   <script src="JS/carrito.js"></script>
    <script src="JS/compra.js"></script>
    <!-- <script src="JS/catalogo.js"></script> -->
  </body>
</html>