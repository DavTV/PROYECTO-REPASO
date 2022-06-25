
AbrirMenu();
Slider();
Busqueda();
MandarCategoria();
AbrirModalBusqueda();
function AbrirMenu(){
    const btn = document.getElementById("abrir-menu");
    const menu = document.getElementById("menu-movil");
    btn.addEventListener("click",function(){
        menu.classList.toggle("d-none");
    })
}

function Slider(){
    if(document.getElementById("owl-1")!== null){
        
        $('#owl-1').owlCarousel({
            loop:true,
            margin:10,
            // autoplay:true,
            // autoplayTimeout: 2000,
            nav:false,
            
            responsive:{
                0:{
                    items:2
                },
                800:{
                    items:4
                },
                1000:{
                    items:6
                }
            }
        })
        $('#owl-2').owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout: 5000,
            nav:false,
            
            responsive:{
                0:{
                    items:2
                },
                800:{
                    items:4
                },
                1000:{
                    items:6
                }
            }
        })
    }
}

// function Busqueda(){
//     document.getElementById("form-busqueda").addEventListener("submit", function (e) { 
//          e.preventDefault();
//          let valor = e.target.querySelector("input").value;
         
//         // console.log( $("#form-busqueda") );
//         $.ajax({
//             type: "get",
//             url: "PHP/obtenerBusqueda.php",
//             data: {producto:valor},
//             success: function (response) {
                
//                 console.log('data :>> ', response);
//             }
//         });
//         //  $.get("PHP/obtenerBusqueda.php", data,
//         //      function (data) {
//         //      }
//         //  );
//      });
    
// }

function AbrirModalBusqueda(){
    document.getElementById("input-busqueda").addEventListener("click",function(){
        $("#busqueda").modal("show");
    }) 
    document.getElementById("form-busqueda").addEventListener("submit",function(e){
        e.preventDefault();
        $("#busqueda").modal("show");
    })
}

function Busqueda(){
    document.getElementById("input-modal-busqueda").addEventListener("keypress",function(e){
        let valor = e.target.value;
        AjaxBp(valor);
    });
    
    function AjaxBp(valor){
        const modalBodyBusqueda = document.getElementById("productosBuscados");
        modalBodyBusqueda.innerHTML="";
        $.ajax({
            type: "get",
            url: "PHP/obtenerBusqueda.php",
            data: {producto: valor},
            success: function (response) {
                console.log('response :>> ', response);
                let data  = JSON.parse(response);
                console.log('data :>> ', data);
                
                data.forEach(element => {
                    let div = document.createElement("div");
                    div.className= "producto col-6 col-md-4 col-lg-3";
                    div.innerHTML= `
                    
                    <figure >
                        <img class ="w-100" src="https://plazavea.vteximg.com.br/arquivos/ids/8655810-220-220/990763.jpg?v=637836641622030000" alt="">
                        <div class="text-center detalles">
                            <p class="nombre m-0 fw-bold" >${element.nombre}</p>
                            <p class="m-0 text-danger fw-bold" >S/ <span>${element.precio}</span> </p>
                            <div class="d-flex btn-group my-2">
                                <input type="number" class="form-control">
                                <button class="text-white btn bg-color-btn agregar" data-id=${element.id}>Agregar</button>
                            </div>
                        </div>
                    </figure>
                    
                    `;
                    modalBodyBusqueda.appendChild(div);
                });
            }
        });

    }
    
}


function MandarCategoria() {
        const categorias = document.getElementById("categorias");
        if(categorias !== null){
                categorias.addEventListener("click",(e) =>{
                let categoria = e.target.alt;
                localStorage.setItem("categoria", categoria);
                window.location.href = "catalogo.php";
            })
        }
}