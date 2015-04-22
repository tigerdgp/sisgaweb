<?php

	/*
	**************************************************************************
	*	Nome: 		login.php
	*	Descrição: 	Página de login do sistema
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		09/04/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'login',
	    'title'  	=> 'Login',
	    'tab'    	=> 0,
	    'path'   	=> '[]'
    );
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('login.tpl');
?>