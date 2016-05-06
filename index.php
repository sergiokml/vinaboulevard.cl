<?php

require './class/template.php';


$pagina = $_GET['m'];
$pagina_default = "home";

if (isset($pagina)){
    echo $TEMPLATE->mostrar_template($pagina);
    
}else
{
    echo $TEMPLATE->mostrar_template($pagina_default);
}

