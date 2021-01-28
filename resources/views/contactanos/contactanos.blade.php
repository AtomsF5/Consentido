<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="style.css" />
    <title>Contactanos</title>
</head>
<header>
    <h1 class="flex justify-center items-center">CONTACTO</h1>
</header>
<body>
    <article>
        <p>Queremos mejorar su experiencia de navegación en nuestra página.</p>
        <br />
        <p>Haznos saber tu requerimiento o sugerencia. Escríbenos.</p>
    </article>
    <form>
        <label for="contacto"></label>
        <br />
        <textarea id="contacto" name="contacto" rows="5" cols="30"
            maxlength="900"></textarea>
    </form>
    <P>Déjanos tu número de teléfono:</P>
    <label for="country_code"></label>
    <input type="tel" id="country_code" name="country_code" placeholder="+34" size="1" pattern="[A-Za-z]{3}"
        title="Código país" alt="Código país"><br>
    <label for="telefono"></label>
    <input type="tel" id="phone" name="phone" placeholder="123 456 789" size="7" alt="insertar número de teléfono"
        pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br>
    <input type="submit" class="enviar">
    <footer>
        <x-footer/>
    </footer>
</body>
</html>
