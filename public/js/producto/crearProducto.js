var url
var validador;
$(window).on("load",function(){
    validador=$("#crear").validate({
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

function saveProducto(){
    var data = new FormData(document.getElementById('crear'));
    data.append('url',url);
    if(validador.form()){
        if($('#imagen').val()!=''){
            $.ajax({
                type: 'POST',
                url: 'saveProduct',
                data: data,
                processData: false,
                contentType: false,
                success:function(resp){
                    if(resp.ESTADO == "OK"){
                        Swal.fire({
                            icon: 'success',
                            title: 'Exito',
                            text: 'El producto ha sido registrado',
                            timer: 2000,
                            showConfirmButton: false,
                        })
                        setTimeout(function(){
                            location.href="/listProd";
                        },2000)
                    }
                },
                error : function(XMLHttpRequest, textStatus, errorThrown) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'El producto ya se encuentra registrado',
                        timer: 2000,
                        showConfirmButton: false,
                    })
                }
            })
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No ha seleccionado una imagen para el producto',
                timer: 2000,
                showConfirmButton: false,
            }) 
        }
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


$("#imagen").change(function(event){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(event) {
        var img = document.getElementById('imagenShow');
        url=event.target.result;
        console.log("ulr: "+ event.target.result)
        img.src= event.target.result;
    }
    reader.readAsDataURL(file);
})

$("#codigo").change(function(){
    $.ajax({
        type: 'GET',
        url: 'getProduct/'+$("#codigo").val(),
        data: {},
        success: function(resp){
            if(resp.length >= 1){
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'El codigo del producto ya esta registrado',
                    timer: 3000,
                    showConfirmButton: false,
                })
                $("#codigo").val("");
            }   
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'El usuario ya se encuentra registrado',
                timer: 2000,
                showConfirmButton: false,
            })
        }
    })
})