<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-15 15:32:28
         compiled from "templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23631552ee6fcc15c06-23508023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfd3629923e3cdae20b91c1eff4309c3709d2b00' => 
    array (
      0 => 'templates\\home.tpl',
      1 => 1429108775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23631552ee6fcc15c06-23508023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo' => 0,
    'news' => 0,
    'newsti' => 0,
    'newsa' => 0,
    'newsd' => 0,
    'newste' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552ee6fd40ae24_12606256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552ee6fd40ae24_12606256')) {function content_552ee6fd40ae24_12606256($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'includes/smarty-3.1.21/libs/plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'includes/smarty-3.1.21/libs/plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                	<img src="templates/img/cursos.png" alt="Cursos Profissionalizantes" width="450px" />
                </div>
            </div>
        </header>
        <div id="page">
        	<section class="news">
            	<h1>Notícias</h1>
                <!--<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['news']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total']);
?>
                    <div class="titulo">
                        <h1><a href="?noticia"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['titulo'], ENT_QUOTES, 'UTF-8');?>
</a></h1>
                    </div>
                    <div class="autor">
                        <span>Por <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['autor'], ENT_QUOTES, 'UTF-8');?>
 em <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['data'],"%d/%m/%Y"), ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                    <div class="texto">
                        <?php echo htmlspecialchars(strip_tags(smarty_modifier_truncate($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['texto'],150,"...")), ENT_QUOTES, 'UTF-8');?>

                    </div>
                <?php endfor; endif; ?>-->
                
                    <div class="titulo">
                        <h1><a href="?noticia"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newsti']->value, ENT_QUOTES, 'UTF-8');?>
</a></h1>
                    </div>
                    <div class="autor">
                        <span>Por <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newsa']->value, ENT_QUOTES, 'UTF-8');?>
 em <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['newsd']->value,"%d/%m/%Y"), ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                    <div class="texto">
                        <?php echo htmlspecialchars(strip_tags(smarty_modifier_truncate($_smarty_tpl->tpl_vars['newste']->value,150,"...")), ENT_QUOTES, 'UTF-8');?>

                    </div>
                
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
            <section class="banner_250x250">
            	<img src="templates/img/banner_250x250.jpg" alt="Banner 250x250" />
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
            <section class="parceiros">
            </section>
    		<div class="clear"></div>
            <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
