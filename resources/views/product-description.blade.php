<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descripción de producto</title>
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
    <button id="buttonAdd" onclick="displayResultAdd()">Carrito de compra</button>
    </div>

    <div>
        <img src="https://www.magnicenter.com/producto/gafa-de-lectura-plegable-hipster/" alt="Gafas lectura peglable modelo F5">
    </div>

    <h3>Lista detallada características producto</h3>

<div role="list">
    <div role="listitem"><span aria-label="1"></span> Tamaño de la lente – 58 mm x 35 mm x 132 mm Ancho total</div>
    <div role="listitem"><span aria-label="2"></span> Dispositivo de enganche recubierto en goma para evitar arañazos a sus gafas.</div>
    <div role="listitem"><span aria-label="3"></span> El sistema es abatible y de quita y pon rápido.</div>
    <div role="listitem"><span aria-label="4"></span> Lente en material CR-39 orgánico.</div>
</div>
<div>
    <p>Precio en Euros</p>
</div>
    
</body>
</html>