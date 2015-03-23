<?php

	/*
	**************************************************************************
	*	Nome: 		config.php
	*	Descrição: 	Arquivo de configuração do sistema
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		23/03/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/

	//Define a variável global de configuração
	global $config;
	
	//Define as variáveis de configuração do banco de dados
	$config['db']['ip'] 		= "";//IP
	$config['db']['porta'] 		= "";//Porta
	$config['db']['user'] 		= "";//Usuário
	$config['db']['pass'] 		= "";//Senha
	$config['db']['db'] 		= "";//Banco
	
	//Define a versão do framework smarty utilizado
	$config['smarty']			= "-3.1.21";
	
	//Define variáveis gerais
	$config['app_name']			= "SisGA Web";//Nome do sistema
	$config['logo']				= "";//Endereço do logo do sistema

	

?>