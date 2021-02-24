<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="fondo">
    <header>
        <nav class="nav nav-dark bg-dark">
            <a class="nav-link " href="/admin">Inicio</a>
            <a class="nav-link" href="/listProd">Productos</a>
			<a id="hcerrar" style="display: none;" class="nav-link" href="javascript:cerrar()">Cerrar Sesión</a>
        </nav>
    </header>
    <main>
        <div class="card login mt-3 p-3">
            <div class="card-body">
                <h5 class="card-title text-center">CREAR PRODUCTO</h5>
                <form id="crear" class="row col-12 justify-content-center" enctype="multipart/form-data">
                    <div class="form-group col-sm-12 col-md-12 col-12 m-2">
                        <label for="codigo">Codigo del Producto: </label>
                        <input type="number" class="form-control" id="codigo" name="codigo" placeholder="Codigo...">
                    </div>   
                    <div class="form-group col-sm-12 col-md-12 col-12 m-2">
                        <label for="nombre">Nombre del Producto: </label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de producto...">
                    </div>
                    <div class="form-group col-sm-6 col-md-6 col-12">
                        <label for="valor">Precio del Producto: </label>
                        <input type="number" class="form-control" id="valor" name="valor" placeholder="$ ...">
                    </div> 
                    <div class="form-group col-sm-6 col-md-6 col-12">
                        <label for="disponible">Cantidad Disponible: </label>
                        <input type="number" class="form-control" id="disponible" name="disponible" placeholder="...">
                    </div> 
                    <div class="form-group col-sm-8 col-md-8 col-12 m-2">
                        <label for="categoria">Categoría: </label>
                        <select class="form-control" id="categoria" name="categoria">
                            <option value="" selected disabled>Seleccione</option>
                            <option value=1 >HOMBRE</option>
                            <option value=2 >MUJER</option>
                            <option value=3 >BEBES</option>
                            <option value=4 >NIÑOS</option>
                        </select>
                    </div>   
                    <div class="form-group col-sm-12 col-md-12 col-12 m-2">
                        <textarea cols="100" rows="10" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion..."></textarea>
                    </div> 
                    <div class="form-group col-sm-8 col-md-8 col-12 m-2 border p-2">
                        <label for="imagen">Imagen:</label>
                        <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" placeholder="Imagen...">
                        <img id="imagenShow" width="300px" alt="" height="300px" class="img-fluid"></img>
                    </div> 
                    <div class="col-12 m-2 text-center">
                        <button type="button" class="btn btn-principal btn-sm" onclick="saveProducto()">Crear</button>
                    </div> 
                </form>
            </div>
        </div>
    </main>
    <div class="modal" id="cargando" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <b>Cargando...</b><br />
                    <div class="spinner-border m-5" role="status">
                        <span class="sr-only"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/general.js"></script>
<script src="js/producto/crearProducto.js"></script>
</html>