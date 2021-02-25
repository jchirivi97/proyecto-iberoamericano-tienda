$(window).on("load", function () {
    if(localStorage.getItem("user") != null && localStorage.getItem("user") != ""){
        
        console.log("efsdfdsfsdfdsfsd")
        getAllCompras()
    }
});

function getAllCompras() {
    $.ajax({
        type: "GET",
        url: "/getFacturaUser/" + localStorage.getItem("user"),
        data: {},
        xhr: function () {
            var xhr = $.ajaxSettings.xhr();
            $("#cargando").modal("show");
            xhr.upload.onprogress = function (e) {
                if (e.lengthComputable) {
                    $("#progresar").text(
                        "Por favor espere... " +
                            parseInt((e.loaded / e.total) * 100)
                    );
                }
            };
            return xhr;
        },
        success: function (resp) {
            $("#cargando").modal("hide");
            if (resp.length > 0) {
                $("#listado").show()
                resp.map((factura, index) => {
                    var fila = `
                    <tr>
                        <th scope="row">${index}</th>
                        <td>${factura.id}</td>
                        <td>${factura.fecha}</td>
                        <td>$ ${new Intl.NumberFormat().format(factura.total)}</td>
                    </tr>
                    `;
                    $("tbody").append(fila);
                });

            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "No hay información suficiente",
                timer: 3000,
                showConfirmButton: false,
            });
        },
    });
}
