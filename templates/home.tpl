<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        {include file='script.tpl'}
        <link rel="stylesheet" type="text/css" href="templates/css/home.css" />
    </head>
    
    <body>
    	<header>
        	<div class="header">
            	<div class="header_t">
                	<img src="templates/img/bemvindo.png" alt="Seja bem-vindo!" width="110px" style="padding: 7px 15px; 0 0" /> <a href="?login" class="entrarButton"></a>
                </div>
                <div class="header_e">
                	<img src="{$logo}" alt="Titulo do site" width="350px" />
                </div>
                <div class="header_d">
                	<img src="templates/img/cursos.png" alt="Cursos Profissionalizantes" width="450px" />
                </div>
            </div>
        </header>
        <div id="page">
        	<section class="news">
            	<h1>Notícias</h1>
                <!--{section name=s loop=$news}
                    <div class="titulo">
                        <h1><a href="?noticia">{$news[s].titulo}</a></h1>
                    </div>
                    <div class="autor">
                        <span>Por {$news[s].autor} em {$news[s].data|date_format:"%d/%m/%Y"}</span>
                    </div>
                    <div class="texto">
                        {$news[s].texto|truncate:150:"..."|strip_tags:"UTF-8":TRUE}
                    </div>
                {/section}-->
                
                    <div class="titulo">
                        <h1><a href="?noticia">{$newsti}</a></h1>
                    </div>
                    <div class="autor">
                        <span>Por {$newsa} em {$newsd|date_format:"%d/%m/%Y"}</span>
                    </div>
                    <div class="texto">
                        {$newste|truncate:150:"..."|strip_tags:"UTF-8":TRUE}
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
            {include file='footer.tpl'}
