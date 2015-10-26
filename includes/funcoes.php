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
	
	//Função para pegar ip do usuario
	function getIp() {
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {	 
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];	 
		}
		else{	 
			$ip = $_SERVER['REMOTE_ADDR'];	 
		}	 
		return $ip;	 
	}
	
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
	
	/**
	* Função para gerar strings aleatórias com numeros, letras e simbolos
	*
	* @author    Thiago Belem <contato@thiagobelem.net>
	*
	* @param integer $tamanho Tamanho da string a ser gerada
	* @param boolean $maiusculas Se terá letras maiúsculas
	* @param boolean $numeros Se terá números
	* @param boolean $simbolos Se terá símbolos
	*
	* @return string A string gerada
	*/
	
	function random($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false) {
		$lmin = 'abcdefghijklmnopqrstuvwxyz';
		$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$num = '1234567890';
		$simb = '!@#$%*-';
		$retorno = '';
		$caracteres = '';
		
		$caracteres .= $lmin;
		if ($maiusculas) $caracteres .= $lmai;
		if ($numeros) $caracteres .= $num;
		if ($simbolos) $caracteres .= $simb;
		
		$len = strlen($caracteres);
		for ($n = 1; $n <= $tamanho; $n++) {
			$rand = mt_rand(1, $len);
			$retorno .= $caracteres[$rand-1];
		}
		return $retorno;
	}
	
	
	//Função de redirecionamento
	function Redirect($url, $code = 302)
	{
		if (strncmp('cli', PHP_SAPI, 3) !== 0)
		{
			if (headers_sent() !== true)
			{
				if (strlen(session_id()) > 0) // if using sessions
				{
					session_regenerate_id(true); // avoids session fixation attacks
					session_write_close(); // avoids having sessions lock other requests
				}
	
				if (strncmp('cgi', PHP_SAPI, 3) === 0)
				{
					header(sprintf('Status: %03u', $code), true, $code);
				}
	
				header('Location: ' . $url, true, (preg_match('~^30[1237]$~', $code) > 0) ? $code : 302);
			}
	
			exit();
		}
	}
?>