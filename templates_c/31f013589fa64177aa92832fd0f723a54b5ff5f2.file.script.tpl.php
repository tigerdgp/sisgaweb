<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-26 05:25:02
         compiled from "templates\script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187565513f5ae9834b9-02559974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '187565513f5ae9834b9-02559974',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5513f5aecd9773_43290061',
  'variables' => 
  array (
    'page' => 0,
    'app_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5513f5aecd9773_43290061')) {function content_5513f5aecd9773_43290061($_smarty_tpl) {?><title><?php if ($_smarty_tpl->tpl_vars['page']->value['title']) {
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
