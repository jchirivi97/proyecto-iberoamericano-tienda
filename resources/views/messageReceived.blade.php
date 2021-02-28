<!DOCTYPE html>
<html>
<head>
    <title>Mensaje Nuevo</title>
</head>
<body>
    <main>
        <div>
            <p><b>Numero de la Factura: </b> {{$mensaje[detalle][0].id}} </p>
            <p><b>Nombre del Comprador: </b> {{$mensaje[user][0].nombre}} {{$mensaje[user][0].apellido}}</p>
            <p><b>Dirección del Comprador: </b> {{$mensaje[user][0].direccion}}</p>            
            <p><b>Total de la compra: </b> {{$mensaje[detalle][0].total}}</p>
            <p><b>Nota: Los productos comprados llegaran en 3 días habiles</b></p>
        </div>
    </main>
</body>
</html>