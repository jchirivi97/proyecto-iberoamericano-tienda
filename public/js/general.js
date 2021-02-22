$(window).on("load", function () {
    if (localStorage.getItem("session") == null) {
        localStorage.setItem("session", 0);
    }
    if (localStorage.getItem("compras") == null) {
        localStorage.setItem("compras", JSON.stringify([]));
    }

    if (localStorage.getItem("session") == 1) {
        $("#hlogin").hide();
    } else {
        $("#hlogin").show();
    }
});

function login() {
    Swal.fire({
        icon: 'success',
        html:
            '<b>Cargando...</b><br/>'+
            '<div class="spinner-border m-5" role="status">' +
            '<span class="sr-only"></span></div>',
        timer: 5000,
        showConfirmButton: false,
        allowOutsideClick: false
    })
    $.ajax({
        type: "GET",
        url: "userLogin/" + $("#user").val() + "/" + $("#password").val(),
        data: {},
        success: function (resp) {
            console.log("login: "+resp)
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
