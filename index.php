<?php

	/*
	**************************************************************************
	*	Nome: 		index.php
	*	Descrição: 	Página inicial, responsável por gerenciar as solicitações de páginas (URL Rewrite)
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		23/03/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/
	
	//Verifica se a sessão foi iniciada, caso não tenha sido, a inicia
	if (!isset($_SESSION)) session_start();
	
	//Inclusões de arquivos
    require_once('includes/setup.php');
	//require_once('includes/classes/dao_news.class.php');
    //require_once('sisgaweb/includes/funcoes.php');
	
	//Inicia a instância do framework smarty
    $smarty = new Smarty_Setup();	
	
	//Criando o menu
    require_once('includes/menu.php');
            
    $query = mysql_query("SELECT * FROM menus ORDER BY ordem ASC");
    while($row = mysql_fetch_object($query))
    {
            $menuItens[$row->pai][$row->id]= array('link'=> $row->link,'name'=> $row->nome,'seta'=> $row->seta);
    }    
    $smarty->assign('m_menu', $menuItens);
	
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'index',
	    'title' 	=> 'Index',
	    'tab'    	=> 0,
	    'path'   	=> '[]'
    );

    //Recebe os parametros passados na string
    $queryx = $_SERVER['QUERY_STRING'];
    $smarty->assign('query', $queryx);
    //Pegar apenas os dados necessários
    list($str, $trash) = explode('&', $queryx, 2);
    //Pegamos a seção (ou valor)
    list($page) = explode('=', $str, 1);
	/*(Acresimo da verificação de idioma)
	list($page, $idiomas) = explode('=', $str, 2);
	*/	

	//Faz o include da página solicitada
    switch($page)
    {
	    /*(Desativado)
		case 'idioma':
		    //Alterando o idioma do site
		    //Verifica a veracidade dos dados em checkidioma()
		    $_SESSION['idioma'] = $idiomas;
		    checkidioma();
		    header('Location: '.($_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : '.'));
		    break;
		*/
        //Carrega o Painel de Controle
	    case 'painel':
		    include 'painel.php';
		    break;
			
		//Carrega a tela de login
	    case 'login':
		    include 'login.php';
		    break;
			
        //Carrega a pagina padrão
	    default:
		    include 'home.php';
		    break;
    }
?>