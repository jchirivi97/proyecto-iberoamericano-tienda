<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <div class="card login mt-3 p-3">
            <img src="img/login.jpg" class="card-img-top img-fluid img-login" alt="blazer">
            <div class="card-body">
                <h5 class="card-title text-center">Inicio de Sesión</h5>
                <form class="row justify-content-center col-12">
                    <div class="form-group col-sm-6 col-md-6 col-12 m-2">
                        <input type="text" class="form-control" id="user" name="user" placeholder="Usuario">
                    </div>
                    <div class="form-group col-sm-6 col-md-6 col-12 m-2">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                    </div>
                    <div class="col-12 m-2 text-center">
                        <button type="button" class="btn btn-principal btn-sm" onclick="login()">Ingresar</button>
                    </div>
                    <hr />
                    <a href="/registro">¿No tienes cuenta?, Registrate aquí</a>
                </form>
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
</html>