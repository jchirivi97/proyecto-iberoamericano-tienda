var compras;
var prod;
$(window).on("load", function () {
    compras=JSON.parse(localStorage.getItem('compras'));
    Swal.fire({
        icon: 'success',
        html:
            '<b>Cargando...</b><br/>'+
            '<div class="spinner-border m-5" role="status">' +
            '<span class="sr-only"></span></div>',
        timer: 10000,
        showConfirmButton: false,
        allowOutsideClick: false
    })
    getAllProducto();
});

function Ver(item) {
    switch (item) {
        case 1:
            $("#hombre").show();
            $("#mujer").hide();
            $("#bebes").hide();
            $("#boy").hide();
            break;
        case 2:
            $("#hombre").hide();
            $("#mujer").show();
            $("#bebes").hide();
            $("#boy").hide();
            break;
        case 3:
            $("#hombre").hide();
            $("#mujer").hide();
            $("#bebes").show();
            $("#boy").hide();
            break;
        case 4:
            $("#hombre").hide();
            $("#mujer").hide();
            $("#bebes").hide();
            $("#boy").show();
            break;
    }
}

function getAllProducto() {
    $.ajax({
        type: "GET",
        url: "allProduct",
        data: {},
        success: function (resp) {
            if (resp.length > 0) {
                resp.map((e) => {
                    var card = `
                    <div class="card m-3" style="width: 18rem;">
                        <img src="${e.imagen}" class="card-img-top img-fluid img-clothes" alt="">
                        <div class="card-body">
                            <h5 class="card-title">${e.nombre}</h5>
                            <p class="card-text">$ ${e.valor}</p>
                            <p class="card-text">${e.descripcion}</p>
                            <a class="btn btn-primary" onclick="agregar(${e.codigo})">Agregar</a>
                        </div>
                    </div>
                    `;
                    switch(e.categoria){
                        case 1:
                            $("#hombreProd").append(card);
                            break;
                        case 2:
                            $("#mujerProd").append(card);
                            break;
                        case 3:
                            $("#bebesProd").append(card);
                            break;
                        case 4:
                            $("#boyProd").append(card);
                            break;
                    }
                });
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "El usuario ya se encuentra registrado",
                timer: 2000,
                showConfirmButton: false,
            });
        },
    });
}

function agregar(codigo){
    if(localStorage.getItem('session')==1){
        $.ajax({
            type: 'GET',
            url: 'getProduct/'+codigo,
            data:{},
            success:function(resp){
                var product = {
                    codigo: resp[0].codigo,
                    nombre: resp[0].nombre,
                    cantidad: 1,
                    valor: resp[0].valor,
                    valorUni: resp[0].valor
                }
                if(compras.length == 0){
                    compras.push(product);
                }else{
                    for(i in compras){
                        if(compras[i].codigo == codigo){
                            compras[i].cantidad +=1;
                            compras[i].valor = compras[i].valor * compras[i].cantidad;
                            break;
                        }else{
                            compras.push(product);
                        }
                    }
                }
                Swal.fire({
                    icon: 'success',
                    text: 'Producto agregado al carrito',
                    timer: 2000,
                    showConfirmButton: false,
                })
                localStorage.setItem('compras',JSON.stringify(compras))
            },
            error : function(XMLHttpRequest, textStatus, errorThrown) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'El producto no exite',
                    timer: 2000,
                    showConfirmButton: false,
                })
            }
        })


        setTimeout(function(){
            
        },3000)
    }else{
        Swal.fire({
            icon: 'warning',
            title: 'Advertencia',
            text: 'Debe iniciar sesión para comprar',
            timer: 2000,
            showConfirmButton: false,
        })
    }
}
