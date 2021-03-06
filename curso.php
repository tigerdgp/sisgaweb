<?php

	/*
	**************************************************************************
	*	Nome: 		curso.php
	*	Descrição: 	Página de informações de curso
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		30/04/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/

    if(isset($_POST['submit'])){
        header('Location: ?cursos',TRUE,307);
	}
	
    $id_c = $_GET['c'];
    $sql = sprintf("
		SELECT c.id_curso AS id, c.nome AS curso, c.carga_horaria, c.data_inicio, c.data_termino, c.hora_inicio, c.hora_termino, c.inscricao, c.valor, c.escolaridade, c.idade, c.programa, c.vagas, i.nome AS instituicao
		FROM cursos c
        INNER JOIN instituicao i ON c.id_instituicao = i.id_instituicao
        WHERE id_curso = '".$id_c."'
		LIMIT 1 
	");
    $smarty->assign('curso', Crud::getInstance()->select($dbh, $sql));
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'curso',
	    'title'  	=> 'Curso',
	    'tab'    	=> 0,
	    'path'   	=> '[]',
		'nivel'		=> 1	//1-Aluno | 2-Instrutor | 3-Administrador | 4-Gerente
    );
	
	if($_SESSION['nivel'] < $page['nivel']) {
		header('location: ?login');
	}
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('curso.tpl');
?>