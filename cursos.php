<?php

	/*
	**************************************************************************
	*	Nome: 		cursos.php
	*	Descrição: 	Página de listagem dos cursos
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		29/04/2015
	*	Versão: 	1.1
	*	Edição: 	19/09/2015
	**************************************************************************
	*/
	
	/* ********** ********** ********** **********
    ******* Listagem de Cursos Disponíveis *******
    ********** ********** ********** ********** */
    $cursos = array();
    $query = sprintf("
		SELECT c.id_curso AS id, c.nome AS curso, c.carga_horaria, c.data_inicio, c.data_termino, c.hora_inicio, c.hora_termino, c.inscricao, c.vagas, (
        SELECT count(t.id_turma) AS alunos
		FROM turmas t
        WHERE t.id_curso = c.id_curso) AS vaga
		FROM cursos c
        WHERE c.inscricao = 1
		ORDER BY c.data_inicio ASC 
	");//
    $con = $dbh->query($query);
    while($row = $con->fetch(PDO::FETCH_ASSOC)){
        $cursos[] = $row;
    }
    $smarty->assign('cursos', $cursos);
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'cursos',
	    'title'  	=> 'Cursos',
	    'tab'    	=> 0,
	    'path'   	=> '[]',
		'nivel'		=> 1
    );
	
	if($_SESSION['nivel'] < $page['nivel']) {
		header('location: ?login');
	}
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('cursos.tpl');
?>