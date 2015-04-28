<?php

	/*
	**************************************************************************
	*	Nome: 		funcoes.php
	*	Descrição: 	Arquivo de funções do sistema
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		23/03/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/
	
	//Define a variável global de configuração
	global $config;
	
	//Função para alternar idioma de exibição do sistema 
	/*(Desativado)
    $idiomas = array(
	    0 => 'ptbr',
	    1 => 'enus',
    );
    function checkidioma()
    {
	    global $idiomas;
	    if(!isset($_SESSION['idioma']) || !isset($idiomas[$_SESSION['idioma']]))
		    $_SESSION['idioma'] = $config['idioma'];
    }
    checkidioma();
	*/
	

?>