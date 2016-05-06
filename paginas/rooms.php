<?php
$carga_xml = simplexml_load_file('paginas/xml_precios.xml');
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
        <link rel="stylesheet" href="css/skeleton.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/calendar.css">
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
                <h1>Disponibles<span>Existen tres tipos de departamentos para Ud. y familia.</span></h1>
            </div>

            <div class="eleven columns">

                <!-- start room -->
                <div class="four columns picture alpha">
                    <a href="img/room_1_room_page_2_big.jpg" data-rel="prettyPhoto" title="">
                        <span class="magnify">

                        </span>
                        <img src="img/room_1.jpg" alt="" class="scale-with-grid">
                    </a>
                    <em></em><!-- end room picture-->
                </div>
                <div class="seven columns omega">
                    <h3>Departamento estándar 1 Dormitorio <strong><?php echo$carga_xml->depto_1->precio; ?></strong>
                        <span> <?php echo$carga_xml->depto_1->titulo; ?></span>
                    </h3>
                    <p>
                        <?php echo$carga_xml->depto_1->resumen; ?>
                    </p>
                    <?php
                    include 'paginas/equipamiento_iconos_grandes.php';
                    ?>
                    <br class="clear add-bottom"/>
                    <div class="rate">
                        <div id="r1" class="rate_wd">
                            <div class="star_1 ratings_stars"></div>
                            <div class="star_2 ratings_stars"></div>
                            <div class="star_3 ratings_stars"></div>
                            <div class="star_4 ratings_stars"></div>
                            <div class="star_5 ratings_stars"></div>
                            <div class="total_votes">vote data</div>
                        </div>
                    </div><!-- end rate-->
                    <a class="button" href="detalle_1">Leer más</a>
                </div><!-- end  room-->
                <hr>

                <!-- start room -->
                <div class="four columns picture alpha">
                    <a href="img/room_2_room_page_2_big.jpg" data-rel="prettyPhoto" title=""><span class="magnify">

                        </span>
                        <img src="img/room_2.jpg" alt="" class="scale-with-grid"></a>
                    <em>

                    </em><!-- end room picture-->
                </div>
                <div class="seven columns omega">
                    <h3>Departamento estándar 2 Dormitorios <strong><?php echo$carga_xml->depto_2->precio; ?></strong>
                        <span> <?php echo$carga_xml->depto_2->titulo; ?>
                        </span>
                    </h3>
                    <p>
                        <?php echo$carga_xml->depto_2->resumen; ?>
                    </p>
                    <?php
                    include 'paginas/equipamiento_iconos_grandes.php';
                    ?>
                    <br class="clear add-bottom"/>
                    <div class="rate">
                        <div id="r2" class="rate_wd">
                            <div class="star_1 ratings_stars"></div>
                            <div class="star_2 ratings_stars"></div>
                            <div class="star_3 ratings_stars"></div>
                            <div class="star_4 ratings_stars"></div>
                            <div class="star_5 ratings_stars"></div>
                            <div class="total_votes">vote data</div>
                        </div>
                    </div><!-- end rate-->
                    <a class="button" href="detalle_2">Leer más</a>
                </div><!-- end content room-->

                <hr>

                <!-- start room -->
                <div class="four columns picture alpha">
                    <a href="img/room_3_room_page_2_big.jpg" data-rel="prettyPhoto" title="">
                        <span class="magnify"></span><img src="img/room_3.jpg" alt="" class="scale-with-grid">
                    </a>
                    <em>

                    </em><!-- end room picture-->
                </div>
                <div class="seven columns omega">
                    <h3>Departamento Superior 2 Dormitorios <strong><?php echo$carga_xml->depto_3->precio; ?></strong>
                        <span> <?php echo$carga_xml->depto_3->titulo; ?></span>
                    </h3>
                    <p>
                        <?php echo$carga_xml->depto_3->resumen; ?>
                    </p>
                    <?php
                    include 'paginas/equipamiento_iconos_grandes.php';
                    ?>
                    <br class="clear add-bottom"/>
                    <div class="rate">
                        <div id="r3" class="rate_wd">
                            <div class="star_1 ratings_stars"></div>
                            <div class="star_2 ratings_stars"></div>
                            <div class="star_3 ratings_stars"></div>
                            <div class="star_4 ratings_stars"></div>
                            <div class="star_5 ratings_stars"></div>
                            <div class="total_votes">vote data</div>
                        </div>
                    </div><!-- end rate-->
                    <a href="detalle_3" class="button">Leer más</a>
                </div><!-- end content room-->

                <hr>
                <p>
                    Tarifas vigentes para el año 2014/2015.
                </p>

                <!-- start pricing table -->
                <?php
                include 'paginas/precios.php';
                ?>
            </div><!-- end column left - rooms list -->

            <!-- start col right -->
            <section class="five columns omega">
                <!-- start check avail-->
                <div id="check_avail" class="expose add-bottom">
                    <?php
                    include 'paginas/disponibilidad.php';
                    ?>
                </div><!-- end check avail-->

             <?php
        include 'paginas/facilidades_texto.php';
        ?>
            </section><!-- end col right -->
        </div><!-- container-->

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
        <script type="text/javascript"  src="js/plug_ins.js"></script>
        <script src="js/functions.js"></script>
        <!-- Booking form-->
        <script type="text/javascript" src="assets/validate.js"></script>
        <script>
            $(document).ready(function () {
                $(":date").dateinput();
            });
            $(":date").dateinput({trigger: true, format: 'dd/mm/yy', min: -1})
            $(":date:first").data("dateinput").change(function () {
                $(":date:last").data("dateinput").setMin(this.getValue(), false);
            });
        </script>
        <script >
            jQuery().ready(function () {
                jQuery.validator.methods.date = function (value, element) {
                    return this.optional(element) || !/Invalid|NaN/.test(new Date(value)) || /^(\d+)\/(\d+)\/(\d{2,})$/.test(value);
                }
            });
        </script>
</html>