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

        <div class="container"><!-- end tweleve columns -->
            <div class="sixteen columns add-bottom">
                <h1>Fotografías<span>Galería de imágenes par que pueda conocer cada de nuestros departamentos.</span></h1>
            </div>
            <div class="sixteen columns">
                <h2>Un Dormitorio - Studio</h2>
                <p><?php echo$carga_xml->depto_1->resumen; ?> </p>
                <p><?php echo$carga_xml->depto_1->descripcion; ?> </p>
            </div>
            <div class="add-bottom">
                <div class="one-third column picture loader">
                    <a href="img/gallery/1.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/1.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <div class=" one-third column picture loader">
                    <a href="img/gallery/2.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/2.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <div class=" one-third column picture loader">
                    <a href="img/gallery/3.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/3.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <div class=" one-third column picture loader">
                    <a href="img/gallery/4.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/4.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <div class=" one-third column picture loader">
                    <a href="img/gallery/5.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/5.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <div class=" one-third column picture loader">
                    <a href="img/gallery/6.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/6.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <br class="clear">
            </div><!-- end four three gallery -->

            <div class="sixteen columns">
                <h2>Dos Dormitorios</h2>
               <p><?php echo$carga_xml->depto_2->resumen; ?> </p>
                <p><?php echo$carga_xml->depto_2->descripcion; ?> </p>
            </div>
            <div class="add-bottom">
                <div class="one-third column picture loader">
                    <a href="img/gallery/7.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/7.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <div class=" one-third column picture loader">
                    <a href="img/gallery/8.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/8.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <div class=" one-third column picture loader">
                    <a href="img/gallery/9.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/9.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <div class=" one-third column picture loader">
                    <a href="img/gallery/10.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/10.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <div class=" one-third column picture loader">
                    <a href="img/gallery/11.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/11.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <div class=" one-third column picture loader">
                    <a href="img/gallery/12.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/12.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <br class="clear">
            </div><!-- end four three gallery -->

            <div class="sixteen columns">
                <h2>Tres Dormitorios</h2>
               <p><?php echo$carga_xml->depto_3->resumen; ?> </p>
                <p><?php echo$carga_xml->depto_3->descripcion; ?> </p>
            </div>
            <div class="add-bottom">
                <div class="one-third column picture loader">
                    <a href="img/gallery/13.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/13.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <div class=" one-third column picture loader">
                    <a href="img/gallery/14.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/14.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <div class=" one-third column picture loader">
                    <a href="img/gallery/15.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/15.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <div class=" one-third column picture loader">
                    <a href="img/gallery/16.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/16.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <div class=" one-third column picture loader">
                    <a href="img/gallery/17.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/17.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <div class=" one-third column picture loader">
                    <a href="img/gallery/18.jpg" data-rel="prettyPhoto[photo]" title="" ><span class="magnify"></span><img src="img/gallery/small/18.jpg" alt="" class="scale-with-grid"></a><em></em>
                </div>
                <br class="clear">
            </div><!-- end four three gallery -->

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
        <script src="js/functions.js"></script>
    </body>
</html>