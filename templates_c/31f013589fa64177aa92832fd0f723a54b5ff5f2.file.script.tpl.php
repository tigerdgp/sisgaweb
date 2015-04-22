<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-15 15:32:29
         compiled from "templates\script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10507552ee6fd525f42-60769695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31f013589fa64177aa92832fd0f723a54b5ff5f2' => 
    array (
      0 => 'templates\\script.tpl',
      1 => 1427372698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10507552ee6fd525f42-60769695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'app_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552ee6fd779a78_12867408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552ee6fd779a78_12867408')) {function content_552ee6fd779a78_12867408($_smarty_tpl) {?><title><?php if ($_smarty_tpl->tpl_vars['page']->value['title']) {
echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
 - <?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['app_name']->value, ENT_QUOTES, 'UTF-8');?>
</title>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1">

<link rel="SHORTCUT ICON" href="templates/img/favicon.ico">

<link rel="stylesheet" type="text/css" href="templates/css/reset.css" />
<link rel="stylesheet" type="text/css" href="templates/css/geral.css" />

<link type="text/javascript" href="templates/js/global.js" /><?php }} ?>
