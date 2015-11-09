<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        {include file='script.tpl'}
        <link rel="stylesheet" type="text/css" href="templates/css/home.css" />
    </head>
    
    <body>
    	<header class="cabecalho">
        	<div class="header">
            	<div class="header_t">
                	<img src="templates/img/bemvindo.png" alt="Seja bem-vindo!" width="110px" style="padding: 7px 15px 0 0;" /> <a href="?login" class="entrarButton"></a>
                </div>
                <div class="header_e">
                	<img src="{$logo}" alt="Virtua Cursos" />
                </div>
                <div class="header_d">
                	<img src="templates/img/cursos.png" alt="Cursos Profissionalizantes" width="450px" />
                </div>
            </div>
        </header>
        <div id="page">
        	<section class="news">
            	<h1>Notícias</h1>
                {section name=s loop=$news}
                    <div class="titulo">
                        <h1><a href='?noticia&i={$news[s].id}&n={$news[s].titulo|replace:" ":"_"}'>{$news[s].titulo}</a></h1>
                    </div>
                    <div class="autor">
                        <span>Por {$news[s].nome} em {$news[s].data|date_format:"%d/%m/%Y"}</span>
                    </div>
                    <div class="texto">
                        {$news[s].texto|truncate:150:"..."|strip_tags:"UTF-8":TRUE}
                    </div>
                {/section}
                
            </section>
            <section class="listagem">
            	<p class="first">Últimos Cursos<span>Situação</span></p>
                {section name=s loop=$cursos}                
                    <p>{$cursos[s].nome}
                        <span>
                            {if $cursos[s].inscricao == "1"}
                        	    Inscrições Abertas
                            {elseif $cursos[s].inscricao == "2"}
                        	    Inscrições Encerradas
                            {/if}                            
                        </span>
                    </p>
                {/section}
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
                <p>Visitas<span>{$e_visitas}</span></p>
                <p>Alunos Incritos<span>{$e_alunos}</span></p>
                <p>Instituições<span>{$e_instituicoes}</span></p>
                <p>Cursos Ofertados<span>{$e_cursos}</span></p>
                <p>Certificados Entregues<span>0</span></p>
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
            {include file='footer.tpl'}
