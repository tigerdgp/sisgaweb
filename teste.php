<?php

// load Smarty library
define("SMARTY_DIR", "includes/smarty-3.1.21/libs/");
require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';

$smarty->assign('name','Ned');

$smarty->display('index.tpl');
?>
