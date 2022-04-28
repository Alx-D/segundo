<?php
    define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
    define('INCLUDES', ROOT_PATH.'/segundo/includes');
/* Definir ROOT PATH como en la linea 1 y definir INCLUDES como en la linea 2
hace que funcione el include de la pagina Servicios que tiene este codigo:
include (INCLUDES."/header.php")
PERO en la pagina Servicios hay que declarar al inicio este codigo:
include_once ($_SERVER['DOCUMENT_ROOT'].'/segundo/dirs.php') */

    define('SUB', ROOT_PATH.'/segundo/subcarpeta');
    define('IMGS', ROOT_PATH.'/segundo/imgs');
    define ('DIR_PATH', '/segundo');

    define ('_IMAGES_', realpath(dirname(__FILE__) . '/imgs'));
?>