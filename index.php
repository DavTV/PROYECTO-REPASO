<!doctype html>
<html lang="en">
  <head>
    <title>TIENDA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="IMG/logo.png">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/menu.css">
 
  </head>
  <body>
    <?php include_once "menu.php";?>
    <!-- <br> -->
    <!-- <br> -->
      <div class="">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators btn-b">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active botones-bajos" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="botones-bajos"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class="botones-bajos"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="IMG/slider1.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="IMG/slider2.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="IMG/slider3.jpeg" class="d-block w-100" alt="...">
            </div>
          </div>
            <!-- modificar la alineación del flex d los botones -->
            <button class="carousel-control-prev justify-content-start" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <!-- modificar los tamaños de los span -->
              <span class="carousel-control-prev-icon anterior-posterior" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next  justify-content-end" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <!-- modificar los tamaños de los span -->
              <span class="carousel-control-next-icon anterior-posterior " aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
         
          
        </div>
        <!-- <br>
        <br> -->
        <div class="cont-zapatillas">
        <div class="container mb-2 p-3 text-dark ">
          <h2 class="text-center py-5 ">!Productos en oferta!</h2>
          <div class="owl-carousel" id="owl-1">
          <?php
                include_once "PHP/obtenerPruductosOfertas.php";
                // var_dump($resultado);
                $countO = 0;
                while($fila = $resultado->fetch_assoc()){
                  $countO++;
                
                    ?>
                    <div class="producto  item" >
                        <figure >
                            <img class ="w-100" src="<?php echo $fila["imagen"];?>" alt="">
                            <div class="text-center detalles">
                                <p class="nombre m-0 fw-bold" ><?php echo $fila["nombre_p"];?></p>
                                <p><?php echo $fila["nombre_o"];?></p>
                                <p>Descuto del <span><?php echo $fila["descuento"];?></span>%</p>
                                <p class="precio m-0 text-danger fw-bold" >S/ <span><?php echo $fila["precio"];?></span> </p>
                                <div class="d-flex btn-group my-2">
                                    <input type="number" class="form-control">
                                    <button class="text-white btn bg-color-btn agregar" data-id="1">Agregar</button>
                                </div>
                            </div>
                        </figure>
                    </div>
                <?php
                }
                if($countO<1){
                    echo "<h2 class='text-center'>Aún no hay ofertas disponibles</h2>";
                }
                ?>

        </div>
        </div>
        <div class="cont-productos">
        <div class="container mb-1 p-3 text-dark ">
         <div class="bg-color rounded">
         <h3 class="text-start py-2 px-3 mb-4 ">Lo más nuevo</h3>
         </div>
          <div class=" owl-carousel owl-theme" id="owl-2">
              <?php
                include_once "PHP/ObtenerRecientes.php";
                // var_dump($resultado);
                $countP=0;
                while($fila = $resultado->fetch_assoc()){
                    
                    $countP++;
                    
                    ?>
                <div class="producto  item" >
                  <figure >
                      <img class ="w-100" src="<?php echo $fila["imagen"];?>" alt="">
                      <div class="text-center detalles">
                          <p class="nombre m-0 fw-bold" ><?php echo $fila["nombre_p"];?></p>
                          <p class="precio m-0 text-danger fw-bold" >S/ <span><?php echo $fila["precio"];?></span> </p>
                          <div class="d-flex btn-group my-2">
                              <input type="number" class="form-control">
                              <button class="text-white btn bg-color-btn agregar" data-id="1">Agregar</button>
                          </div>
                      </div>
                  </figure>
                </div>
                <?php 
                    }
                    if($countP<1){
                        echo "<h2 class='text-center'>Aún no hay Productos recientes</h2>";
                    }
                ?> 

                  
            </div>
        
        </div>
        </div>
        <div class="container categorias" id="categorias">
          <div class="row mb-2">
              <div class="col-3 px-1">
                <!-- quitar el a y hacer que se pasen a la otra pestaña con el localstorage -->
                  <a href="catalogo.php?categoria=1">
                      <img src="https://storage.contextoganadero.com/s3fs-public/styles/noticias_one/public/ganaderia/field_image/2020-12/recetario_amantes_carne.jpg?itok=graynK-1" alt="carnes">
                  </a>
              </div>
              <div class="col-3 px-1">
                  <a href="catalogo.php?categoria=2">
                      <img src="https://static.vecteezy.com/system/resources/previews/002/422/582/non_2x/milk-realistic-advertising-illustration-vector.jpg" alt="lacteos">
                  </a>
              </div>
              <div class="col-6 px-1">
                  <a href="catalogo.php?categoria=3" >
                      <img src="https://i.ytimg.com/vi/6emltC4tNR4/maxresdefault.jpg" alt="cereales">
                  </a>
              </div>
          </div>
          <div class="row mb-2">
              <div class="col-6  px-1">
                  <a href="catalogo.php?categoria=4" >
                      <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/808ef019709263.562defce0ad0b.png" alt="frutas">
                  </a>
              </div>
              <div class="col-3  px-1">
                  <a href="catalogo.php?categoria=5" >
                      <img src="https://w7.pngwing.com/pngs/666/331/png-transparent-vegetable-vegetarian-cuisine-whole-food-advertising-vegetable-natural-foods-food-fruit.png" alt="vegetales">
                  </a>
              </div>
              <div class="col-3  px-1">
                  <a href="catalogo.php?categoria=6" >
                      <img src="https://previews.123rf.com/images/mitdesign/mitdesign1707/mitdesign170700092/82757552-anuncio-de-galletas-de-s%C3%A1ndwich-de-sabor-chocolate-con-elementos-de-embalaje-y-trigo-ilustraci%C3%B3n-3d.jpg" alt="galletas">
                  </a>
              </div>
          </div>
        </div>
        <div class="cont-footer bg-fondo p-4">
            <div class="container">
                <div class="row">
                <div class="col-12 col-md-4 text-center">
                    <p class="color fw-bold">Nuestra empresa</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing </p>
                        <p>elit. Necessitatibus enim neque perspiciatis earum corporis expedita, quaerat laudantium iure sunt ab cupiditate non quae iste laboriosam, tenetur quo, minima omnis perferendis.</p>
                        <div class="tarjetas">
                            <figure>
                               <img src="IMG/tarjetas.png" alt="" class="w-75">
                            </figure>
                        </div>

                    </div>
                    <div class="col-6 col-md-4 text-center">
                        <p class="color fw-bold">Nuestra empresa</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus enim neque perspiciatis earum corporis expedita </p>
                        <p class="d-none d-md-block"> quaerat laudantium iure sunt ab cupiditate non quae iste laboriosam, tenetur quo, minima omnis perferendis.</p>
                        <p class="color fw-bold">Libro de reclamaciones</p>
                        <a href=""><img src="IMG/libroReclamaciones.png" alt="libro reclamaciones" class="libroR"></a>

                    </div>
                   
                    <div class="col-6 col-md-4 text-center">
                      <P class="color fw-bold" >Atención por teléfono</P>
                      <p>Lunes a Viernes  00 - 00</p>
                      <p>Lunes a Viernes  00 - 00</p>

                      <P class="color fw-bold" >Atención por Whatsapp</P>
                      <p class="fs-4"> +51 657 765 00</p>
                      <p>Lunes a Viernes  00 - 00</p>
                      <div class="redes">
                        <a href="" class="fs-2 px-2 color"><i class="fa-brands fa-facebook-square"></i></a>
                        <a href="" class="fs-2 px-2 color"><i class="fa-brands fa-instagram-square"></i></a>
                        <a href="" class="fs-2 px-2 color"><i class="fa-brands fa-tiktok"></i></a>
                      </div>

                    </div>
                </div>
            </div>
        </div>


      </div>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/jquery-3.6.0.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="JS/main.js"></script>
    <script src="JS/carrito.js"></script>
    <script src="JS/compra.js"></script>
    <!-- <script>
        Busqueda();
        function Busqueda(){
            document.getElementById("form-busqueda").addEventListener("submit", function (e) { 
                e.preventDefault();
                let valor = e.target.querySelector("input").value;
                // console.log('data :>> ', {producto: valor});
                
                $.get("PHP/obtenerBusqueda.php", data,
                    function (data) {
                        console.log('data :>> ', data);
                    }
                );

                
            });
        
        }

    </script> -->
  </body>
</html>