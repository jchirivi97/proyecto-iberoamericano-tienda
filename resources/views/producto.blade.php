<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo asset('css/style.css') ?>" type="text/css">
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
        <nav class="navbar navbar-dark bg-primary col-11 row justify-content-center m-4" aria-label="">
            <a class="nav-link col-12 col-sm-2 col-md-2 p-2" href="javascript:Ver(1)" style="color:black;"><i class="bi bi-mars"></i>HOMBRES</a>
            <a class="nav-link col-12 col-sm-2 col-md-2 p-2" href="javascript:Ver(2)" style="color:black;">MUJER</a>
            <a class="nav-link col-12 col-sm-2 col-md-2 p-2" href="javascript:Ver(3)" style="color:black;">BEBES</a>
            <a class="nav-link col-12 col-sm-2 col-md-2 p-2" href="javascript:Ver(4)" style="color:black;">NIÑOS & NIÑAS</a>
        </nav>
        <div class="col-12 row justify-content-center">
            <section id="hombre" class="col-10 row justify-content-center m-4">
                <div class="col-12 titleCard">
                    <h2 class="text-center m-2 p-1">HOMBRE</h2>
                </div>
                <div id="hombreProd" class="col-12 row justify-content-center" style="overflow-y:scroll;max-height:30rem">
                </div>
            </section>
            <section id="mujer" style="display: none;" class="col-10 row justify-content-center m-4">
                <div class="col-12 titleCard">
                    <h2 class="text-center m-2 p-1">MUJER</h2>
                </div>
                <div id="mujerProd" class="col-12 row justify-content-center" style="overflow-y:scroll;max-height:30rem">
                </div>
            </section>
            <section id="bebes" style="display: none;" class="col-10 row justify-content-center m-4">
                <div class="col-12 titleCard">
                    <h2 class="text-center m-2 p-1">BEBES</h2>
                </div>
                <div id="bebesProd" class="col-12 row justify-content-center" style="overflow-y:scroll;max-height:30rem">
                </div>
            </section>
            <section id="boy" style="display: none;" class="col-10 row justify-content-center m-4">
                <div class="col-12 titleCard">
                    <h2 class="text-center m-2 p-1">NIÑOS & NIÑAS</h2>
                </div>
                <div id="boyProd" class="col-12 row justify-content-center" style="overflow-y:scroll;max-height:30rem">
                </div>
            </section>
        </div>


    </main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/general.js"></script>
<script src="js/producto/productos.js"></script>

</html>