<?php

	/*
	**************************************************************************
	*	Nome: 		admin.php
	*	Descrição: 	Página de administração
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		29/04/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/
	
	
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'admin',
	    'title'  	=> 'Administração',
	    'tab'    	=> 0,
	    'path'   	=> '[]'
    );
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('admin.tpl');
?>