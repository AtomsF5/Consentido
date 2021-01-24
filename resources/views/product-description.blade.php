<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Página producto detallado</title>
</head>    

<header class="flex justify-center items-center">
        <div>
            <div >
                <h1 class="text-2xl font-medium mt-7">DETALLE DE PRODUCTO</h1>
            </div>
            <div>
                <img src="{{asset('images/LogoConSentido.png')}}" alt="Logo de ConSentido" class="w-32 h-24 ml-3 mt-3">
            </div>
        </div>
</header>


<body>
    <div>
        <a href="#" class="bg-indigo-900 px-7 py-1 text-white rounded-sm">CARRITO</a>
    </div> 
    

    <div>
        <img src="https://www.magnicenter.com/wp-content/uploads/2020/05/montana-gafas-de-lectura-720x491.jpg" alt="Gafas lectura plegable modelo F5">
    </div>

    <h3>Lista detallada de características del producto</h3>

    <div role="list">
        <div role="listitem"><span aria-label="1"></span> Tamaño de la lente 58 milímetros por 35 milímetros por 132 milímetros de ancho total</div>
        <div role="listitem"><span aria-label="2"></span> Dispositivo de enganche recubierto en goma para evitar arañazos a sus gafas</div>
        <div role="listitem"><span aria-label="3"></span> El sistema es plegable y viene acompañado de estuche</div>
        <div role="listitem"><span aria-label="4"></span> Lente en material CR-39 orgánico</div>
        <div role="listitem"><span aria-label="4"></span> Precio en Euros 25</div>
    </div>

    
</body>
</html>