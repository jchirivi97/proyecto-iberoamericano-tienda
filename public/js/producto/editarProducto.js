var validador;
$(window).on('load',function(){
    getProducto()

    validador=$("#editar").validate({
        rules:{
            codigo:{
                required: true
            },
            nombre:{
                required: true
            },
            valor:{
                required: true
            },
            disponible:{
                required: true
            },
            categoria:{
                required: true
            },
            descripcion:{
                required: true,
            }
        },
        messages:{
            codigo:{
                required: "campo requerido"
            },
            nombre:{
                required: "campo requerido"
            },
            valor:{
                required: "campo requerido"
            },
            disponible:{
                required: "campo requerido"
            },
            categoria:{
                required: "campo requerido"
            },
            descripcion:{
                required: "campo requerido",
            }
        }
    })
})

function getProducto(){
    var data = parseInt(localStorage.getItem("producto"));
    $.ajax({
        type: 'GET',
        url: 'getProduct/'+data,
        data: {},
        xhr: function() {
            var xhr = $.ajaxSettings.xhr();
            $("#cargando").modal("show")
            xhr.upload.onprogress = function(e) {
                if (e.lengthComputable) {
                    $("#progresar").text("Por favor espere... " + parseInt((e.loaded / e.total) * 100))
                }
            };
            return xhr;
        },
        success:function(resp){
            $("#cargando").modal("hide")
            $("#codigo").val(resp[0].codigo);
            $("#nombre").val(resp[0].nombre);
            $("#valor").val(resp[0].valor);
            $("#disponible").val(resp[0].disponible);
            $("#categoria").val(resp[0].categoria);
            $("#descripcion").val(resp[0].descripcion);
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'El producto ya se encuentra registrado el producto',
                timer: 2000,
                showConfirmButton: false,
              })
        }
    })
}


function EditarProducto(){
    var dataUpdate={
        "categoria": $("#categoria").val(),
        "codigo": $("#codigo").val(),
        "descripcion": $("#descripcion").val(),
        "disponible": $("#disponible").val(),
        "nombre": $("#nombre").val(),
        "valor": $("#valor").val()
    }
    if(validador.form()){
        $.ajax({
            type: 'PUT',
            url: 'updateProduct',
            data: dataUpdate,
            success:function(resp){
                $("#cargando").modal("hide")
                if(resp.ESTADO == "OK"){
                    Swal.fire({
                        icon: 'success',
                        title: 'Exitoso',
                        text: 'El producto ha sido modificado',
                        timer: 2000,
                        showConfirmButton: false,
                    })
                    setTimeout(function(){
                        //location.reload();
                    },2000)
                    
                }
            },
            error : function(XMLHttpRequest, textStatus, errorThrown) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'No es posible modificar el producto',
                    timer: 2000,
                    showConfirmButton: false,
                })
            }
        })
    }else{
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Faltan campos por completar',
            timer: 2000,
            showConfirmButton: false,
        })
    }
}
