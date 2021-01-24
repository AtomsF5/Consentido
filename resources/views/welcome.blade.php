<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Bienvenidos</title>
</head>
<header class="flex justify-center items-center">
    <div>
        <div >
            <h1 class="text-2xl font-medium mt-7">BIENVENIDOS</h1>
        </div>
        <div>
            <img src="{{asset('images/LogoConSentido.png')}}" alt="Logo de ConSentido" class="w-32 h-24 ml-3 mt-3">
        </div>
    </div>
</header>
<body>
    <section class="py-5 px-5">
        <div class="flex flex-row">
            <a href="#" class=""><img class="bg-indigo-900 px-5 py-1 text-white rounded-sm" src="{{asset('images/NOSOTROS.svg')}}" alt="Plataforma de venta de productos para personas con discapacidades visuales, esperamos la disfrutes."></a>
              
            <a href="#" class="bg-indigo-900 px-7 py-1 text-white rounded-sm">CARRITO</a>
        </div>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            <div>
                <p>
                    <a href="https://www.magnicenter.com/wp-content/uploads/2017/11/lupa-convertible_03_1.jpg">Lupa de Mano Convertible 3.0 x Aumentos</a>
                </p>
                {{-- <div>
                    <img src="https://www.magnicenter.com/wp-content/uploads/2017/11/lupa-convertible_03_1.jpg" alt="Gafas lectura plegable modelo F5">
                </div> --}}
                <span>
                    <span>
                        <bdi>58.00&nbsp;
                            <span class="woocommerce-Price-currencySymbol">€</span>
                        </bdi>
                    </span>
                    <small class="woocommerce-price-suffix">IVA Incluido</small>
                </span>
            </div>
        </div>
    </body>
</html>
