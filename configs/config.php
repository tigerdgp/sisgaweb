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
	$config['db']['ip'] 			= "localhost";//IP
	$config['db']['porta'] 			= "";//Porta
	$config['db']['user'] 			= "root";//Usuário
	$config['db']['pass'] 			= "";//Senha
	$config['db']['db'] 			= "sisgaweb";//Banco
	
	//Define variáveis do smarty
	$config['smarty']['versao']		= "-3.1.21";//versão do framework
	$config['smarty']['debug']		= false;//Ativação do debug
	
	//Define variáveis gerais
	$config['app_name']			= "SisGA Web";//Nome do sistema
	$config['logo']				= "templates/img/logo.png";//Endereço do logo do sistema

	

?>