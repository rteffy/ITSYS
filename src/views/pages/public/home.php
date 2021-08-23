<?php include_once('config/config.php'); ?>
<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>ITSYS</title>
    <?php include_once 'src/views/includes/headers_public.php'; ?>
    <script src="src/views/js/pages/home.js"></script>
    <link rel="stylesheet" href="src/views/css/stylePublic.css" type="text/css">
</head>

<body>
    <div class="continer">
        <?php include_once 'src/views/includes/nav.php'; ?>
        <div class="slider-container">
            <div class="contenido-slider">
                <div>
                    <h2>ITSYS</h2>
                    <a href="solutions.php">Servicios</a>
                    <p class=contenido>conoce nuestros servicios</p>
                </div>
            </div>
            <div class="contenido-slider">
                <div>
                    <h2> ITSYS</h2>
                    <a href="solutions.php">Productos</a>
                    <p class=contenido>conoce nuestros productos</p>
                </div>
            </div>
            <div class="contenido-slider">
                <div>
                    <h2> ITSYS</h2>
                    <a href="contact">Contacto</a>
                    <p class=contenido>contactanos para brindar soluciones para tu empresa o negocio</p>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col">
                <div id=slogan class="animation">
                    <h2 class="animation"> ITSYS SOLUCIONES EN TECNOLOGIA </h2>
                    <p class="animation"> En nosotros encontrara un amigo que lo acompañara en todos su proyectos
                        se parte de la revolucion tecnologica de la mano de ITSYS SAS</p>
                    <a class=animation href="views/pages/contact.php">cuentanos tus proyectos y nosotros te ayudaremos</a>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col">

                <div id=cards>
                    <div class="card animation" style="background-image:linear-gradient(
    to right,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0.5)
    ), url(src/views/css/img/happy-woman-with-phone.jpg);">

                        <a class="menuletra animation" href="views/pages/products.php">PRODUCTOS</a>
                        <p>Nuestros productos a tu servicio</p>
                    </div>
                    <div class="card animation" style="background-image:linear-gradient(to right,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0.5)
    ),url(src/views/css/img/man-playing-virtual-reality-map.jpg);">

                        <a class="menuletra animation" href="views/pages/solutions.php">SERVICIOS</a>
                        <p>Nuestros servicios a su alcance</p>

                    </div>
                    <div class="card animation" style="background-image:linear-gradient(to right,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0.5)
    ),url(src/views/css/img/apple-1867752.jpg);">

                        <a class="menuletra animation" href="views/pages/contact.php">CONTACTO</a>
                        <p>Contactanos soluciones integrales para tu negocio y emepresa</p>

                    </div>

                </div>
            </div>
        </div>
        <?php include_once 'src/views/includes/footer.php'; ?>
    </div>
</body>

</html>