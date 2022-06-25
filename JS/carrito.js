class Carrito {
  ObtenerItem(e) {
    if (e.target.classList.contains("agregar")) {
      let producto;
      producto =
        e.target.parentElement.parentElement.parentElement.parentElement;
      console.log(producto);
      this.ObtenerProducto(producto);
    }
  }

  ObtenerProducto(producto) {
    let imagen, nombre, precio, cantidad, subtotal, id;
    if (producto.querySelector("input").value <= 0) {
      // alert("Tiene que elegir una cantidad");
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Tiene que elegir una cantidad!",
        confirmButtonColor: "#1684ce",
      });
    } else {
      // console.log(producto.querySelector("button").getAttribute("data-id"));
      imagen = producto.querySelector("img").src;
      nombre = producto.querySelector(".nombre").textContent;
      precio = producto.querySelector("span").textContent;
      cantidad = producto.querySelector("input").value;
      subtotal = parseFloat(precio) * parseFloat(cantidad);
      id = producto.querySelector("button").getAttribute("data-id");
      console.log(imagen, nombre, precio, cantidad, subtotal);
      producto = {
        id: id,
        imagen: imagen,
        nombre: nombre,
        precio: precio,
        cantidad: cantidad,
        subtotal: subtotal,
      };
      this.AgregarCarrito(producto);
      this.AgregarProductoLocalStorage(producto);

      Swal.fire({
        icon: "success",
        title: "Exito...",
        text: "Producto agregado fatisfactoriamente!",
        confirmButtonColor: "#1684ce",
      });
      // alert("Producto Agregado Correctamente");
    }
  }

  AgregarCarrito(producto) {
    const tbody = d.getElementById("tbody");
    const tr = d.createElement("tr");
    tr.innerHTML = `
            <td width="100"><img class="w-100" src="${producto.imagen}"/></td>
            <td>${producto.nombre}</td>
            <td>${producto.precio}</td>
            <td>${producto.cantidad}</td>
            <td>${producto.subtotal}</td>
            <td>
                <button class="btn btn-danger fa-solid fa-trash-can eliminar" data-id="${producto.id}">
                </button>
            </td>
        `;

    tbody.appendChild(tr);
  }

  EliminarProductoCarrito(e) {
    if (e.target.classList.contains("eliminar")) {
      let id = e.target.getAttribute("data-id");

      Swal.fire({
        text: "Estas Seguro de eliminar este producto?",
        // text: "Si eliminas este producto!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#1684ce",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, Eliminar!",
      }).then((result) => {
        if (result.isConfirmed) {
          this.EliminarProductoLocalStorage(id);
          e.target.parentElement.parentElement.remove();

          Swal.fire("Eliminado!", "Tu producto fue eliminado.", "success");
        }
      });
    }
  }

  AgregarProductoLocalStorage(producto) {
    let productos = this.ObtenerProductoLocalStorage();
    productos.push(producto);
    localStorage.setItem("carrito", JSON.stringify(productos));
    this.CalcularCostoTotal();
  }

  ObtenerProductoLocalStorage() {
    let productos;
    if (localStorage.getItem("carrito") == null) {
      productos = [];
    } else {
      productos = JSON.parse(localStorage.getItem("carrito"));
    }
    return productos;
  }

  EliminarProductoLocalStorage(productoId) {
    let productos = this.ObtenerProductoLocalStorage();
    productos.forEach(function (element, index) {
      if (element.id === productoId) {
        productos.splice(index, 1);
      }
    });
    localStorage.setItem("carrito", JSON.stringify(productos));
    this.CalcularCostoTotal();
  }

  CargarCarritoLocalStorage() {
    let productos = this.ObtenerProductoLocalStorage();
    productos.forEach((element) => {
      this.AgregarCarrito(element);
    });
    this.CalcularCostoTotal();
  }
  CalcularCostoTotal() {
    let productos = this.ObtenerProductoLocalStorage();
    let total = 0;
    productos.forEach((element) => {
      total = total + element.precio * element.cantidad;
    });
    // console.log('total :>> ', total.toFixed(2));
    document.getElementById("total").textContent = total.toFixed(2);
    return total.toFixed(2);
  }



  EnviarPedidoWhatsapp(e){
    if(e.target.classList.contains("enviarW")){
        let productos = this.ObtenerProductoLocalStorage();
        let aux = "";
        let link; 
        productos.forEach(el => {
          aux = aux +"[ nombre: "+ el.nombre+" -> precio: " + el.precio+" -> cantidad: " + el.cantidad +" -> subtotal: "+ el.subtotal+"] ";

          link = "https://api.whatsapp.com/send?phone=51979895362&text=Hola,%20me%20interesar%C3%ADa%20comprar%20los%20siguientes%20productos%20" + aux +
         "%20con%20un%20total%20de%20" +  this.CalcularCostoTotal();
        });

        let enlace = document.createElement("a");
        enlace.href= link;
        enlace.click();
    }
  }

  // EnviarPedidoWhatsapp(e) {
  //   if (e.target.classList.contains("enviarW")) {
  //     let productos = this.ObtenerProductoLocalStorage();
  //     let aux = "";

  //     productos.forEach((element) => {
  //       aux =
  //         aux +
  //         "[ nombre: " +
  //         element.nombre +
  //         " -> precio: " +
  //         element.precio +
  //         " -> Cantidad: " +
  //         element.cantidad +
  //         "] ";
  //     });

  //     let link =
  //       "https://api.whatsapp.com/send?phone=51979895362&text=Hola,%20me%20interesar%C3%ADa%20comprar%20los%20siguientes%20productos%20" +
  //       aux +
  //       "%20con%20un%20total%20de%20" +
  //       this.CalcularCostoTotal();

  //     let a = document.createElement("a");
  //     a.href = link;
  //     console.log("aux :>> ", aux);
  //     a.click();
  //   } else {
  //     console.log("no es el botón enviar");
  //   }}
}