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
    $sql = sprintf("
		SELECT n.id_noticia AS id, n.titulo, n.texto, n.data, u.nome 
		FROM noticias n
		INNER JOIN usuarios u ON n.autor = u.id_usuario
		ORDER BY n.data DESC 
		LIMIT 0,3
	");    
    $smarty->assign('news', Crud::getInstance()->select($dbh, $sql));


    /* ********** ********** ********** **********
    ************** Listagem de Cursos ************
    ********** ********** ********** ********** */
    $sql = sprintf("
		SELECT c.nome, c.inscricao
		FROM cursos c
		ORDER BY c.nome AND c.inscricao ASC
        LIMIT 0,5
	");
    $smarty->assign('cursos', Crud::getInstance()->select($dbh, $sql));
	
	
	/* ********** ********** ********** **********
    ***************** Estatística ****************
    ********** ********** ********** ********** */
	$sql = sprintf("
		SELECT count(u.id_usuario) AS alunos
		FROM usuarios u
	");
    $smarty->assign('e_alunos', Crud::getInstance()->count($dbh, $sql, 'alunos'));

    $sql = sprintf("
		SELECT count(c.id_curso) AS cursos
		FROM cursos c
	");
    $smarty->assign('e_cursos', Crud::getInstance()->count($dbh, $sql, 'cursos'));

    $sql = sprintf("
		SELECT count(i.id_instituicao) AS instituicao
		FROM instituicao i
	");
    $smarty->assign('e_instituicoes', Crud::getInstance()->count($dbh, $sql, 'instituicao'));
	
    
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