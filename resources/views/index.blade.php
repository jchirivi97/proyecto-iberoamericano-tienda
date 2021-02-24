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
      <a id="hcerrar" style="display: none;" class="nav-link" href="javascript:cerrar()">Cerrar Sesión</a>
    </nav>
  </header>
  <main class="row justify-content-center">
    <section class="col-11 m-4">
      <div class="col-12">
        <h1 class="text-center m-4">¡BIENVENIDO A NUESTRA TIENDA ONLINE!</h1>
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
        <div id="listado" style="display:none;" class="col-12 p-4">
          <div class="col-12 col-sm-12 col-md-12 m-2">
            <h3 class="text-center m-2">SEGUIMIENTO COMPRAS REALIZADAS</h3>
          </div>
          <div class="table-responsive-md ">
            <table class="table table-sm table-dark">
              <thead class="">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"># FACTURA</th>
                  <th scope="col">FECHA</th>
                  <th scope="col">VALOR</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/general.js"></script>
<script src="js/usuario/listadoCompras.js"></script>
</html>