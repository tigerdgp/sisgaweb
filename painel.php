<?php

	/*
	**************************************************************************
	*	Nome: 		painel.php
	*	Descrição: 	Página interna do sistema
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		23/03/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/
	
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'painel',
	    'title'  	=> 'Painel',
	    'tab'    	=> 0,
	    'path'   	=> '[]',
		'nivel'		=> 1	//1-Aluno | 2-Instrutor | 3-Administrador | 4-Gerente
    );
	
	if($_SESSION['nivel'] < $page['nivel']) {
		header('location: ?login');
	}
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('painel.tpl');
?>