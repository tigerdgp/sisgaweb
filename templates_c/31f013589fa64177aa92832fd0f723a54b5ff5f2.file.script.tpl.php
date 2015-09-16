<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-15 09:49:26
         compiled from "templates\script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12130553fe5b1e02206-96294441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31f013589fa64177aa92832fd0f723a54b5ff5f2' => 
    array (
      0 => 'templates\\script.tpl',
      1 => 1430267330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12130553fe5b1e02206-96294441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553fe5b1e1e981_25361621',
  'variables' => 
  array (
    'page' => 0,
    'app_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553fe5b1e1e981_25361621')) {function content_553fe5b1e1e981_25361621($_smarty_tpl) {?><title><?php if ($_smarty_tpl->tpl_vars['page']->value['title']) {
echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
 - <?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['app_name']->value, ENT_QUOTES, 'UTF-8');?>
</title>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1">

<link rel="SHORTCUT ICON" href="templates/img/favicon.ico">

<link rel="stylesheet" type="text/css" href="templates/css/reset.css" />
<link rel="stylesheet" type="text/css" href="templates/css/geral.css" />

<?php echo '<script'; ?>
 src="templates/js/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/js/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/js/funcoes.js"><?php echo '</script'; ?>
><?php }} ?>
