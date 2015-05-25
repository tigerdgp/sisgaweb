<?php

	/*
	**************************************************************************
	*	Nome: 		main.php
	*	Descrição: 	Página padrão
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		23/03/2015
	*	Versão: 	1.0
	*	Edição: 	20/05/2015
	**************************************************************************
	*/	
	
	
	/* ********** ********** ********** **********
    ****************** Notícias ******************
    ********** ********** ********** ********** */
    $news = array();
    $query = sprintf("
		SELECT n.id_noticia AS id, n.titulo, n.texto, n.data, u.nome 
		FROM noticias n
		INNER JOIN usuarios u ON n.autor = u.id_usuario
		ORDER BY n.data DESC 
		LIMIT 0,3
	");
    $con = $dbh->query($query);
    while($row = $con->fetch(PDO::FETCH_ASSOC)){
        $news[] = $row;
    }
    $smarty->assign('news', $news);
	
	
	/* Estatistica */
	//$estatistica = array();
	$query = sprintf("
		SELECT count(u.id_usuario) AS alunos
		FROM usuarios u
	");
	$con = $dbh->query($query);
	$row = $con->fetch(PDO::FETCH_ASSOC);
	$alunos = $row['alunos'];
    $smarty->assign('alunos', $alunos);
	
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'home',
	    'title'  	=> 'Início',
	    'tab'    	=> 0,
	    'path'   	=> '[]',
		'nivel'		=> 0
    );
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('home.tpl');
?>