<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Bienvenidos</title>
</head>
<body>
    <header class="flex flex-col justify-center items-center">
        <h1 class="text-2xl font-medium mt-7 uppercase">Bienvenidos</h1>
        <img src="{{asset('images/LogoConSentido.png')}}" alt="Logo de ConSentido" class="w-32 h-24 ml-3 mt-3">
    </header>
    <section class="p-5 flex flex-col h-screen justify-between">
        <div>
            <a href="#" class=""><img class="bg-indigo-900 px-5 py-1 text-white rounded-sm" src="{{asset('images/NOSOTROS.svg')}}" alt="Plataforma de venta de productos para personas con discapacidades visuales, esperamos la disfrutes."></a>
        </div>
        <div>
            <a href="#" class="bg-indigo-900 px-7 py-1 text-white rounded-sm">CARRITO</a>
        </div>
    </section>
    <section class="flex justify-end mx-3 uppercase mb-0">
        <a href="{{route('contactanos.index')}}">Contáctanos</a>
    </section>
    <footer>
        <x-footer/>
    </footer>
</html>
