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
        <div>
            <a href="#" class=""><img class="bg-indigo-900 px-5 py-1 text-white rounded-sm" src="{{asset('images/NOSOTROS.svg')}}" alt="Plataforma de venta de productos para personas con discapacidades visuales, esperamos la disfrutes."></a>
        </div>
        <div>
            <a href="#" class="bg-indigo-900 px-7 py-1 text-white rounded-sm">CARRITO</a>
        </div>

        <div>
            <img src="{{asset('images/')}}" alt="">
            <p>Categoria 1</p>

            <div>
                <p>
                <a href="https://www.magnicenter.com/producto/lupa-mano-convertible-3x/">Lupa de Mano Convertible 3.0 x Aumentos</a>
                </p>
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
    </section>

    <footer>
        <div></div>
    </footer>
</body>
</html>
