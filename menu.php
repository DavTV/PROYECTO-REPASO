
      <header class="shadow bg-fondo">
            <div class="menu-disparador py-2 px-3 text-end  d-md-none" id="abrir-menu">
                <button class="btn"><i class="fa-solid fa-bars fs-2 botones-menu"></i></button>
            </div>
            <div class="container d-none d-md-flex justify-content-between align-items-center py-2" id="menu-movil">
                <div class="text-center">
                    <figure class="m-0 my-2">
                        <a href="index.php">
                            <img src="IMG/logo.png" alt="..." class="logo">
                        </a>
                    </figure>
                </div>
                <div class="contenedor-buscar">
                    <form  class="input-group" id="form-busqueda">
                        <input type="text" class="form-control" id="input-busqueda">
                        <button class="btn bg-color-lupa" >
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <div class="">
                    <div class="d-flex justify-content-around my-2">
                        <div class="sesion">
                            <a href="login.php" class="nav-link fs-3 botones-menu" target="_blank" ><i class="fa-solid fa-user"></i></a>
                        </div>
                        <div class="carrito">
                            <button class="btn fs-3 botones-menu" data-bs-toggle="modal" data-bs-target="#carrito"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                        <div class="catalogo">
                            <a href="catalogo.php" class="nav-link fs-3 botones-menu"><i class="fa-solid fa-shop"></i></a>
                        </div>
                    </div>
                </div>
            </div>
      </header>
      <!-- Modal Carrito -->
        <div class="modal fade" id="carrito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header bg-boton">
                <h5 class="modal-title text-white" id="exampleModalLabel">CARRITO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
            </div>
            <div class="modal-body">
                <p class="fw-bold color">S/ <span id ="total">00:00</span></p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Sub-total</th>
                        <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        
                    </tbody>
                </table>
                </div>    
            
            </div>
            <div class="modal-footer">

                <button type="button" class="btn bg-boton text-white enviarW"><i class="fa-brands fa-whatsapp"></i> Realizar pedido</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Modal Busqueda -->
        <div class="modal fade" id="busqueda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header bg-boton">
                <h5 class="modal-title text-white" id="exampleModalLabel">BUSCA TU PRODUCTO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" >
                <div class="mb-3">
                    <input type="text"  id="input-modal-busqueda" class="form-control" placeholder="Producto..." >
                </div>
                <div class="productosBuscados row" id="productosBuscados" ></div>

            </div>

            </div>
        </div>
        </div>


  