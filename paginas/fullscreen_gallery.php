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
<link rel="stylesheet" href="css/supersized.css" type="text/css" >
<link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" >
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Favicons-->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
	
<!-- Jquery -->
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

</head>
<body class="full"><!--  This class call different styles only for this page --> 
<header>
  <?php
include 'paginas/menu_superior.php';
?>
</header><!-- end header-->
             
     <!--Arrow Navigation-->
	<a id="prevslide" class="load-item"></a>
	<a id="nextslide" class="load-item"></a>
    <div id="slidecaption" ></div>
	
<!-- JS -->
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/supersized.3.2.6.min.js"></script>
<script type="text/javascript" src="theme/supersized.shutter.min.js"></script>
<script type="text/javascript" src="js/bg_images.js"></script><!--Set your images and captions here --> 

<!-- JQUERY plugins: Moderniz, SuperfishMenu, Weather-->	
<script type="text/javascript"  src="js/plug_ins_2.js"></script>  <!--Plugins file only for this page --> 
<script src="js/functions_2.js"></script><!--Functions file only for this page --> 
</body>
</html>