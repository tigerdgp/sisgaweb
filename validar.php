<?php

	/*
	**************************************************************************
	*	Nome: 		validar.php
	*	Descrição: 	Página para validacoes
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		15/05/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/
	
	if(!empty()
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'validar',
	    'title'  	=> 'Validando...',
	    'tab'    	=> 0,
	    'path'   	=> '[]'
    );
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('validar.tpl');
?>