<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        {include file='script.tpl'}        
    </head>
    
    <body class="bg">
    	<header class="headerr">
        	<div class="topo">
            	<h1>SisGA Web</h1>
            </div>
            <div class="menu">
            	<nav>{imprimeMenuInfinito($m_menu)}</nav>
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
                    		<img src="templates/img/haseo.jpg" alt="" width="150px" height="132px" />
                    	</div>
                        <div class="name">
                        	<p>{$smarty.session.usuario}</p>                            
                            <span>Perfil: {$smarty.session.perfil}</span>
                        </div>
                        <div class="dados">
                        	<p>Curso: <span title="teste">Auxiliar Administrativo</span></p>
                            <p>Início: <span>09/09/2015</span></p>
                            <p>Término: <span>09/12/2015</span></p>
                            <p>Horário: <span>19:00 às 22:00</span></p>
                        </div>
                    </div>
                    <footer class="rodape">
                        <p>Copyright © {'Y'|date} SisGAWeb</p>
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
                        	{if $smarty.session.nivel >= 3}
                        		<li><p><a href="?admin">Administração</a></p></li>
                            {/if}
                            <li><p><a href="?config">Configuração</a></p></li>
                            <li><p><a href="?perfil">Meu Perfil</a></p></li>
                            <li><p><a href="?msg">Mensagens<span>10</span></a></p></li> 
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col0">
            	<div class="centro">    
            