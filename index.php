<?php require_once 'conexion.php'; ?>
<?php require_once 'funciones.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeep Plan</title>

    <!-- Styles css -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/carrusel.css">

    <!-- iconos -->
    <link rel="stylesheet" type="text/css" href="fuentes/style.css">

 

 

</head>

<body>

    <!--inicio de header-->
    <header id="header">

        <div id="title-container">

            <div id="header-contain">

                <a href="#" id="logo"><img src="img/logo.png" alt="logo-jeep"></a>

                <span class="icon-menu btn_ocultar"></span>
                <nav id="nav">
                    <ul id="list" >
                        <li>
                            <a href="#renegade">Jeep Renegade</a>
                        </li>

                        <li>
                            <a href="#compass">Jeep Compass</a>
                        </li>

                        <li>
                            <a href="#ram">RAM</a>
                        </li>
                    </ul>
                    <button id="contact-nav" ><a href="#formulario">Contacto</a></button>
                </nav>
            </div>
        </div>

        <!--barra lateral -->
        <div id="lateral">

            <ul id="list-lateral">
                <li>
                    <a href="#renegade">Jeep Renegade</a>
                </li>

                <li>
                    <a href="#compass">Jeep Compass</a>
                </li>

                <li>
                    <a href="#ram">RAM</a>
                </li>
            </ul>
            <button id="contact-lateral"><a href="#formulario">Contacto</a></button>
        </div>


          

    </header>
    <!--fin de header-->

    
        <!--carrusel con js vanilla sin Jquery-->

    <div class="slide-contenedor">
        <div class="miSlider fade">
            <img src="img/renegade4.jpg" alt="">
        </div>
        <div class="miSlider fade">
            <img src="img/compass1.jpg" alt="">
        </div>
        <div class="miSlider fade">
            <img src="img/dodge-ram-15002.jpg" alt="">
        </div>
        <div class="direcciones">
            <a href="#" class="atras" onclick="avanzaSlide(-1)">&#10094;</a>
            <a href="#" class="adelante" onclick="avanzaSlide(1)">&#10095;</a>
        </div>
        <div class="barras">
            <span class="barra active" onclick="posicionSlide(1)"></span>
            <span class="barra" onclick="posicionSlide(2)"></span>
            <span class="barra" onclick="posicionSlide(3)"></span>
        </div>
    </div>

    <!--inicio section-->
    <section>
        <header id="contacto">

            <div id="beneficios">
                <!-- acordeon -->
                <div id="acordeon">
                    <h3 class="plantilla">cambio de unidad</h3>
                    <div>
                        <p class="text-acordeon">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit illum optio repellat consequuntur provident pariatur dolorem, labore nostrum aspernatur velit!
                        </p>
                    </div>

                    <h3 class="plantilla">cuotas</h3>
                    <div>
                        <p class="text-acordeon">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit illum optio repellat consequuntur provident pariatur dolorem, labore nostrum aspernatur velit!
                        </p>
                    </div>

                    <h3 class="plantilla">entrega</h3>
                    <div>
                        <p class="text-acordeon">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit illum optio repellat consequuntur provident pariatur dolorem, labore nostrum aspernatur velit!
                        </p>
                    </div>

                </div>

            </div>

            <div id="formulario">
            
                <h2>Consulta a uno de nuestros asesores</h2>

                <!-- mostrar errores -->
                <form id="form" action="registro.php" method="POST">
                    <?php if (isset($_SESSION['registrado'])) : ?>

                        <div class="alerta-exito"><?= $_SESSION['registrado']; ?></div>

                    <?php endif; ?>
                    <div class="entrada">
                        <span class="icon-user for-input"></span>
                        <input type="text" id="name" name="name" placeholder="Nombre" required>
                    </div>
                    <?php echo isset($_SESSION['errores']['nombre']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

                    <div class="entrada">
                        <span class="icon-envelop for-input"></span>
                        <input type="email" id="email" name="email" placeholder="email">
                    </div>


                    <div class="entrada">
                        <span class="icon-mobile for-input"></span>
                        <input type="text" id="tel" name="tel" placeholder="Telefono" required>
                    </div>
                    <?php echo isset($_SESSION['errores']['telefono']) ? mostrarError($_SESSION['errores'], 'telefono') : ''; ?>

                    <textarea id="mensaje" name="mensaje" placeholder="Mensaje"></textarea>

                    <input type="submit" name="enviar" id="enviar">
                </form>
                <?php borrarErrores(); ?>

            </div>

        </header>
        <!--renegade -->
        <section id="catalogo">
            <article class="auto">
                <div class="info">
                    <p class="anticipo">Anticipo $547.645 o tu Usado</p>
                    <h2 class="nombre-auto">Nueva Jeep Renegade</h2>
                    <p class="modelo">SPORT 1.8L MT5</p>
                    <p class="cuota-text">cuota desde</p>
                    <h2 class="precio">$ 8.927</h2>
                    <p class="precio-lista">Precio de Lista <b>$1.564.700</b></p>
                    <button class="btn-catalogo"><a href="#formulario">Consultar</a></button>
                </div>

                <div class="img-auto" id="renegade">
                    <img src="img/renegade-catalogo.jpg">
                </div>

            </article>
            <!--compass -->
            <article class="auto">
                <div class="info">
                    <p class="anticipo">Anticipo $800.000 o tu Usado</p>
                    <h2 class="nombre-auto">Nueva Jeep Compass</h2>
                    <p class="modelo">SPORT 2.4L MANUAL</p>
                    <p class="cuota-text">cuota desde</p>
                    <h2 class="precio">$ 11.006</h2>
                    <p class="precio-lista">Precio de Lista <b>$1.929.900</b></p>
                    <button class="btn-catalogo"><a href="#formulario">Consultar</a></button>
                </div>

                <div class="img-auto" id="compass">
                    <img src="img/compas-prueba.jpg">
                </div>

            </article>
            <!--RAM -->
            <article class="auto">
                <div class="info">
                    <p class="anticipo">Anticipo $547.645 o tu Usado</p>
                    <h2 class="nombre-auto">Nueva Jeep Renegade</h2>
                    <p class="modelo">SPORT 1.8L MT5</p>
                    <p class="cuota-text">cuota desde</p>
                    <h2 class="precio">$ 11.006</h2>
                    <p class="precio-lista">Precio de Lista <b>$1.564.700</b></p>
                    <button class="btn-catalogo"><a href="#formulario">Consultar</a></button>
                </div>

                <div class="img-auto" id="ram">
                    <img src="img/ram-catalogo.jpg">
                </div>

            </article>


        </section>

        <footer id="ubicacion">
            <h2>¿Donde estamos?</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.0167136476357!2d-58.38157037553769!3d-34.603738871083266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11bead4e234e558b!2sObelisco!5e0!3m2!1ses-419!2sar!4v1594521273800!5m2!1ses-419!2sar" id="mapa"></iframe>

        </footer>

    </section>

    <footer id="footer">
        <div id="footer-container">

            <article class="icon-footer">
                <span class="icon-facebook"></span>
                <a href="#">facebook</a>
            </article>

            <article class="icon-footer">
                <span class="icon-whatsapp"></span>
                <a href="#">Whatsapp</a>
            </article>

            <article class="icon-footer">
                <span class="icon-envelop"></span>
                <a href="#">email</a>
            </article>

            <article class="icon-footer">
                <span class="icon-phone"></span>
                <a href="#">1130116406</a>
            </article>

        </div>

        <p class="copi">
            &copy; Copyright 2020 Planes-jeep.com.ar. Todos lo derechos reservados.
        </p>

        <p class="copi">*Imagenes ilustrativas. No contractuales.</p>

        </div>
    </footer>
    <script src="main.js"></script>
</body>

</html>