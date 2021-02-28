$(window).on('load',function(){

})

function saveContacto(){
    var dataRegistrado= new FormData(document.getElementById("contacto"))
    $.ajax({
        type: 'POST',
        url: 'saveContacto',
        data: dataRegistrado,
        processData: false,
        contentType: false,
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
        success: function(resp){
            $("#cargando").modal("hide")
            if(resp.ESTADO == "OK"){
                Swal.fire({
                    icon: 'success',
                    title: 'Exitoso',
                    text: 'solicitud registrada',
                    timer: 2000,
                    showConfirmButton: false,
                })
                setTimeout(function(){
                    location.href="/";
                },2000)
            }
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'ya se encuentra registrado',
                timer: 2000,
                showConfirmButton: false,
            })
        }
    });
}