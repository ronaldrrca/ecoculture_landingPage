<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="San Andrés, Providencia y Santa Catalina aviturismo, ecoturismo, 
                                        turismo rural y de inmersión en la naturaleza y la cutura.">
    <meta name="robots" content="index.follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecoculture S.A.S</title>
    <link rel="shortcut icon" href="#" /><!--Fixing favicon-->
    <script src="code.js" async="async"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="tablet.css" media="screen and (min-width: 740px)"> 
    <link rel="stylesheet" href="large-screen.css" media="screen and (min-width: 961px)">
</head>
<body>
    <header>
        <section id="logo-header">
            <img src="./assets/images/logo-positivo.png" alt="logo">
        </section>
        
        <section id="title-subtitle">
            <article id="title">
               <h1>Turismo de Naturaleza, Agroecología y Educación Ambiental</h1>
            </article>
            <article id="subtitle">
                <h2>San Andrés</h2>
                <h2>Providencia</h2>
                <h2>Santa Catalina</h2>
            </article>
        </section>
    </header>

    <main>
        <section id="image">
            <img id="leftRow" src="./assets/icons/navigate_before_black_24dp.svg" alt="imagen anterior">
            <img id="leftRowBlue" src="./assets/icons/navigate_before_blue_24dp.svg" alt="imagen anterior">
            <img id="activeImage" src="./assets/images/img10.jpg" alt="imagen de lugares de los archipiélagos">
            <img id="rightRowBlue" src="./assets/icons/navigate_next_blue_24dp.svg" alt="siguiente imagen">
            <img id="rightRow" src="./assets/icons/navigate_next_black_24dp.svg" alt="siguiente imagen">
        </section>  

        <section id="benefits">
            <h2>Servicios</h2>
            <h3 class="benefits-subtitle">Turismo de naturaleza</h3>
                <p>Conoce y disfruta la biodiversidad y la cultura del archipiélago, 
                    con nuestra oferta de experiencias en aviturismo, ecoturismo, turismo rural 
                    y de inmersión en la naturaleza y la cultura.</p>
            <h3 class="benefits-subtitle">Agroecología</h3>
                <p>Ofrecemos servicios especializados de consultoría ambiental y agroecológica.
                    Asesoramos el diseño, montaje y operación de proyectos agroecológicos y 
                    ambientales, rurales y urbanos.</p>
            <h3 class="benefits-subtitle">Educación ambiental</h3>
                <p>Promovemos la educación ambiental en diferentes contextos y poblaciones. Ofrecemos talleres 
                    y capacitaciones según las necesidades del cliente. Pregunta por nuestra oferta de talleres para niños.</p>
            <h2 id="additional-info">Lo que hacemos</h2>
            <p>Promovemos el bienestar, el buen vivir y la sustentabilidad, mediante experiencias, productos y 
                servicios de turismo de naturaleza, agroecología y educación ambiental diseñados para conocer, 
                disfrutar y conservar la biodiversidad y la cultura del Archipiélago de San Andrés, Providencia 
                y Santa Catalina.</p>
            <article id="whatsapp">
                    <img src="./assets/icons/whatsaap.svg" alt="icono de whatsapp">
                    <a id="whatsapp-link" href="https://api.whatsapp.com/send?phone=+57 316 7777461" target="_blank">Envíanos un mensaje de WhatsApp</a>
            </article>
        </section> 

        <section id="form">
            <h2>Formulario de contacto</h2>
            
                <form action="enviar_mail.php" method="POST">
                    <label for="name">Nombre*</label>
                        <input id="name" type="text" autofocus required name="name">
                    <label for="cellphone">Teléfono celular*</label>
                        <input id="cellphone" type="number" required name="cellphone" placeholder="Introduzca el número sin espacios ni guiones">
                    <label for="email">Email*</label>
                        <input id="email" type="email" required name="email">
                    <label for="cityCountry">Ciudad y País*</label>                  
                        <input id="cityCountry" type="text" required name="cityCountry">
                    <label for="type">Tipo de solicitud</label>
                    <select name="type" id="type" required>
                        <option value="invalido" selected disabled>Seleccione una opción</option>
                        <option value="Quiero información">Quiero información</option>
                        <option value="Sugerencia">Sugerencia</option>
                        <option value="Queja">Queja</option>
                        <option value="Reclamo">Reclamo</option>
                        <option value="Felicitaciones">Felicitaciones</option>
                        <option value="Felicitaciones">Otro</option>
                    </select>
                    <label for="message">Mensaje</label>
                        <textarea id="message" name="message" required placeholder="Escriba aquí su mensaje"></textarea>
                        <p id="required">* Campos requeridos</p>
                        <div id="submit"><input class="submit" type="submit" value="Enviar"></div>
                        <p id="error"></p>
                 </form>
                 
           
        </section>
        <section id="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15575.71232741051!2d-81.7092522444928!3d12.586991460721872!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f05a60874e9c2e9%3A0x83960c0ad1a6052d!2sAeropuerto%20Internacional%20Gustavo%20Rojas%20Pinilla!5e0!3m2!1ses!2sco!4v1625604990959!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>   
    </main>

    <footer>
        <p id="followUs">Siguenos en...</p>
        <section id="social-media">
            <article><a href="https://www.instagram.com/ecocultureco/" target="_blank"><img src="./assets/icons/instagram.svg" alt="icono de instagram"></a></article>
            <!-- <article><a href="https://twitter.com/" target="_blank"><img src="./assets/icons/twitter.svg" alt="icono de twitter"></a></article> -->
            <article><a href="https://www.facebook.com/EcoCultureCo/" target="_blank"><img src="./assets/icons/facebook.svg" alt="icono de facebook"></a></article>
            <article><a href="https://www.youtube.com/channel/UCmISMx8ha9mUZFNLId8wnBA" target="_blank"><img src="./assets/icons/youtube.svg" alt="icono de youtube"></a></article>
        </section>
        
        <section id="contact-information">
            <p>ECOCULTURE S.A.S. San Luis, Vía Radar, Four Corner
                San Andrés Isla. <br> Archipiélago de San Andrés, Providencia y Santa Catalina
                Colombia.</p>
            <p>Teléfonos: 316 7777461</p>
            <p>Whatsaap: +57 316 7777461</p>
            <p>Email: contacto@ecoculture.com.co</p>
        </section>
        <hr>

        <section id="credits">
            <small>&copy; Ecoculture S.A.S. &nbsp;</small>
        </section>
    </footer>
</body>
</html>