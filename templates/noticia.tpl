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
        	<section class="noticia">
            	<h1>Notícia</h1>
                {section name=s loop=$news}
                    <div class="titulo">
                        <h1>{$news[s].titulo}</h1>
                    </div>
                    <div class="autor">
                        <span>Por {$news[s].nome} em {$news[s].data|date_format:"%d/%m/%Y"}</span>
                    </div>
                    <div class="texto">
                        {$news[s].texto|strip_tags:"UTF-8":TRUE}
                    </div>
                {/section}
                
            </section>
            <div class="clear"></div>
            <div style="margin: 10px 0 5px 0; float: right">
                <input type="button" name="" title="" value="Voltar" onClick="voltar()" class="botao"/>
            </div>            
    		<div class="clear"></div>
            {include file='footer.tpl'}
