<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-01 22:06:33
         compiled from "templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28151553fe6270a23e9-45615627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55086ac7c738c2a21d1965480a24f7f299d80642' => 
    array (
      0 => 'templates\\header.tpl',
      1 => 1443747990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28151553fe6270a23e9-45615627',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553fe6270c69f3_22293320',
  'variables' => 
  array (
    'm_menu' => 0,
    'cca' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553fe6270c69f3_22293320')) {function content_553fe6270c69f3_22293320($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'includes/smarty-3.1.21/libs/plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_mailto')) include 'includes/smarty-3.1.21/libs/plugins\\function.mailto.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ('script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
        
    </head>
    
    <body class="bg">
    	<header class="headerr">
        	<div class="topo">
            	<h1>Virtua Cursos</h1>
            </div>
            <div class="menu">
            	<nav><?php echo htmlspecialchars(imprimeMenuInfinito($_smarty_tpl->tpl_vars['m_menu']->value), ENT_QUOTES, 'UTF-8');?>
</nav>
            </div>
            <div class="topo_">
            	
            </div>
        </header>
        <div id="content">
        	<div class="col_esq">
                <div id="col1" class="col1">                	
                	<div class="bloco_esq">
                    	<div class="logout">
                        	<a href="?logout" title="Sair">Sair</a>
                        </div>
                        <div class="photo">
                        	<div class="photo_bg"></div>
                    		<img src="templates/img/<?php echo htmlspecialchars($_SESSION['avatar'], ENT_QUOTES, 'UTF-8');?>
" alt="Avatar" width="150px" height="132px" />
                    	</div>
                        <div class="name">
                        	<p><?php echo htmlspecialchars($_SESSION['usuario'], ENT_QUOTES, 'UTF-8');?>
</p>                            
                            <span>Perfil: <?php echo htmlspecialchars($_SESSION['perfil'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cca']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                            <div class="dados">
                        	    <p>Curso: <span title="teste"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cca']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['nome'], ENT_QUOTES, 'UTF-8');?>
</span></p>
                                <p>Início: <span><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['cca']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['data_inicio'],"%d/%m/%Y"), ENT_QUOTES, 'UTF-8');?>
</span></p>
                                <p>Término: <span><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['cca']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['data_termino'],"%d/%m/%Y"), ENT_QUOTES, 'UTF-8');?>
</span></p>
                                <p>Horário: <span><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['cca']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['hora_inicio'],"%H:%M"), ENT_QUOTES, 'UTF-8');?>
 às <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['cca']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['hora_termino'],"%H:%M"), ENT_QUOTES, 'UTF-8');?>
</span></p>
                                <p>Local: <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cca']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['local'], ENT_QUOTES, 'UTF-8');?>
</span></p>
                            </div>
                        <?php endfor; endif; ?>
                    </div>
                    <footer class="rodape">
                        <p>Copyright © <?php echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');?>
 Virtua Cursos - SisGAWeb</p>
                        <p>Todos os direitos reservados.</p>
                        <p>Desenvolvido por:</p>
                        <p><?php echo smarty_function_mailto(array('address'=>"tiger.dgp@hotmail.com",'encode'=>"hex",'text'=>"Derik Gomide Padua"),$_smarty_tpl);?>
 e <?php echo smarty_function_mailto(array('address'=>"rafaelsantiago1092@gmail.com",'encode'=>"hex",'text'=>"Rafael Silva Santiago"),$_smarty_tpl);?>
</p>
                    </footer>
                </div>
                <button type="button" class="btn-toggle" data-element="#col1">=<br />=</button>
                
            </div>
            <div class="col_dir">
                <button type="button" class="btn-toggle" data-element="#col2">=<br />=</button>
                
                <div id="col2" class="col2">
                	<div class="bloco_dir">
                        <ul id="bloco_dir">
                        	<?php if ($_SESSION['nivel']>=3) {?>
                        		<li><p><a href="#"><img src="templates/img/left.png" />Administração</a></p>
                                    <ul>
                                        <li><a href="?admin&c=matriculas">Matrículas</a></li>
                                        <li><a href="?admin&c=banners">Banners</a></li>
                                        <li><a href="?admin&c=noticias">Notícias</a></li>
                                        <li><a href="?admin&c=notas">Notas</a></li>
                                    </ul>
                                </li>
                            <?php }?>
                            <li><p><a href="?config">Configuração</a></p></li>
                            <li><p><a href="?perfil">Meu Perfil</a></p></li>
                            <li><p><a href="?msg">Mensagens<span>0</span></a></p></li> 
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col0">
            	<div class="centro">    
            <?php }} ?>
