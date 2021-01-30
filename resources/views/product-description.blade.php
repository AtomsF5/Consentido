<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{!! asset('css/enlacecompra.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/anadircompra.css') !!}">
    <title>Descripción de producto</title>
</head>

<x-header/>

<body>

    

    <x-enlacecompra/>
   
    <section class="detailedproductimage">

    <div>
        <img id="productimage" src="https://www.magnicenter.com/wp-content/uploads/2020/05/montana-gafas-de-lectura-720x491.jpg" alt="Gafas lectura plegable modelo F5">
    </div>

    </section>

    

    <h3>Lista detallada de características del producto</h3>

<div role="list">
    <div role="listitem"><span aria-label="1"></span> Tamaño de la lente – 58 milímetros por 35 milímetros por 132 milímetros</div>
    <div role="listitem"><span aria-label="2"></span> Dispositivo de enganche recubierto en goma para evitar arañazos a sus gafas.</div>
    <div role="listitem"><span aria-label="3"></span> El marco es plegable y de quita y pon rápido.</div>
    <div role="listitem"><span aria-label="4"></span> Lente en material CR-39 orgánico.</div>
    <div role="listitem"><span aria-label="4"></span> Precio en Euros.</div>
</div>

<x-anadircompra/>

<x-footer/>

</body>
</html>