var carrito;
var total=0;
$(window).on("load", function () {
    carrito = JSON.parse(localStorage.getItem("compras"));
    showCarrito();
});

function showCarrito() {
    carrito.map((producto,index) => {
        var fila = `
        
            <tr>
                <th scope="row">${index+1}</th>
                <td>${producto.codigo}</td>
                <td>${producto.nombre}</td>
                <td>
                    <input type="number" id="${producto.codigo}" value="${producto.cantidad}">
                    <button class="btn btn-warning" onclick="cambiar(${producto.codigo},${index})"><i class="bi bi-plus-square"></i></button>
                </td>
                <td>${producto.valorUni}</td>
                <td>${producto.valor}</td>
                <td><button class="btn btn-danger" onclick="eliminar(${producto.codigo},${index})"><i class="bi bi-trash"></i></button></td>
            </tr>
        `;
        $('tbody').append(fila);
    });
    totalCompra()
}

function eliminar(codigo,index){
    carrito.splice(index,1);
    localStorage.setItem('compras',JSON.stringify(carrito))
    location.reload()
}


function cambiar(codigo,index){
    if($("#"+codigo).val() >0 && $("#"+codigo).val() != ""){
        carrito[index].cantidad = parseInt($("#"+codigo).val());
        carrito[index].valor = carrito[index].valorUni * carrito[index].cantidad;
        localStorage.setItem('compras',JSON.stringify(carrito))
        location.reload()
    }else{
        Swal.fire({
            icon: 'error',
            text: 'La cantidad debe ser mayor a cero',
            timer: 2000,
            showConfirmButton: false,
        })
    }
    
}

function totalCompra(){
    for(i in carrito) {
        total += carrito[i].valor ;
    }
    $("#total").text(total);
}

function finalizar(){
    var fecha = new Date();
    var factura={
        "fecha": fecha.getFullYear()+"-"+(fecha.getMonth()+1)+"-"+fecha.getDate(),
        "total": total,
        "usuario": localStorage.getItem('user'),
        "estado": "INICIADO",
    }
    $.ajax({
        type:"POST",
        url: "saveFactura",
        data: factura,
        success:function(resp){
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
    })
}


function finalizarDetalle(id){
    var detalle = {
        "compras":carrito,
        "factura": id
    }
    $.ajax({
        url:'saveDetalle',
        type:'POST',
        data: detalle,
        success:function(resp){
            if(resp.ESTADO == "OK"){
                Swal.fire({
                    icon: "succcess",
                    html: "<h2 style='color:black;'>¡GRACIAS POR TU COMPRA!</h2>",
                    text: "El numero de la factura es: " + id,
                    showConfirmButton: true,
                    confirmButtonText: "Aceptar"
                }).then((result)=>{
                    if(result.value){
                        localStorage.setItem('compras',JSON.stringify([]))
                        location.href="/"
                    }
                })
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
    })
}
