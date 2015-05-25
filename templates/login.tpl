<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        {include file='script.tpl'}
        <link rel="stylesheet" type="text/css" href="templates/css/login.css" />
    </head>
    
    <body>    
    	
    	<div class="login">
        	<h1>{$app_name} - Área Restrita</h1>
            <h1>Login</h1>
            <p style="color: #F00;" align="center">{$errMsg}</p>
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
            {include file='footer.tpl'}