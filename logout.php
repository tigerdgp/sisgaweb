<?php

	/*
	**************************************************************************
	*	Nome: 		logout.php
	*	Descrição: 	Página para fazer logout do usuario
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		19/05/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/
	
	//session_destroy();
	//header("Location: ?home");
	require_once "includes/classes/sair.class.php";
	Sair::getInstance()->logout();
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'logout',
	    'title'  	=> 'Saindo...',
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
    //$smarty->display('logout.tpl');
?>