<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{!! asset('css/category.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/enlacecompra.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/anadircompra.css') !!}">
    <title>Bienvenido a ConSentido, la plataforma de venta de productos para personas con discapacidades visuales, esperamos la disfrutes.</title>
</head>

<x-header/>

<body>    
    <x-enlacecompra/>
    
  

    <x-category/>

    <x-footer/>
    
</body>

<body class="flex flex-col h-screen justify-between">
    <header class="flex flex-col justify-center items-center">
        <h1 class="text-2xl font-medium mt-7 uppercase">Bienvenidos</h1>
        <img src="{{asset('images/LogoConSentido.png')}}" alt="Logo de ConSentido" class="w-32 h-24 ml-3 mt-3">
    </header>
    <section>
    </section>
    <section class="flex justify-end mx-3 uppercase mb-0">
        <a href="{{route('contactanos.index')}}">Contáctanos</a>
    </section>
    <footer>
        <x-footer/>
    </footer>
</html>
