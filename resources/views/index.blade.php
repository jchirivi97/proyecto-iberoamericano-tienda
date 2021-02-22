<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
    <div class="col-12">
      <div id="publicidad" class="carousel slide m-4" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/publicidad/promocion1.jpg" class="d-block w-100 publicity" alt="promocion_1">
          </div>
          <div class="carousel-item">
            <img src="img/publicidad/publicidad2.jpg" class="d-block w-100 publicity" alt="promocion_2">
          </div>
          <div class="carousel-item">
            <img src="img/publicidad/publicidad3.jpg" class="d-block w-100 publicity" alt="promocion_3">
          </div>
        </div>
        <a class="carousel-control-prev" href="#publicidad" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#publicidad" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
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