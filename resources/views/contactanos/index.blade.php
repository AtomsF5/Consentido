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
        <p>Queremos mejorar su experiencia de navegación en nuestra página.</p>
        <p>Haznos saber tu requerimiento o sugerencia. Escríbenos.</p>
        <form>
            <label for="contacto"></label>

            <textarea id="contacto" name="contacto" rows="5" cols="27"
                maxlength="500"></textarea>

        <P>Déjanos tu número de teléfono:</P>
        <label for="country_code"></label>
        <input type="tel" id="country_code" name="country_code" placeholder="+34" size="1" pattern="[A-Za-z]{3}"
            title="Código país" alt="Código país"><br>
        <label for="telefono"></label>
        <input type="tel" id="phone" name="phone" placeholder="123 456 789" size="7" alt="insertar número de teléfono"
            pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br>
        <input type="submit" class="enviar">
        </form>
        <option value="211"></option>
    </section>
    <section class="flex justify-end mx-3 uppercase mb-0">
        <a href="{{('/')}}">volver a inicio</a>
    </section>
    <footer>
        <x-footer/>
    </footer>
    </body>
</html>
