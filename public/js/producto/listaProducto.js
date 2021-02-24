var url="url";
$(window).on('load',function(){
    
    getAllProducts();
})


function getAllProducts(){
    $.ajax({
        type: 'GET',
        url: 'allProduct',
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
        success:function(resp){
            $("#cargando").modal("hide")
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
            $("#cargando").modal("show")
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
