var carrito;
var total = 0;
$(window).on("load", function () {
    carrito = JSON.parse(localStorage.getItem("compras"));
    showCarrito();
});

function showCarrito() {
    carrito.map((producto, index) => {
        var fila = `
        
            <tr>
                <th scope="row">${index + 1}</th>
                <td>${producto.codigo}</td>
                <td>${producto.nombre}</td>
                <td>
                    <input type="number" id="${producto.codigo}" value="${
            producto.cantidad
        }">
                    <button class="btn btn-warning" onclick="cambiar(${
                        producto.codigo
                    },${index})"><i class="bi bi-plus-square"></i></button>
                </td>
                <td>${producto.valorUni}</td>
                <td>${producto.valor}</td>
                <td><button class="btn btn-danger" onclick="eliminar(${
                    producto.codigo
                },${index})"><i class="bi bi-trash"></i></button></td>
            </tr>
        `;
        $("tbody").append(fila);
    });
    totalCompra();
}

function eliminar(codigo, index) {
    carrito.splice(index, 1);
    localStorage.setItem("compras", JSON.stringify(carrito));
    location.reload();
}

function cambiar(codigo, index) {
    if ($("#" + codigo).val() > 0 && $("#" + codigo).val() != "") {
        carrito[index].cantidad = parseInt($("#" + codigo).val());
        carrito[index].valor =
            carrito[index].valorUni * carrito[index].cantidad;
        localStorage.setItem("compras", JSON.stringify(carrito));
        location.reload();
    } else {
        Swal.fire({
            icon: "error",
            text: "La cantidad debe ser mayor a cero",
            timer: 2000,
            showConfirmButton: false,
        });
    }
}

function totalCompra() {
    for (i in carrito) {
        total += carrito[i].valor;
    }
    $("#total").text(total);
}

function finalizar() {
    var fecha = new Date();
    var factura = {
        fecha:
            fecha.getFullYear() +
            "-" +
            (fecha.getMonth() + 1) +
            "-" +
            fecha.getDate(),
        total: total,
        usuario: localStorage.getItem("user"),
        estado: "INICIADO",
    };
    $.ajax({
        type: "POST",
        url: "saveFactura",
        data: factura,
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
            finalizarDetalle(resp.id);
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "No es posible registrar la compra",
                timer: 2000,
                showConfirmButton: false,
            });
        },
    });
}

function finalizarDetalle(id) {
    var detalle = {
        compras: carrito,
        factura: id,
    };
    $.ajax({
        url: "saveDetalle",
        type: "POST",
        data: detalle,
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
            if (resp.ESTADO == "OK") {
                Swal.fire({
                    icon: "succcess",
                    html:
                        "<h2 style='color:black !important;'>¡GRACIAS POR TU COMPRA!</h2>" +
                        "<p style='color:black !important;'>El numero de la factura es: " +
                        id +
                        "</p>",
                    showConfirmButton: true,
                    confirmButtonText: "Aceptar",
                    allowOutsideClick: true,
                }).then((result) => {
                    if (result.value) {
                        updateProducto();
                    }
                });
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "No es posible generar la factura",
                timer: 2000,
                showConfirmButton: false,
            });
        },
    });
}

function updateProducto() {
    var prodUpdate = {
        compras: carrito,
    };
    $.ajax({
        type: "PUT",
        url: "/updProductCant",
        data: prodUpdate,
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
            if (resp.ESTADO == "OK") {
                localStorage.setItem("compras", JSON.stringify([]));
                location.href = "/";
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "No es posible generar la factura",
                timer: 2000,
                showConfirmButton: false,
            });
        },
    });
}
