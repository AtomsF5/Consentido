<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{!! asset('css/category.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/enlacecompra.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/anadircompra.css') !!}">
    <title>Bienvenido a ConSentido, la plataforma de venta de productos para personas con discapacidades visuales, esperamos la disfrutes.Alvaro no escibas en chat</title>
</head>
<body class="flex flex-col h-screen justify-between">
    
    <x-header/>
    
    <x-enlacecompra/>

    <x-category/>

    <section class="flex justify-end mx-3 uppercase mb-0">
        <a href="{{route('contactanos.index')}}">Contáctanos</a>
    </section>
    
    <x-footer/>
    
</html>
