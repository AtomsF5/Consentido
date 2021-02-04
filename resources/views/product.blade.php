<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{!! asset('css/enlacecompra.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/subcategory.css') !!}">
    <title>Página de Producto</title>
</head>
    <body class="flex flex-col h-screen justify-between">

        <x-header/>
    
        <x-enlacecompra/>
    
        <x-product/>
    
        <x-contact-us/>
    
        <x-footer/>
</body>
</html>