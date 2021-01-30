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
    <section class="p-5 flex flex-col h-screen justify-between">
        <p>Queremos mejorar su experiencia de navegación en nuestra página. Haznos saber tu requerimiento o sugerencia. Escríbenos</p>
        <form action="{{route('contactanos.store')}}" method="POST">
            @csrf
            <label for="contacto"></label>
            <textarea name="contacto" rows="5" cols="27" maxlength="150"></textarea>
        <label for="country_code">
            Déjanos tu número de teléfono:
        </label>
        <input type="tel" placeholder="923 456 789" size="7" alt="insertar número de teléfono">
        <button type="submit">Enviar mensaje</button>
        </form>
    </section>
    <section class="flex justify-end mx-3 uppercase mb-0">
        <a href="{{('/')}}">volver a inicio</a>
    </section>
    <footer>
        <x-footer/>
    </footer>
    </body>
</html>
