<?php
session_start();
$valor1 = rand(1, 9);
$valor2 = rand(1, 9);
$_SESSION['resultado'] = $valor1 + $valor2;
?>
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
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicons-->
        <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    </head>
    <body>
        <header>
            <?php
            include 'paginas/menu_superior.php';
            ?>
        </header><!-- end header-->

        <div class="container add-bottom_2">
            <div class="sixteen columns add-bottom">
                <h1>Contáctenos<span>También puedo hacernos llegar sus inquietudes a traves de este formulario.</span></h1>
            </div>

            <div class="sixteen columns ">
                <div class="map_canvas add-bottom" id="map" style="height:275px;width:100%;"></div><!-- end map-->

                <div class="one-third column alpha half-bottom">
                    <h3 id="airport">Desde el aeropuerto</h3>
                    <ul class="list_4">
                        <li>Debe tomar la ruta Nro 68 con dirección a Viña del Mar. </li>
                        <li>Para llegar a nuestros departamentos debe tomar Ruta 68 y antes de llegar a la ciudad de Valparíso (10 kilómetros antes) debe tomar la variante "Autovía Las Palmas".</li>
                    </ul>
                </div><!-- end airport one-third -->

                <div class="one-third column half-bottom">
                    <h3 id="station">Desde el Terminal de buses</h3>
                    <ul class="list_4">
                        <li>Estamos ubicados a 2 cuadras al sur del terminal de buses. </li>
                        <li></li>
                    </ul>
                </div><!-- end station one-third -->

                <div class="one-third column omega half-bottom">
                    <h3 id="car">Desde Valparíso</h3>
                    <ul class="list_4">
                        <li>Debe tomar Av. España en dirección nor oriente cerca de 5,5 Km.  </li>
                        <li>Al llegar al reloj de flores debe tomar calle Alvarez en dirección al oriente.</li>
                    </ul>
                </div><!-- end car one-third -->

                <hr>

                <div class=" sixteen columns alpha">
                    <div class="one-third column alpha">
                        <ul>
                            <li><strong>Calle Alvarez 1136</strong>, Código Postal 2570011</li>
                            <li>+56 032 3175916 / +56 9 6320 6072</li>
                            <li><a href="mailto:reservas@vinaboulevard.cl">reservas@vinaboulevard.cl</a> - 
                                <a>www.vinaboulevard.cl</a></li>
                        </ul>


                        <ul id="follow" class="add-bottom">
                            <li><a href="https://www.twitter.com/ViaBoulevard" id="tw" target="blank_">Twitter</a></li>
                            <!--<li><a href="#" id="rss">Rss</a></li>-->
                            <!--<li><a href="#" id="vimeo">Vimeo</a></li>-->
                            <li><a href="https://www.facebook.com/DepartamentosVinaBoulevard" id="fb" target="blank_">Facebook</a></li>
                        </ul>
                    </div>
                    <div id="message-contact"></div>
                    <form method="post" action="assets/contact.php" id="contactform">
                        <div class="one-third column ">
                            <fieldset>
                                <label>Nombre</label>
                                <input name="name_contact" id="name_contact"  class="long" type="text"/>
                                <label>Apellido</label>
                                <input name="last_name_contact" id="last_name_contact"  class="long" type="text"/>
                                <label>Email</label>
                                <input name="email_contact" id="email_contact" class="long" type="email"/>
                            </fieldset>
                        </div>
                        <div class="one-third column omega">
                            <fieldset>
                                <label>Mensaje</label>
                                <textarea name="message_contact" id="message_contact" style="width:95%; height:75px; margin-bottom:30px"></textarea>
                                <label><?php echo $valor1 . "+" . $valor2; ?></label><input type="text" id="verify_contact">
                            </fieldset>
                            <button type="submit" class="button" id="submit_contact">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer>
            <?php
            include 'paginas/menu_inferior.php';
            ?>
        </footer><!-- footer  -->
        <!-- Jquery -->
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <!-- ExposÃ¨, tabs, accordion-->
        <script src="http://cdn.jquerytools.org/1.2.6/all/jquery.tools.min.js"></script>
        <!-- JQUERY plugins: Moderniz, Prettyphoto, Flexislider, MobileMenu, SuperfishMenu, Weather, Tooltip-->	
        <!-- Google Maps API -->	
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="js/google_map.js"></script>
        <script type="text/javascript">
            /* GOOGLE MAP  ======================================== */
            $('#map').gmap3({
                marker: {
                    latLng: [-33.0275606, -71.5470503]
                },
                map: {
                    options: {
                        zoom: 15
                    }
                }
            });
        </script>
        <script type="text/javascript"  src="js/plug_ins.js"></script>  
        <script src="js/functions.js"></script>
        <!-- Booking form-->
        <script type="text/javascript" src="assets/validate.js"></script>
    </body>
</html>