<?php

	/*
	**************************************************************************
	*	Nome: 		search.php
	*	Descrição: 	Página de pesquisa
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		05/11/2015
	*	Versão: 	1.0
	*	Histórico: 	
					05/11/2015 - Criação
	**************************************************************************
	*/  


	//Pesquisa de usuarios
    $sql = sprintf("
		SELECT u.id_usuario, u.nome, u.perfil
		FROM usuarios u
		ORDER BY u.nome ASC 
	");
    $smarty->assign('usuarios', Crud::getInstance()->select($dbh, $sql));
	
	$sql = sprintf("
		SELECT c.nome, t.id_aluno
		FROM cursos c
		INNER JOIN turmas t ON t.id_curso = c.id_curso
		ORDER BY c.nome ASC 
	");
    $smarty->assign('cursos', Crud::getInstance()->select($dbh, $sql));



	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'search',
	    'title'  	=> 'Pesquisa',
	    'tab'    	=> 0,
	    'path'   	=> '[]',
		'nivel'		=> 3	//1-Aluno | 2-Instrutor | 3-Administrador | 4-Gerente
    );
	
	if($_SESSION['nivel'] < $page['nivel']) {
		header('location: ?login');
	}
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('search.tpl');

?>