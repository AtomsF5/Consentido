<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Bienvenidos</title>
</head>
<header class="flex flex-col">
    <h1 class="text-2xl font-medium flex justify-center">BIENVENIDOS</h1>
    <img src="{{asset('images/LogoConSentido.png')}}" alt="Logo de ConSentido" class="w-32 h-24">
</header>
<body>
    <section>
        <div>
            <button>NOSOTROS</button>
            <img src="{{asset('images/')}}" alt="Plataforma de venta de productos para personas con discapacidades visuales, esperamos la disfrutes!!.">
        </div>

        <div>
            <button>CARRITO DE COMPRA</button>
        </div>

        <div>
            <img src="{{asset('images/')}}" alt="">
            <p>Categoria 1</p>
        </div>
    </section>

</body>
</html>
