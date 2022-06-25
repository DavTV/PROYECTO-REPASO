<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="IMG/logo.png">

    <!-- Bootstrap CSS v5.2.0-beta1 -->

    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="CSS/loginRegistro.css">
  </head>
  <body>
      <?php
        session_start();
        if(empty($_SESSION["usuario"])){
            header("Location: login.php");
        }
      ?>
      <h1 class="text-center text-white bg-form p-5">PANEL DE CONTROL - HOME</h1>
      <div class="container">
        <?php include("miniMenu.php"); ?>

        <h2 class="text-center mt-5 fw-bold">Agregar un nuevo producto</h2>
          <form class="p-3 col-12 col-md-8 col-lg-6 shadow rounded bg-form mx-auto my-4" id="id-form-panel"  enctype="multipart/form-data">
                      
                  <img src="IMG/logo.png" alt="..." class="logo d-block mx-auto mb-3" width="50">
                    
                      <div class="mb-3">
                          <!-- <label for="producto" class="form-label">Producto</label> -->


                          <input type="text"  class="form-control"  name="nombre" placeholder="Nombre del producto" require>
                      </div>
                      <div class="mb-3">
                          <!-- <label for="precio" class="form-label">Precio</label> -->
                          <input type="number" name="precio" class="form-control"  placeholder="Precio del producto" step="any" min="0" require>
                      </div>
                      <div class="mb-3">
                          <input type="file" class="form-control" name="imagen" aria-describedby="inputGroupFileAddon04" aria-label="Upload" require>
                      </div>

                        <div class="mb-3">
                            <select name="categoria" class="form-select" require>
                                <option value="">Categorias</option>
                                <?php include("PHP/categorias.php");
                                while ($fila= $resultado->fetch_assoc()){
                                      ?>
                                          <option value=<?php echo $fila["id"] ?>><?php echo $fila["nombre"]; ?></option>

                                      <?php
                                        }
                                      
                                      ?>    
                              
                              </select>
                      </div>


                      <div class="mb-3">
                            <textarea class="form-control" name="comentario" rows="3" placeholder="Descripción del producto"></textarea>
                      </div>
                      
                      
                          <button class="btn bg-fondo text-white d-block mx-auto w-50" name="btn-enviar">Registro</button>
                         

                          <span id="respuesta"></span>
                    

          </form>

        <div class="row my-4">
          <div class="col-12 col-md-6">
              <h2 class="text-center fw-bold mt-5 mb-3">Crear una nueva oferta</h2>
                  <form   id="formCrearOferta"  >
                  <div class="mb-3">
                          <!-- <label for="producto" class="form-label">Producto</label> -->


                          <input type="text"  class="form-control"  name="nombre" placeholder="Nombre de la oferta" require>
                      </div>
              
                      <div class="mb-3">
                          <!-- <label for="precio" class="form-label">Precio</label> -->
                          <input type="date" name="f-inicio" class="form-control"  placeholder="Fecha Inicio" require>
                      </div>
                      <div class="mb-3">
                          <!-- <label for="precio" class="form-label">Precio</label> -->
                          <input type="date" name="f-fin" class="form-control"  placeholder="Fecha Fin" require>
                      </div>
                      <div class="mb-3">
                          <!-- <label for="precio" class="form-label">Precio</label> -->
                          <input type="number" name="descuento" class="form-control"  placeholder="Descuento" require>
                      </div>
                      <button class="btn bg-fondo text-white" name="crearOferta">
                                        Crear Oferta 
                      </button> 
                      <br>
                      <!--  -->
                  </form>
            </div>
            <div class="col-12 col-md-6">
              <h2 class="text-center mt-5 mb-3 fw-bold">Agragar oferta</h2>

              <form method="POST">
              <div class="mb-3">
                                <select name="oferta" class="form-select" require>
                                    <option value="">Ofertas</option>
                                    <?php include("PHP/ofertas.php");
                                    while ($fila= $resultado->fetch_assoc()){
                                          ?>
                                              <option value=<?php echo $fila["id"] ?>><?php echo $fila["nombre_o"]; ?></option>
    
                                          <?php
                                            }
                                          
                                          ?>    
                                  
                                  </select>
                          </div>
                          <div class="mb-3">
                                <select name="producto" class="form-select" require>
                                    <option value="">Productos</option>
                                    <?php include("PHP/productos.php");
                                    while ($fila= $resultado->fetch_assoc()){
                                          ?>
                                              <option value=<?php echo $fila["id"] ?>><?php echo $fila["nombre_p"]; ?></option>
    
                                          <?php
                                            }
                                          
                                          ?>    
                                  
                                  </select>
                                </div>
                                <button class="btn bg-fondo text-white" name="agregarOferta">
                                        Agregar Oferta 
                                </button>
                                <br>
                                <?php include("PHP/agregarOferta.php"); ?>
              </form>
          </div>
        </div>
      </div>





    <script src="JS/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <script src="JS/panel.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function () {
    $('#example').DataTable({
      scrollX: true,
    });
    
});
      
</script>
  </body>
</html>