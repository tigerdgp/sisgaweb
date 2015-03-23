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
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'main',
	    'title'  	=> 'Início',
	    'tab'    	=> 0,
	    'path'   	=> '[]'
    );
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('main.tpl');
?>