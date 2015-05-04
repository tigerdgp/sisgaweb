<?php

	/*
	**************************************************************************
	*	Nome: 		main.php
	*	Descrição: 	Página padrão
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		23/03/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/	
	
	
	/* ********** ********** ********** **********
    ********** Início - Notícias **********
    ********** ********** ********** ********** */
    $news = array();
    $query_news = sprintf("SELECT id_noticia AS id, titulo, texto, data, autor FROM noticias ORDER BY data DESC LIMIT 0,3");
	//$query_news = sprintf("SELECT n.id_noticia AS id, n.titulo_loc0 AS titulo, n.conteudo_loc0 AS conteudo, n.data, u.nick, (SELECT count(*) FROM " . $config['db']['prefixo'] . "comentarios c WHERE c.id_noticia = n.id_noticia AND c.ativo = 1) AS coment FROM " . $config['db']['prefixo'] . "noticias n INNER JOIN " . $config['db']['prefixo'] . "usuarios u ON n.id_autor = u.id_user WHERE destaque = 0 ORDER BY data DESC LIMIT 0,3");
    $con_news = $dbh->query($query_news);
    while($row_news = $con_news->fetch(PDO::FETCH_ASSOC)){
        $news[] = $row_news;
    }
    $smarty->assign('news', $news);
	
	//$news = DaoNews::getInstance()->BuscarPorCOD(1);
	/*$smarty->assign('newsti', $news->getTitulo());
	$smarty->assign('newste', $news->getTexto());
	$smarty->assign('newsa', $news->getAutor());
	$smarty->assign('newsd', $news->getData());*/
	//echo $teste->getNome();
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'home',
	    'title'  	=> 'Início',
	    'tab'    	=> 0,
	    'path'   	=> '[]'
    );
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('home.tpl');
?>