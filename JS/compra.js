const carrito = new Carrito();
const d = document;
const productos = d.getElementById("owl-2")||d.getElementById("pCatalogo");
const tbody = d.getElementById("tbody");
const productosOferta = d.getElementById("owl-1");
//Estuvie llamando a table pero el botón estaba en el modal, más especificamente en el footer 
const modalFooter =d.querySelector(".modal-footer");

const modalBusqueda =d.getElementById("productosBuscados");
// console.log('modalBusqueda :>> ', modalBusqueda);


productos.addEventListener("click", (e) =>{
    carrito.ObtenerItem(e);
})

modalBusqueda.addEventListener("click",(e)=>{
    carrito.ObtenerItem(e);
});


if(productosOferta !== null){
    productosOferta.addEventListener("click", (e)=>{
        carrito.ObtenerItem(e);
    });
}

tbody.addEventListener("click", (e)=>{
    carrito.EliminarProductoCarrito(e);
});

//Invocamos a la función del carrito
modalFooter.addEventListener("click",(e)=>{
    carrito.EnviarPedidoWhatsapp(e);
});

window.addEventListener("load", carrito.CargarCarritoLocalStorage());
