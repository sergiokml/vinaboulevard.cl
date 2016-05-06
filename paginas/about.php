<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head>

        <!-- Basic Page Needs -->
        <?php
        include 'paginas/header_basic.php';
        ?>

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/skeleton.css">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="fontello/css/fontello.css">

        <!-- prettyPhoto plugin -->
        <link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen">
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicons-->
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    </head>
    <body>
        <header>
            <?php
            include 'paginas/menu_superior.php';
            ?>
        </header><!-- end header-->

        <div class="container">
            <div class="sixteen columns add-bottom">
                <h1>Viña Boulevard<span>Confortables departamentos en pleno centro de la ciudad.</span></h1>
            </div>

            <div class="ten columns add-bottom">
                <div class="picture">
                    <a href="img/about_1.jpg" data-rel="prettyPhoto"><span class="magnify"></span><img src="img/about_1.jpg" alt="picture" class="scale-with-grid"></a><em></em>
                </div>
                <h3>Quiénes Somos <span></span></h3>
                <p>
                    Inversiones Construir Limitada, constituida en Valparaíso, es una sociedad de inversiones con 12 años de trayectoria en las Áreas de Construcción, Transporte, Servicios de RR.HH. Especializado y  Mercados de Capitales Nacionales(BCS) y Extranjeros(NYSE /NASDAQ); la cual actualmente desarrolla una nueva Área Estratégica de Negocios en <strong>Bienes Raíces y Corretaje de Propiedades.</strong>
                </p>

                

                <hr>


                <h3>Misión <span></span></h3>
                <p>
                    Ofrecer protección a nuestros clientes mediante una asesoría profesional en Tasación y Corretaje , un servicio de atención permanente y una excelente administración y tratamiento de sus necesidades. Así mismo, brindar valor agregado y utilidad a nuestros clientes y socios.
                </p>
                <hr>

                <h3>Visión <span></span></h3>
                <p>
                    Convertirnos en la empresa líder del país en la prestación de servicios de Corretaje de Propiedades, atendiendo siempre con lealtad, honestidad y prontitud para garantizar la máxima tranquilidad y protección de nuestros clientes, para así ser reconocidos como la mejor organización de corretaje del país.
                </p>
                <hr>
                
                
                
                

                <iframe src="http://player.vimeo.com/video/97718909?byline=0&amp;portrait=0" width="100%" height="250"  class="add-bottom">
                </iframe>
                
                		<blockquote>
                                        Dada su geografía y carácter residencial, ha mantenido históricamente la condición de ciudad balneario, gracias al adecuado aprovechamiento de sus potencialidades paisajísticas y a la ejecución de diversos proyectos que han consolidado a Viña del Mar, a través del tiempo, como la “Capital Turística de Chile”, denominación que trasciende nuestras fronteras.
                                </blockquote>

            </div><!-- end ten columns-->

            <!-- start right column-->
            <div class="five columns offset-by-one add-bottom">

                <h4 id="swim">Playas</h4>
                <div class="three columns alpha">
                    <img src="img/poll.jpg" alt="" class="scale-with-grid half-bottom" >
                </div>
                <br class="clear">
                <p>
                    La belleza que ofrece su estética urbana se conjuga armoniosamente con sus 13 playas, una diversificada oferta de cultura, gastronomía y entretención.
                </p>

                <h4 id="restaurant">Gastronomía</h4>
                <div class="three columns alpha">
                    <img src="img/restaurant.jpg" alt="" class="scale-with-grid half-bottom" >
                </div>
                <br class="clear">
                <p>
                  En pocos lugares del mundo se puede comer de forma tan variada como en Viña del Mar. Y es que esta ciudad ofrece buenos pescados y mariscos, excelentes pastas, ricos sándwiches y pizzas y buenas parrilladas.
                </p>

                <h4 id="bar">Vida Nocturna</h4>
                <div class="three columns alpha">
                    <img src="img/bar.jpg" alt="" class="scale-with-grid half-bottom">
                </div>
                <br class="clear">
                <p>
                  Como la ciudad más turística de Chile, Viña del Mar ofrece a sus visitantes un centenar de eventos y centros nocturnos especiales para comenzar un buen fin de semana en el litoral.
                </p>

<!--                <h4 id="sports">Sports</h4>
                <ul class="list_4">
                    <li>Vix in error iuvaret, at omnium prompta aliquam vel. Sea an purto vide posidonium, eos modus dicit ne. Appetere dignissim vis et. </li>
                    <li>Appetere dignissim vis et. Te per dolore expetenda voluptaria, an eam autem perfecto patrioque. Eu eum inermis verterem assentior.</li>
                    <li>Vix in error iuvaret, at omnium prompta aliquam vel. Sea an purto vide posidonium, eos modus dicit ne. Appetere dignissim vis et. </li>
                    <li>Appetere dignissim vis et. Te per dolore expetenda voluptaria, an eam autem perfecto patrioque. Eu eum inermis verterem assentior.</li>
                </ul>-->
            </div><!-- end right column-->
        </div><!-- end container -->

        <footer>
            <?php
            include 'paginas/menu_inferior.php';
            ?>
        </footer><!-- footer  -->
        <!-- Jquery -->
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <!-- JQUERY plugins: Moderniz, Prettyphoto, Flexislider, MobileMenu, SuperfishMenu, Weather, Tooltip-->	
        <script type="text/javascript"  src="js/plug_ins.js"></script>
        <!-- Google Maps API -->	
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="js/google_map.js"></script>
        <script src="js/functions.js"></script>
    </body>
</html>