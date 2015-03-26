<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-26 12:50:39
         compiled from "templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:226075513f5ae242951-77520050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfd3629923e3cdae20b91c1eff4309c3709d2b00' => 
    array (
      0 => 'templates\\home.tpl',
      1 => 1427399435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226075513f5ae242951-77520050',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5513f5ae813534_69540151',
  'variables' => 
  array (
    'logo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5513f5ae813534_69540151')) {function content_5513f5ae813534_69540151($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ('script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <link rel="stylesheet" type="text/css" href="templates/css/home.css" />
    </head>
    
    <body>
    	<header>
        	<div class="header">
            	<div class="header_t">
                	<img src="templates/img/bemvindo.png" alt="Seja bem-vindo!" width="110px" style="padding: 7px 15px; 0 0" /> <a href="?login" class="entrarButton"></a>
                </div>
                <div class="header_e">
                	<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value, ENT_QUOTES, 'UTF-8');?>
" alt="Titulo do site" width="350px" />
                </div>
                <div class="header_d">
                	<img src="templates/img/cursos.png" alt="Cursos Profissionalizantes" width="500px" />
                </div>
            </div>
        </header>
        <div id="page">
        	<section class="news">
            Noticias
            </section>
            <section class="listagem">
            	<table>
                	<tr>
                		<th class="esq">Últimos Cursos</th>
                        <th class="dir">Situação</th>
                    </tr>
                    <tr>
                    	<td>Costura de Vestuário</td>
                        <td>Inscrições Abertas</td>
                    </tr>
                    <tr>
                    	<td>Artesão em Bordado à Mão</td>
                        <td>Cancelado</td>
                    </tr>
                    <tr>
                    	<td>Manicure e Pedicure</td>
                        <td>Inscrições Encerradas</td>
                    </tr>
                    <tr>
                    	<td>Maquiador</td>
                        <td>Inscrições Encerradas</td>
                    </tr>
                    <tr>
                    	<td>Recepcionista</td>
                        <td>Inscrições Encerradas</td>
                    </tr>
                </table>
            </section>
            <div class="clear"></div>
            <section class="banner">
            Banner 720x100
            </section>
            <div class="clear"></div>
            <section class="banner_">
            Banner 250x250
            </section>
            <section class="listagem">
            	<table>
                	<tr>
                		<th class="esq" colspan="2">Estatísticas</th>
                    </tr>
                    <tr>
                    	<td>Visitas</td>
                        <td>203162</td>
                    </tr>
                    <tr>
                    	<td>Alunos Incritos</td>
                        <td>3265924</td>
                    </tr>
                    <tr>
                    	<td>Instituições</td>
                        <td>2</td>
                    </tr>
                    <tr>
                    	<td>Cursos Ofertados</td>
                        <td>368</td>
                    </tr>
                    <tr>
                    	<td>Certificados Entregues</td>
                        <td>302</td>
                    </tr>
                </table>
            </section>
    		<div class="clear"></div>
            <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
