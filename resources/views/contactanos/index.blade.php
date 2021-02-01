<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="style.css" />
    <title>Contactanos</title>
</head>
<body>
    <header class="flex flex-col justify-center items-center">
        <h1 class="text-2xl font-medium mt-7 uppercase">Contáctanos</h1>
        <img src="{{asset('images/LogoConSentido.png')}}" alt="Logo de ConSentido" class="w-32 h-24 ml-3 mt-3">
    </header>

    <section class="mx-3 p-5 flex flex-col  justify-between">
        <p class="mb-2">Queremos mejorar su experiencia de navegación en nuestra página. Haznos saber tu requerimiento o sugerencia. Escríbenos</p>

        <form action="{{route('contactanos.store')}}" method="POST">

            @csrf

            <label>
                Mensaje:
            </label>
            <textarea name="mensaje" rows="5" cols="30" class="max-w-xsn mb-2"></textarea>



            <label>
                Déjanos tu número de teléfono:
            </label>
            <input type="tel" placeholder="923 456 789" size="9" alt="insertar número de teléfono" name="telefono">


            <button type="submit">Enviar mensaje</button>

        </form>
    </section>

    <section class="flex justify-end mx-3 uppercase">
        <a href="{{('/')}}">volver a inicio</a>
    </section>

    <footer>
        <x-footer/>
    </footer>

    </body>
</html>
