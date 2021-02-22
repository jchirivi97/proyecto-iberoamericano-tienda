<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo asset('css/style.css') ?>" type="text/css">
    <style>
        table{
            color: white !important;
        }
    </style>
</head>

<body class="fondo">
    <header>
        <nav class="nav nav-dark bg-dark">
            <a class="nav-link" href="/">Inicio</a>
            <a class="nav-link" href="/productos">Ver Productos</a>
            <a id="hlogin" class="nav-link" href="/login">Incio de Sesión</a>
            <a class="nav-link" href="/carrito">Carrito de Compras</a>
            <a class="nav-link" href="/contacto">Contactenos</a>
            <a class="nav-link" style="float:right;" onclick="cerrar()">Cerrar Sesión</a>
        </nav>
    </header>
    <main>
        <div class="card login mt-3 p-3">
            <div class="card-body">
                <h2 class="card-title text-center">Carrito de Compras</h2>
                <div class="row justify-content-center col-12 mt-3">
                    <div class="table-responsive-md">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">CODIGO</th>
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">CANTIDAD</th>
                                    <th scope="col">VALOR UNITARIO</th>
                                    <th scope="col">VALOR TOTAL</th>
                                    <th scope="col">ELIMINAR</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                    <h3 class="text-center">TOTAL DE LA COMPRA: $ <b id="total" style="color:white"></b></h3>
                    <div class="col-12 m-2 text-center">
                        <button type="button" class="btn btn-principal btn-sm" onclick="finalizar()">Finalizar Compra</button>
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
<script src="js/general.js"></script>
<script src="js/carrito.js"></script>
</html>