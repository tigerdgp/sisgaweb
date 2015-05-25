<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-22 23:33:49
         compiled from "templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9406553fe5b1c77ee7-07465978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfd3629923e3cdae20b91c1eff4309c3709d2b00' => 
    array (
      0 => 'templates\\home.tpl',
      1 => 1432348424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9406553fe5b1c77ee7-07465978',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553fe5b1d57693_44508906',
  'variables' => 
  array (
    'logo' => 0,
    'news' => 0,
    'alunos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553fe5b1d57693_44508906')) {function content_553fe5b1d57693_44508906($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'includes/smarty-3.1.21/libs/plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'includes/smarty-3.1.21/libs/plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ('script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <link rel="stylesheet" type="text/css" href="templates/css/home.css" />
    </head>
    
    <body>
    	<header class="cabecalho">
        	<div class="header">
            	<div class="header_t">
                	<img src="templates/img/bemvindo.png" alt="Seja bem-vindo!" width="110px" style="padding: 7px 15px; 0 0" /> <a href="?login" class="entrarButton"></a>
                </div>
                <div class="header_e">
                	<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value, ENT_QUOTES, 'UTF-8');?>
" alt="SisGA Web" width="300px" />
                </div>
                <div class="header_d">
                	<img src="templates/img/cursos.png" alt="Cursos Profissionalizantes" width="450px" />
                </div>
            </div>
        </header>
        <div id="page">
        	<section class="news">
            	<h1>Notícias</h1>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
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
                        <span>Por <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['nome'], ENT_QUOTES, 'UTF-8');?>
 em <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['data'],"%d/%m/%Y"), ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                    <div class="texto">
                        <?php echo htmlspecialchars(strip_tags(smarty_modifier_truncate($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['texto'],150,"...")), ENT_QUOTES, 'UTF-8');?>

                    </div>
                <?php endfor; endif; ?>
                
            </section>
            <section class="listagem">
            	<p class="first">Últimos Cursos<span>Situação</span></p>
                <p>Costura de Vestuário<span>Inscrições Abertas</span></p>
                <p>Artesão em Bordado à Mão<span>Inscrições Encerradas</span></p>
                <p>Manicure e Pedicure<span>Inscrições Encerradas</span></p>
                <p>Maquiador<span>Inscrições Encerradas</span></p>
                <p>Recepcionista<span>Inscrições Encerradas</span></p>
            </section>
            <div class="clear"></div>
            <section class="banner">
            	<img src="templates/img/banner_senai.jpg" alt="To no SENAI, to podendo" width="1000px" height="200px" />
            </section>
            <div class="clear"></div>
            <section class="banner_500x250">
            	<img src="templates/img/banner_senac_psg.png" alt="Programa SENAC de Gratuidade" width="500px" height="250px" />
            </section>
            <section class="listagem">
            	<p class="first">Estatísticas</p>
                <p>Visitas<span>203162</span></p>
                <p>Alunos Incritos<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alunos']->value, ENT_QUOTES, 'UTF-8');?>
</span></p>
                <p>Instituições<span>2</span></p>
                <p>Cursos Ofertados<span>368</span></p>
                <p>Certificados Entregues<span>302</span></p>
            </section>
            <div class="clear"></div>
            <section class="parceiros">
            	<h1>Parceiros</h1>
                <div class="logos">
                	<img src="templates/img/logo_sine.png" alt="SINE Sacramento" title="SINE Sacramento" width="80px" />
                </div>
                <div class="logos">
                	<img src="templates/img/logo_sacra.png" alt="Prefeitura Municipal de Sacramento" title="Prefeitura Municipal de Sacramento" width="100px" />
                </div>
                <div class="logos">
                	<img src="templates/img/logo_senac.png" alt="SENAC" title="SENAC Uberaba" width="100px" />
                </div>
                <div class="logos">
                	<img src="templates/img/logo_senai.png" alt="SENAI" title="SENAI Uberaba" width="200px" />
                </div>
            </section>
    		<div class="clear"></div>
            <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
