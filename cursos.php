<?php

	/*
	**************************************************************************
	*	Nome: 		cursos.php
	*	Descrição: 	Página de listagem dos cursos
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		29/04/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/
	
	
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'cursos',
	    'title'  	=> 'Cursos',
	    'tab'    	=> 0,
	    'path'   	=> '[]'
    );
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('cursos.tpl');
?>