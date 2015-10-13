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

        if($a >= '1') {
            $sql = $dbh->prepare("
		        UPDATE turmas 
                SET ativo = 1
                WHERE id_turma = :id
	        ");
            $sql->bindParam(':id', $a);
            $sql->execute();
            $r1 = $sql->fetch(PDO::FETCH_ASSOC);
            if(count($r1) == 1){
			    $errMsg .= 'Pré-matrícula efetuada com sucesso!';
			    $cor = "GREEN";
		    }else{
			    $errMsg .= 'A Pré-matrícula não foi efetuada.';
		    }
        }elseif($d >= '1') {
            $sql = $dbh->prepare("
		        DELETE FROM turmas
                WHERE id_turma = :id
	        ");
            $sql->bindParam(':id', $d);
            $sql->execute();
            $r1 = $sql->fetch(PDO::FETCH_ASSOC);
            if(count($r1) == 1){
			    $errMsg .= 'Pré-matrícula removida com sucesso!';
			    $cor = "GREEN";
		    }else{
			    $errMsg .= 'Houve um erro ao remover a Pré-matrícula.';
		    }
        }        
        $smarty->assign('errMsg', $errMsg);
	    $smarty->assign('cor', $cor);

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
    }
	
	
    
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