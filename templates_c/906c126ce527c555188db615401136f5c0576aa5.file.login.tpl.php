<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-15 09:49:56
         compiled from "templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1449155400b25c752d7-83845036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '906c126ce527c555188db615401136f5c0576aa5' => 
    array (
      0 => 'templates\\login.tpl',
      1 => 1432298366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1449155400b25c752d7-83845036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55400b26008f37_07454505',
  'variables' => 
  array (
    'app_name' => 0,
    'errMsg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55400b26008f37_07454505')) {function content_55400b26008f37_07454505($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ('script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <link rel="stylesheet" type="text/css" href="templates/css/login.css" />
    </head>
    
    <body>    
    	
    	<div class="login">
        	<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app_name']->value, ENT_QUOTES, 'UTF-8');?>
 - Área Restrita</h1>
            <h1>Login</h1>
            <p style="color: #F00;" align="center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMsg']->value, ENT_QUOTES, 'UTF-8');?>
</p>
        	<form action="" method="post">
            	<table>                	
                    <tr>
                    	<td class="login_col1">
                        	Usuário (CPF):                        
                        </td>
                    	<td class="login_col2">
                        	<input name="user" type="text" maxlength="25" />
                        </td>
                    </tr>
                    <tr>
                        <td class="login_col1">
                        	Senha:
                        </td>
                        <td class="login_col2">
                        	<input name="pass" type="password" />
                        </td>
                    </tr>
            		<tr>
                        <td colspan="2" class="login_col0">
                        	<input name="submit" type="submit" value="Entrar" class="botao" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    
    		<div class="clear"></div>
            <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
