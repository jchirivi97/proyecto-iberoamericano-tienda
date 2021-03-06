$(window).on("load", function () {
    if (localStorage.getItem("session") == null) {
        localStorage.setItem("session", 0);
    }
    if (localStorage.getItem("compras") == null) {
        localStorage.setItem("compras", JSON.stringify([]));
    }

    if (localStorage.getItem("session") == 1) {
        $("#hlogin").hide();
        $("#hcerrar").show();
    } else {
        $("#hlogin").show();
        $("#hcerrar").hide();
    }
});

function login() {
    $.ajax({
        type: "GET",
        url: "userLogin/" + $("#user").val() + "/" + $("#password").val(),
        data: {},
        xhr: function() {
            var xhr = $.ajaxSettings.xhr();
            $("#cargando").modal("show")
            xhr.upload.onprogress = function(e) {
                if (e.lengthComputable) {
                    console.log("hola")
                    $("#progresar").text("Por favor espere... " + parseInt((e.loaded / e.total) * 100))
                }
            };
            return xhr;
        },
        success: function (resp) {
            $("#cargando").modal("hide")
            if (resp.ESTADO == "OK") {
                localStorage.setItem("session", 1);
                localStorage.setItem("user",resp.DATA.nickname)
                if (resp.DATA.nickname == "admin") {
                    //location.href="/admin";
                } else {
                    //location.href="/";
                }
            }else{
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Usuario o contraseña invalida o Usuario no existe",
                    timer: 3000,
                    showConfirmButton: false,
                }); 
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            $("#cargando").modal("hide")
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Usuario o contraseña invalida o Usuario no existe",
                timer: 3000,
                showConfirmButton: false,
            });
        },
    });
}

function cerrar(){
    localStorage.setItem("session", 0);
    localStorage.setItem("user", '');
    localStorage.setItem("compras", JSON.stringify([]));
    location.href="/"
}
