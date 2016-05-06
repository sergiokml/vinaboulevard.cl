<?php

// Clase template
class template {

    function tpl($p) { // $p = nombre de la plantilla a mostrar | $d = datos asociativos
        if (version_compare(PHP_VERSION, '5.4.0', '>=')) {
            ob_start(null, 0, PHP_OUTPUT_HANDLER_STDFLAGS ^
                    PHP_OUTPUT_HANDLER_REMOVABLE);
        } else {
            ob_start(null, 0, false);
        }
        //@ob_start(); //si estas en un HOST real, descomenta esta lina
        // (Activa el almacenamiento en búfer de salida)
        
        
        
         require('paginas/' . $p . '.php');        
         
         
         //Obtener el contenido del búfer actual y eliminar el búfer de salida actual
        return ob_get_clean();
	
		
      
    }

    function mostrar_template($pagina) {
        $this->tpl($pagina);
    }

}

$TEMPLATE = new template(); // instaciamos la clase
