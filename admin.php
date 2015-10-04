<?php

	/*
	**************************************************************************
	*	Nome: 		admin.php
	*	Descrição: 	Página de administração
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		29/04/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/

    $matricula = array();  
    $q = sprintf("
		    SELECT c.nome AS curso, c.data_inicio, c.hora_inicio, c.hora_termino, u.nome AS aluno, t.id_turma AS id
		    FROM cursos c
            INNER JOIN turmas t ON c.id_curso = t.id_curso
            INNER JOIN usuarios u ON u.id_usuario = t.id_aluno
            WHERE t.ativo = 0
		    ORDER BY u.nome ASC 
	    ");
    $con = $dbh->query($q);
    while($row = $con->fetch(PDO::FETCH_ASSOC)){
        $matricula[] = $row;
    }
    $smarty->assign('matricula', $matricula);
	
	
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'admin',
	    'title'  	=> '',
	    'tab'    	=> 0,
	    'path'   	=> '[]',
		'nivel'		=> 3
    );
	
	if($_SESSION['nivel'] < $page['nivel']) {
		header('location: ?login');
	}
	$switch = $_GET['c'];
	//Faz o include da página solicitada
    switch($switch)
    {			
        //Carrega a tela de cadastro de Instituições
	    case 'matriculas':
			$page['title'] = 'Administração de Matrículas';
		    $display = 'matriculas.tpl';
		    break;
			
		//Carrega a tela de cadastro de cursos
	    case 'banners':
			$page['title'] = 'Administração de Banners';
		    $display = 'banners.tpl';
		    break;
		
		//Carrega a tela de cadastro de usuarios
	    case 'notas':
			$page['title'] = 'Administração de Notas';
		    $display = 'notas.tpl';
		    break;
			
        //Carrega a tela de cadastro de usuarios
	    case 'noticias':
			$page['title'] = 'Administração de Notícias';
		    $display = 'news.tpl';
		    break;
			
		//Carrega a pagina padrão
	    default:
		    include 'painel.php';
		    break;
    }
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display($display);
?>