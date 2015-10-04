<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        {include file='script.tpl'}        
    </head>
    
    <body class="bg">
    	<header class="headerr">
        	<div class="topo">
            	<h1>Virtua Cursos</h1>
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
                    		<img src="templates/img/{$smarty.session.avatar}" alt="Avatar" width="150px" height="132px" />
                    	</div>
                        <div class="name">
                        	<p>{$smarty.session.usuario}</p>                            
                            <span>Perfil: {$smarty.session.perfil}</span>
                        </div>
                        {section name=s loop=$cca}
                            <div class="dados">
                        	    <p>Curso: <span title="teste">{$cca[s].nome}</span></p>
                                <p>Início: <span>{$cca[s].data_inicio|date_format:"%d/%m/%Y"}</span></p>
                                <p>Término: <span>{$cca[s].data_termino|date_format:"%d/%m/%Y"}</span></p>
                                <p>Horário: <span>{$cca[s].hora_inicio|date_format:"%H:%M"} às {$cca[s].hora_termino|date_format:"%H:%M"}</span></p>
                                <p>Local: <span>{$cca[s].local}</span></p>
                            </div>
                        {/section}
                    </div>
                    <footer class="rodape">
                        <p>Copyright © {'Y'|date} Virtua Cursos - SisGAWeb</p>
                        <p>Todos os direitos reservados.</p>
                        <p>Desenvolvido por:</p>
                        <p>{mailto address="tiger.dgp@hotmail.com" encode="hex" text="Derik Gomide Padua"} e {mailto address="rafaelsantiago1092@gmail.com" encode="hex" text="Rafael Silva Santiago"}</p>
                    </footer>
                </div>
                <button type="button" class="btn-toggle" data-element="#col1">=<br />=</button>
                
            </div>
            <div class="col_dir">
                <button type="button" class="btn-toggle" data-element="#col2">=<br />=</button>
                
                <div id="col2" class="col2">
                	<div class="bloco_dir">
                        <ul id="bloco_dir">
                        	{if $smarty.session.nivel >= 3}
                        		<li><p><a href="#"><img src="templates/img/left.png" />Administração</a></p>
                                    <ul>
                                        <li><a href="?admin&c=matriculas">Matrículas</a></li>
                                        <li><a href="?admin&c=banners">Banners</a></li>
                                        <li><a href="?admin&c=noticias">Notícias</a></li>
                                        <li><a href="?admin&c=notas">Notas</a></li>
                                    </ul>
                                </li>
                            {/if}
                            <li><p><a href="?config">Configuração</a></p></li>
                            <li><p><a href="?perfil">Meu Perfil</a></p></li>
                            <li><p><a href="?msg">Mensagens<span>0</span></a></p></li> 
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col0">
            	<div class="centro">    
            