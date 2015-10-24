<?php

	/*
	**************************************************************************
	*	Nome: 		index.php
	*	Descrição: 	Página inicial, responsável por gerenciar as solicitações de páginas (URL Rewrite)
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		23/03/2015
	*	Versão: 	1.1
	*	Edição: 	20/09/2015
	**************************************************************************
	*/
	
	//Verifica se a sessão foi iniciada, caso não tenha sido, a inicia
	if (!isset($_SESSION)) session_start();
	

	//Inclusões de arquivos
    require_once('includes/setup.php');
	require_once('includes/classes/conexao.class.php');
	require_once('includes/classes/crud.class.php');
    require_once('includes/funcoes.php');
	
	//Inicia a instância do framework smarty
    $smarty = new Smarty_Setup();	
	

	//Criando o menu
    require_once('includes/menu.php');
     
	$sql = "";      
	if($_SESSION['nivel'] >= 3) {
    	$sql = "SELECT * FROM menu ORDER BY ordem ASC";
	}else {
    	$sql = "SELECT * FROM menu WHERE perfil = '1' ORDER BY ordem ASC";
	}
	$query = $dbh->query($sql);
    while($row = $query->fetch(PDO::FETCH_OBJ))
    {
            $menuItens[$row->pai][$row->id]= array('classe'=> $row->classe,'link'=> $row->link,'name'=> $row->nome,'seta'=> $row->seta);
    }    
    $smarty->assign('m_menu', $menuItens);
	


	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'index',
	    'title' 	=> 'Index',
	    'tab'    	=> 0,
	    'path'   	=> '[]',
		'nivel'		=> 0
    );


    $smarty->assign('amanha', strtotime('+1 day'));


    /* ********** ********** ********** **********
    ********* Cursos em Curso pelo Aluno *********
    ********** ********** ********** ********** */
    $id_user = $_SESSION['id_usuario'];
    $sql = sprintf("
		SELECT c.nome, c.data_inicio, c.data_termino, c.hora_inicio, c.hora_termino, c.local
		FROM cursos c
        INNER JOIN turmas t ON c.id_curso = t.id_curso
        WHERE t.id_aluno = '".$id_user."' AND t.ativo = 1
		ORDER BY c.data_inicio DESC
        LIMIT 2
	");
    $smarty->assign('cca', Crud::getInstance()->select($dbh, $sql));


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
	    case 'validar':
		    include 'validar.php';
		    break;
			
        //Carrega o Painel de Controle
	    case 'painel':
		    include 'painel.php';
		    break;
			
		//Carrega a página de cursos
	    case 'cursos':
		    include 'cursos.php';
		    break;
			
		//Carrega a página de informação do curso escolhido
	    case 'curso':
		    include 'curso.php';
		    break;
			
		//Carrega a página de perfil do usuario
	    case 'perfil':
		    include 'perfil.php';
		    break;
		
		//Carrega a página de perfil do usuario
	    case 'editar_perfil':
		    include 'editar.php';
		    break;
			
		//Carrega a tela de login
	    case 'login':
		    include 'login.php';
		    break;
			
		//Carrega a area de administração
	    case 'admin':
		    include 'admin.php';
		    break;
		
		//Carrega a tela de cadastro de usuarios
	    case 'cadastro':
		    include 'cadastro.php';
		    break;
			
		//Carrega o logout do usuario
	    case 'logout':
		    include 'logout.php';
		    break;

        //Carrega a pagina padrão
	    case 'noticia':
		    include 'noticia.php';
		    break;			
			
		//Carrega a pagina padrão
	    case 'home':
		    include 'home.php';
		    break;

        //Carrega a pagina padrão
	    case 'pdf':
		    include 'pdf.php';
		    break;			
			
        //Carrega a pagina padrão
	    default:
		    include 'home.php';
		    break;
    }
?>