<?php

    require_once('configs/configuracao.php');
    error_reporting(2039);
    ini_set('serialize_precision', 4);
    session_start();

    $idiomas = array(
	    0 => 'ptbr',
	    1 => 'enus',
	    2 => 'kokr',
    );
    function checkidioma()
    {
	    global $BalenosConf, $idiomas;
	    if(!isset($_SESSION['idioma']) || !isset($idiomas[$_SESSION['idioma']]))
		    $_SESSION['idioma'] = $BalenosConf['idioma'];
    }
    checkidioma();

?>