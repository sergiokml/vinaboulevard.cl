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
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/layout.css">
<link rel="stylesheet" href="css/weather.css">
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
    <!--<center><div class="paxer-widget-calendar"></div></center>-->


        <header>
            <?php
            include 'paginas/menu_superior.php';
            include 'paginas/gadget.php';
            ?>
        </header><!-- end header-->
        
       
        <?php
        include 'paginas/slider_chico.php';
        ?>

        <div class="four columns">
            <h2>Conoce nuestros departmentos amoblados </h2>
            <p>
                Arriendo de nuevos y modernos departamentos amoblados, ubicados en el centro de la ciudad.
            </p>
            <p>
                Contamos con una decena de departamentos perfectamente equipados para ti y tu familia.
            </p>
        </div>

        <div class="four columns add-bottom">
            <div class="picture">
                <a href="img/room_1_room_page_2_big.jpg" data-rel="prettyPhoto" title="">
                    <span class="magnify">

                    </span>
                    <img src="img/room_1.jpg" alt="picture" class="scale-with-grid"></a><em></em>
            </div>
            <h3>Departamento estándar 1 Dormitorio <strong><?php echo$carga_xml->depto_1->precio; ?></strong>
                <span><?php echo$carga_xml->depto_1->titulo; ?></span></h3>
            <p>
                <?php echo$carga_xml->depto_1->resumen; ?>
            </p>
            <?php
            include 'paginas/equipamiento_iconos_grandes.php';
            ?>
            <br class="clear add-bottom"/>
            <a href="detalle_1" class="button">Leer más</a>
        </div><!-- end room 1-->

        <div class="four columns add-bottom">
            <div class="picture">
                <a href="img/room_2_room_page_2_big.jpg" data-rel="prettyPhoto" title=""><span class="magnify"></span><img src="img/room_2.jpg" alt="picture" class="scale-with-grid"></a><em></em>
            </div>
            <h3>Departamento estándar 2 Dormitorios<strong><?php echo$carga_xml->depto_2->precio; ?></strong>
                <span><?php echo$carga_xml->depto_2->titulo; ?></span></h3>
            <p>
                <?php echo$carga_xml->depto_2->resumen; ?>
            </p>
            <?php
            include 'paginas/equipamiento_iconos_grandes.php';
            ?>
            <br class="clear add-bottom"/>
            <a href="detalle_2" class="button">Leer más</a>
        </div><!-- end room 2-->

        <div class="four columns add-bottom">
            <div class="picture">
                <a href="img/room_3_room_page_2_big.jpg" data-rel="prettyPhoto" title=""><span class="magnify"></span><img src="img/room_3.jpg" alt="picture" class="scale-with-grid"></a><em></em>
            </div>
            <h3>Departamento Superior 2 Dormitorios <strong><?php echo$carga_xml->depto_3->precio; ?></strong>
                <span><?php echo$carga_xml->depto_3->titulo; ?></span></h3>
            <p>
                <?php echo$carga_xml->depto_3->resumen; ?>
            </p>
            <?php
            include 'paginas/equipamiento_iconos_grandes.php';
            ?>
            <br class="clear add-bottom"/>
            <a href="detalle_3" class="button">Leer más</a>
        </div><!-- end room 3 -->

    </section><!-- end container -->
</div><!-- end bg gray -->



<section class="container add-bottom">
    <div class="eight columns amenities ">
        <img src="img/hotel.jpg" class="scale-with-grid" alt="">
        <h4>Sobre Viña Boulevard <a href="sobre-nosotros">Leer más</a></h4>
        <p>Los apartamentos Viña Boulevard se encuentran en Viña del Mar y ofrece alojamientos independientes con conexión Wi-Fi gratuita. Los apartamentos están a 100 metros de la estación de autobuses de Viña del Mar y a 300 metros de la estación de metro Viña del Mar. </p>

    </div>
    <div class="eight columns amenities">
        <img src="img/spa.jpg" class="scale-with-grid" alt="">
        <h4>Sobre Viña Boulevard<a href="sobre-nosotros">Leer más</a></h4>
        <p>
            <strong>Los apartamentos del Viña Boulevard son tranquilos y disponen de cocina y TV de pantalla plana. </strong>Viña Boulevard está a 300 metros del parque Quinta Vergara y a 10 minutos en vehículo de la playa de Caleta Abarca y del Reloj de Flores. Hay aparcamiento gratuito.</p>
        <ul class="list_3">
            <li>Todos los departamentos cuentan con Tv LCD.</li>
            <li>Todos los departamentos cuentan con cocina propia equipada. </li>
            <li>Todos los departamentos cuentan con radio y wifi.</li>
        </ul>
    </div>
</section><!-- end container hotel info -->

<!-- reservas  -->

<!--<script type='text/javascript'>
  var paxer = {};
  paxer.secret = 'RZJZZR';
  paxer.iframeType = 'BOTH';
  paxer.triggerButton = '';  // Coloque aquí el id del botón o link de reservas de su sitio web
  paxer.widgetTheme = 'transparent';
  paxer.widgetOrientation = 'horizontal';
  paxer.widgetColors = {"colorHeader1":"#e30616","colorHeader2":"#FFFFFF","colorBody1":"#F2F9FF","colorBody2":"#666666"};
  paxer.paxerLang = ''; // Opcional: indique el código del idioma en el que desea ver el widget. Si no se especifica, establece el idioma principal del hotel. Idiomas soportados: es, en

  (function() {
    var paxerScript = document.createElement('script');
    paxerScript.type = 'text/javascript';
    paxerScript.async = true;
    paxerScript.src = 'https://www.paxer.com/lib/widget/paxer-booking.js?v='+ (new Date().getTime());
    var hscr = document.getElementsByTagName('head')[0];
    hscr.appendChild(paxerScript);
  })();
</script>-->





<footer>
    <?php
    include 'paginas/menu_inferior.php';
    ?>
</footer><!-- footer  -->
<!-- Jquery -->

<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="js/flexi_slider.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider();
		});
	</script>
<!-- JQUERY plugins: Moderniz, Prettyphoto, Flexislider, MobileMenu, SuperfishMenu, Weather, Tooltip-->	
<script type="text/javascript"  src="js/plug_ins.js"></script>  
<!-- Google Maps API -->	
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/google_map.js"></script>
<script src="js/jquery.simpleWeather.min.js"></script> 
<script src="js/functions.js"></script>





</body>
</html>