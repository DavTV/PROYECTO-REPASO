FormularioPanel();
CrearOferta();
function FormularioPanel(){
    const form = document.querySelector("#id-form-panel");
    form.addEventListener("submit",function(e){
            e.preventDefault();
            let fd = new FormData(e.target);
            // console.log('fd :>> ', fd.get("nombre"));
            $.ajax({
                type: "post",
                url: "PHP/formPanel.php",
                data: fd,
                processData: false,  
                contentType: false,
                success: function (response) {
                    console.log('response :>> ', response);
                    $("#respuesta").text(response);
                    if(respuesta === "Exito"){

                        form.reset()
                    }

                }
            });
    });
}

function CrearOferta(){
    const formCrear = document.getElementById("formCrearOferta");
    console.log('formCrear :>> ', formCrear);
    formCrear.addEventListener("submit", function(e){
        e.preventDefault();
        let fd = new FormData(formCrear);
        $.ajax({
            type: "post",
            url: "PHP/crearOferta.php",
            data: fd,
            processData: false,  
            contentType: false,
            success: function (response) {
                alert(response);
                formCrear.reset();
            }
        });

    })
}