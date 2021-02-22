<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
            <div class="card-body">
                <h5 class="card-title text-center">Registro de Usuario</h5>
                <form id="registrar" class="row justify-content-center col-12">
                    <div class="form-group col-sm-8 col-md-8 col-12 ">
                        <label for="nombre">Nombres: </label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="...">
                    </div>
                    <div class="form-group col-sm-8 col-md-8 col-12">
                        <label for="apellido">Apellidos: </label>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="...">
                    </div>
                    <div class="form-group col-sm-6 col-md-6 col-12">
                        <label for="tipo">Tipo de Documento: </label>
                        <select id="tipo" name="tipo" class="form-control">
                            <option value="" selected disabled>Seleccione</option>
                            <option value="CC">Cedula</option>
                            <option value="CE">Cedula Extranjera</option>
                            <option value="PA">Pasaporte</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6 col-md-6 col-12">
                        <label for="documento">Numero Documento: </label>
                        <input type="number" class="form-control" id="documento" name="documento" placeholder="...">
                    </div>
                    <div class="form-group col-sm-6 col-md-6 col-12">
                        <label for="direccion">Dirección: </label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="...">
                    </div>
                    <div class="form-group col-sm-6 col-md-6 col-12">
                        <label for="celular">Celular: </label>
                        <input type="number" class="form-control" id="celular" name="celular" placeholder="...">
                    </div>
                    <div class="form-group col-sm-6 col-md-6 col-12">
                        <label for="correo">Correo: </label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo@mail.com">
                    </div>
                    <div class="form-group col-sm-6 col-md-6 col-12">
                        <label for="nickname">Nickname: </label>
                        <input type="text" class="form-control" id="nickname" name="nickname" placeholder="...">
                    </div>
                    <div class="form-group col-sm-6 col-md-6 col-12">
                        <label for="password">Contraseña: </label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="...">
                    </div>
                    <div class="form-group col-sm-6 col-md-6 col-12">
                        <label for="passwordRep">Repita la Contraseña: </label>
                        <input type="password" class="form-control" id="passwordRep" name="passwordRep" placeholder="...">
                    </div>
                    <div class="col-12 m-2 text-center">
                        <button type="button" onclick="registrar()" class="btn btn-principal btn-sm">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/general.js"></script>
<script src="js/usuario/usuarioRegistrado.js"></script>

</html>