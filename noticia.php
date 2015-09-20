<?php

	/*
	**************************************************************************
	*	Nome: 		noticia.php
	*	Descrição: 	Página para exibição de noticias
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		19/09/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/	
	
	
	/* ********** ********** ********** **********
    *************** Exibe Notícia ****************
    ********** ********** ********** ********** */
    $noticia = $_GET['n'];
    $id = $_GET['i'];
    $n = str_replace("_"," ",$noticia);
    $news = array();
    $query = sprintf("
		SELECT n.id_noticia AS id, n.titulo, n.texto, n.data, u.nome 
		FROM noticias n
		INNER JOIN usuarios u ON n.autor = u.id_usuario
		WHERE n.titulo = '".$n."' AND n.id_noticia = '".$id."'
		LIMIT 1
	");
    $con = $dbh->query($query);
    while($row = $con->fetch(PDO::FETCH_ASSOC)){
        $news[] = $row;
    }
    $smarty->assign('news', $news);
        
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'noticia',
	    'title'  	=> 'Notícia',
	    'tab'    	=> 0,
	    'path'   	=> '[]',
		'nivel'		=> 0
    );
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('noticia.tpl');
?>