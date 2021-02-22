var validador;

$(window).on('load',function(){
    validador=$("#registrar").validate({
        rules:{
            nombre:{
                required: true
            },
            apellido:{
                required: true
            },
            tipo:{
                required: true
            },
            documento:{
                required: true
            },
            direccion:{
                required: true
            },
            correo:{
                required: true,
                email: true
            },
            celular:{
                required: true,
            },
            nickname:{
                required: true
            },
            password:{
                required: true
            },
            passwordRep:{
                required: true
            }
        },
        messages:{
            nombre:{
                required: "campo requerido"
            },
            apellido:{
                required: "campo requerido"
            },
            tipo:{
                required: "campo requerido"
            },
            documento:{
                required: "campo requerido"
            },
            direccion:{
                required: "campo requerido"
            },
            correo:{
                required: "campo requerido",
                email: "El formato debe ser correo: ejemplo@mail.com"
            },
            celular:{
                required: "campo requerido",
            },
            nickname:{
                required: "campo requerido"
            },
            password:{
                required: "campo requerido"
            },
            passwordRep:{
                required: "campo requerido"
            }
        }
    })
})

function registrar(){
    var dataRegistrado= new FormData(document.getElementById("registrar"))
    if(validador.form()){
        if($("#password").val() == $("#passwordRep").val()){
            $.ajax({
                type: 'POST',
                url: 'saveUser',
                data: dataRegistrado,
                processData: false,
                contentType: false,
                success: function(resp){
                    if(resp.ESTADO == "OK"){
                        Swal.fire({
                            icon: 'success',
                            title: 'Exitoso',
                            text: 'Usuario registrado',
                            timer: 2000,
                            showConfirmButton: false,
                        })
                        setTimeout(function(){
                            location.href="/login";
                        },1500)
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
            });
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Contraseñas no son iguales, verifique',
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

$("#nickname").change(function(){
    $.ajax({
        type: 'GET',
        url: 'getUser/'+$("#nickname").val(),
        data: {},
        success: function(resp){
            let len = resp.length-1;
            if(resp[len].ESTADO == "OK"){
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'El nickname ya esta registrado',
                    timer: 2000,
                    showConfirmButton: false,
                })
                $("#nickname").val("");
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