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

    if($_GET['c'] == 'matriculas') {

        $a = $_GET['a'];
        $d = $_GET['d'];
		$u = $_GET['u'];
		$p = $_GET['p'];
		$x = $_GET['x'];

        if($a >= '1') {
            $sql = sprintf("
		        UPDATE turmas 
                SET ativo = '1'
                WHERE id_turma = :param0
	        ");
            $r = Crud::getInstance()->update($dbh, $sql, array($a));
            if($r == TRUE){
			    $errMsg .= 'Pré-matrícula efetuada com sucesso!';
			    $cor = "GREEN";
                //$sql = sprintf("SELECT id_aluno, id_curso, id_form FROM turmas WHERE id_turma = '".$a);
                //$r = Crud::getInstance()->select($dbh, $sql);
                echo "<script language='javascript'>window.open('?pdf&t=".$a."&u=".$u."&p=".$p."&c=".$x."', '_blank');</script>";
		    }else{
			    $errMsg .= 'A Pré-matrícula não foi efetuada.';
		    }
        }elseif($d >= '1') {
            $sql = sprintf("
		        DELETE FROM turmas
                WHERE id_turma = :param0
	        ");
            $r = Crud::getInstance()->update($dbh, $sql, array($d));
            if($r == TRUE){
			    $errMsg .= 'Pré-matrícula removida com sucesso!';
			    $cor = "GREEN";
		    }else{
			    $errMsg .= 'Houve um erro ao remover a Pré-matrícula.';
		    }
        }        
        $smarty->assign('errMsg', $errMsg);
	    $smarty->assign('cor', $cor);

        $sql = sprintf("
		        SELECT c.nome AS curso, c.data_inicio, c.hora_inicio, c.hora_termino, u.nome AS aluno, t.id_turma AS id, t.id_curso, t.id_form, u.id_usuario
		        FROM cursos c
                INNER JOIN turmas t ON c.id_curso = t.id_curso
                INNER JOIN usuarios u ON u.id_usuario = t.id_aluno
                WHERE t.ativo = 0
		        ORDER BY u.nome ASC 
	        ");
        $smarty->assign('matricula', Crud::getInstance()->select($dbh, $sql));
    }
	
	
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'admin',
	    'title'  	=> '',
	    'tab'    	=> 0,
	    'path'   	=> '[]',
		'nivel'		=> 3	//1-Aluno | 2-Instrutor | 3-Administrador | 4-Gerente
    );
	
	if($_SESSION['nivel'] < $page['nivel']) {
		header('location: ?login');
	}
	$switch = $_GET['c'];
	//Faz o include da página solicitada
    switch($switch)
    {			
        //Carrega a tela de administração de matriculas
	    case 'matriculas':
			$page['title'] = 'Administração de Matrículas';
		    $display = 'matriculas.tpl';
		    break;
			
        //Carrega a tela de matricula
	    case 'matricula':
			$page['title'] = 'Matrícula';
		    $display = 'matricula.tpl';
		    break;
			
		//Carrega a tela de administração de banners
	    case 'banners':
			$page['title'] = 'Administração de Banners';
		    $display = 'banners.tpl';
		    break;
		
		//Carrega a tela de administração de notas
	    case 'notas':
			$page['title'] = 'Administração de Notas';
		    $display = 'notas.tpl';
		    break;
			
        //Carrega a tela de administração de noticias
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