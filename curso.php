<?php

	/*
	**************************************************************************
	*	Nome: 		curso.php
	*	Descrição: 	Página de informações de curso
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		30/04/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/
	
	
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'curso',
	    'title'  	=> 'Curso',
	    'tab'    	=> 0,
	    'path'   	=> '[]',
		'nivel'		=> 1
    );
	
	if($_SESSION['nivel'] < $page['nivel']) {
		header('location: ?login');
	}
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('curso.tpl');
?>