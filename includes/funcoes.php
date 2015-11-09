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
	
	/**
	* Define a variável global de configuração
	*/
	global $config;
	
	
	/**
	* Função para pegar ip do usuario
	*/
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
	
	
	/**
	* Função para alternar idioma de exibição do sistema
	*/
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
    //checkidioma();
	
	
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
	
	
	/**
	* Função de redirecionamento
	*/
	function Redirect($url, $code = 302, $time = 0)
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
	
				header('Refresh: '.$time.'; url= ' . $url, true, (preg_match('~^30[1237]$~', $code) > 0) ? $code : 302);
			}
	
			exit();
		}
	}
	
	
	/**
	* Função para exibição de alertas
	*/
	function phpAlert($msg) {
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}
	
	
	/**
	* Registra uma visita e/ou pageview para o visitante
	*//*
	function registraVisita() {
		$sql = sprintf("SELECT COUNT(*) FROM visitas WHERE data = CURDATE()");
		$resultado = Crud::getInstance()->contar($dbh, $sql, 'visitas');
		// Verifica se é uma visita (do visitante)
		$nova = (!isset($_SESSION['ContadorVisitas'])) ? true : false;
		// Verifica se já existe registro para o dia
		if ($resultado[0] == 0) {
			$sql = sprintf("INSERT INTO visitas VALUES (NULL, CURDATE(), 1, 1)");
		} else {
			if ($nova == true) {
				$sql = sprintf("UPDATE visitas SET uniques = (uniques + 1), pageviews = (pageviews + 1) WHERE data = CURDATE()");
			} else {
				$sql = sprintf("UPDATE visitas SET pageviews = (pageviews + 1) WHERE data = CURDATE()");
			}
		}
		// Registra a visita
		Crud::getInstance()->insert($dbh, $sql);
		// Cria uma variavel na sessão
		$_SESSION['ContadorVisitas'] = md5(time());
	}
	
	
	/**
	* Função que retorna o total de visitas
	*
	* @param string $tipo - O tipo de visitas a se pegar: (uniques|pageviews)
	* @param string $periodo - O período das visitas: (hoje|mes|ano)
	*
	* @return int - Total de visitas do tipo no período
	*//*
	function pegaVisitas($tipo, $periodo) {
		switch($tipo) {
			default:
			case 'uniques':
				$campo = 'uniques';
				break;
			case 'pageviews':
				$campo = 'pageviews';
				break;
		}
		switch($periodo) {
			default:
			case 'sempre':
				$busca = "";
				break;
			case 'hoje':
				$busca = " WHERE data = CURDATE()";
				break;
			case 'mes':
				$busca = " WHERE data BETWEEN DATE_FORMAT(CURDATE(), '%Y-%m-01') AND LAST_DAY(CURDATE())";
				break;
			case 'ano':
				$busca = " WHERE data BETWEEN DATE_FORMAT(CURDATE(), '%Y-01-01') AND DATE_FORMAT(CURDATE(), '%Y-12-31')";
				break;
		}
		// Faz a consulta no MySQL em função dos argumentos
		$sql = sprintf("SELECT SUM(".$campo.") AS visita FROM visitas".$busca);
		$resultado = Crud::getInstance()->contar($dbh, $sql, 'visita');
		// Retorna o valor encontrado ou zero
		return (!empty($resultado)) ? (int)$resultado[0] : 0;
	}*/
	
?>