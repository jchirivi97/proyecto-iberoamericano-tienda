<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactenos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
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
        <div class="card contacto mt-5 p-3">
            <div class="card-body">
                <h5 class="card-title text-center">CONTACTENOS</h5>
                <form class="row justify-content-center">
                    <div class="form-group col-12 m-2">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo...">
                    </div>
                    <div class="form-group col-12 m-2">
                        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono...">
                    </div>
                    <div class="form-group col-12 m-2">
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo...">
                    </div>
                    <div class="form-group col-12 m-2">
                        <textarea cols="100" rows="10" class="form-control" id="observacion" name="observacion" placeholder="Observaciones..."></textarea>
                    </div>
                    <div class="col-12 m-2 text-center">
                        <button class="btn btn-principal btn-sm">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="js/general.js"></script>

</html>