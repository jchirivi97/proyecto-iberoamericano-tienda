var url="url";
$(window).on('load',function(){
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
    getAllProducts();
})


function getAllProducts(){
    $.ajax({
        type: 'GET',
        url: 'allProduct',
        data: {},
        success:function(resp){
            $('tbody').empty();
            resp.map((producto,i)=>{
                var fila =`
                <tr>
                <th scope="row">${i+1}</th>
                <td>${producto.codigo}</td>
                <td>${producto.nombre}</td>
                <td>$ ${producto.valor}</td>
                <td>${producto.disponible}</td>
                <td>
                    <img src="${producto.imagen}" style="width: 200px;height: 150px;"></img>
                    <div class="form-group col-12 m-2 border p-2">
                        <label for="imagen">Cambiar Imagen:</label>
                        <input type="file" class="form-control" id="imagen${i+1}" name="imagen" onchange="changeImg(event)" accept="image/*" placeholder="Imagen...">
                        <button class="btn btn-sm btn-warning" onclick="cambiarImg(${producto.codigo})">Cambiar</button>
                    </div>
                </td>
                <td>
                    <div class="col-12">
                        <button class="btn btn-primary" onclick="editar(${producto.codigo})"><i class="bi bi-pencil-square"></i></button>
                        <button class="btn btn-danger" onclick="eliminar(${producto.codigo})"><i class="bi bi-trash"></i></button>
                    </div>
                </td>
              </tr>
                `;
                $('tbody').append(fila);
            })
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'El producto ya se encuentra registrado'
              })
        }
    })
}

function crearProducto(){
    location.href="/CrearProducto";
}

function editar(id){
    localStorage.setItem('producto',id);
    location.href ="/EditarProducto"
}

function eliminar(id){
    $.ajax({
        type: 'GET',
        url: 'deleteProducto/'+id,
        data: {},
        success:function(resp){
            if(resp.ESTADO=="OK"){
                Swal.fire({
                    icon: 'success',
                    title: 'Exitoso',
                    text: 'Producto eliminado',
                    timer: 1500
                });
                
                location.reload();
                
            }
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'El producto no existe'
              })
        }
    })
}

function changeImg(event){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(event) {
        url=event.target.result;
    }
    reader.readAsDataURL(file);
}

function cambiarImg(codigo){
    var dataImg={
        url: url,
        codigo: codigo
    }
    $.ajax({
        type:'PUT',
        url: 'updateProductImg',
        data: dataImg,
        success: function(resp){

        },
        error : function(XMLHttpRequest, textStatus, errorThrown) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se puede actualizar la imagen',
                timer: 2000,
                showConfirmButton: false,
              })
        }
    })
}
