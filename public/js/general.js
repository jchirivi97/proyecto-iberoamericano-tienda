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
                    $("#progresar").text("Por favor espere... " + parseInt((e.loaded / e.total) * 100))
                }
            };
            return xhr;
        },
        success: function (resp) {
            $("#cargando").modal("hide")
            if (resp[resp.length - 1].ESTADO == "OK") {
                localStorage.setItem("session", 1);
                localStorage.setItem("user",resp[0][0].nickname)
                if (resp[0][0].nickname == "admin") {
                    location.href="/admin";
                } else {
                    location.href="/";
                }
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
        },
    });
}

function cerrar(){
    localStorage.setItem("session", 0);
    localStorage.setItem("user", '');
    localStorage.setItem("compras", JSON.stringify([]));
    location.href="/"
}
