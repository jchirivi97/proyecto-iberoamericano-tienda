<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
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
        <div class="col-12 row justify-content-center">
            <section class="col-10 row justify-content-center m-4 p-5">
                <div class="col-12">
                    <h2 class="text-center m-2 p-1">LISTA DE PRODUCTOS</h2>
                </div>
                <div class="col-12 m-2 text-center">
                    <button class="btn btn-warning" onclick="crearProducto()">Crear Producto</button>
                </div>
                <div class="table-responsive-md">
                    <table class="table table-sm table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

            </section>

        </div>
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
    </main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/producto/listaProducto.js"></script>

</html>