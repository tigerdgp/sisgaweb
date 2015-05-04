<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-04 11:54:06
         compiled from "templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28151553fe6270a23e9-45615627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55086ac7c738c2a21d1965480a24f7f299d80642' => 
    array (
      0 => 'templates\\header.tpl',
      1 => 1430765641,
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553fe6270c69f3_22293320')) {function content_553fe6270c69f3_22293320($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ('script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
        
    </head>
    
    <body class="bg">
    	<header>
        	<div class="topo">
            	<h1>Titulo do Site</h1>
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
                        	<a href="" title="Sair">Sair</a>
                        </div>
                        <div class="photo">
                        	<div class="photo_bg"></div>
                    		<img src="templates/img/haseo.jpg" alt="" width="150px" height="132px" />
                    	</div>
                        <div class="name">
                        	<p>Derik Gomide Padua</p>
                            <pan>Perfil: Aluno</span>
                        </div>
                        <div class="dados">
                        	<p>Curso: <span title="teste">Auxiliar Administrativo</span></p>
                            <p>Início: <span>09/09/2015</span></p>
                            <p>Término: <span>09/12/2015</span></p>
                            <p>Horário: <span>19:00 às 22:00</span></p>
                        </div>
                    </div>
                    <footer class="rodape">
                        <p>Copyright © <?php echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');?>
 SisGAWeb</p>
                        <p>Todos os direitos reservados.</p>
                        <p>Desenvolvido por:</p>
                        <p><a href='mailto:tiger.dgp@hotmail.com'>Dérik Gomide Padua</a> e <a href='mailto:rafaelsantiago1092@gmail.com'>Rafael Silva Santiago</a></p>
                    </footer>
                </div>
                <button type="button" class="btn-toggle" data-element="#col1">=<br />=</button>
                
            </div>
            <div class="col_dir">
                <button type="button" class="btn-toggle" data-element="#col2">=<br />=</button>
                
                <div id="col2" class="col2">
                	<div class="bloco_dir">
                        <ul>
                        	<li><p><a href="?admin">Administração</a></p></li>
                            <li><p><a href="?config">Configuração</a></p></li>
                            <li><p><a href="?perfil">Meu Perfil</a></p></li>
                            <li><p><a href="?msg">Mensagens<span>10</span></a></p></li> 
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col0">
            	<div class="centro">    
            <?php }} ?>
