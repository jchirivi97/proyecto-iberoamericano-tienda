
$(window).on('load',function(){
    getTotalVentas()
    getAllContactos()
})


function getTotalVentas(){
    $.ajax({
        type: "GET",
        data: {},
        url: "/totalVentas",
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
            $(".card-text").text("$  " + new Intl.NumberFormat().format(resp))
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Usuario o contraseña invalida o Usuario no existe",
                timer: 3000,
                showConfirmButton: false,
            });
        }
    })
}

function getAllContactos(){
    $.ajax({
        type: "GET",
        data: {},
        url: "/getAllContacto",
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
            if(resp.length > 0){
                resp.map((contato,index)=>{
                    var fila=`
                    <tr>
                    <th scope="row">${index+1}</th>
                    <td>${contato.nombres}</td>
                    <td>${contato.telefono}</td>
                    <td>${contato.correo}</td>
                    <td>${contato.observacion}</td>
                    </tr>
                    `
                    $("tbody").append(fila)
                })
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Usuario o contraseña invalida o Usuario no existe",
                timer: 3000,
                showConfirmButton: false,
            });
        }
    })}