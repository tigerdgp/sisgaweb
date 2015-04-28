<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-24 07:51:28
         compiled from "templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1557553a58701774f3-43590979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '906c126ce527c555188db615401136f5c0576aa5' => 
    array (
      0 => 'templates\\login.tpl',
      1 => 1428624108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1557553a58701774f3-43590979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_name' => 0,
    'query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553a58702ca8b5_86118854',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553a58702ca8b5_86118854')) {function content_553a58702ca8b5_86118854($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ('script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <link rel="stylesheet" type="text/css" href="templates/css/login.css" />
    </head>
    
    <body>    
    	
    	<div class="login">
        	<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app_name']->value, ENT_QUOTES, 'UTF-8');?>
 - Área Restrita<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['query']->value, ENT_QUOTES, 'UTF-8');?>
</h1>
            <h1>Login</h1>
        	<form action="" method="post">
            	<table>                	
                    <tr>
                    	<td class="login_col1">Usuário:</td>
                    	<td class="login_col2"><input name="loginUser" type="text" /></td>
                    </tr>
                    <tr>
                        <td class="login_col1">Senha:</td>
                        <td class="login_col2"><input name="loginPass" type="password" /></td>
                    </tr>
            		<tr>
                        <td colspan="2" class="login_col0"><input name="loginEntrar" type="submit" value="Entrar" class="botao" /></td>
                    </tr>
                </table>
            </form>
        </div>
    
    		<div class="clear"></div>
            <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
