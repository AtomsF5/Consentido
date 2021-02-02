<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{!! asset('css/enlacecompra.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/category.css') !!}">
    <title>Página de Subcategorías</title>
</head>
    <body class="flex flex-col h-screen justify-between">

        <x-header/>
    
        <x-enlacecompra/>
    
        <x-category/>
    
        <section class="flex justify-end mx-3 uppercase mb-0">
            <a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}">Contáctanos</a>
        </section>
    
        <x-footer/>
</body>
</html>