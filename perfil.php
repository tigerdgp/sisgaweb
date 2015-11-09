<?php

	/*
	**************************************************************************
	*	Nome: 		perfil.php
	*	Descrição: 	Página de perfil do usuario
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		29/04/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/
	
	$id_user = $_SESSION['id_usuario'];
	$smarty->assign('edit_user', $id_user);
	
    $sql = sprintf("
		SELECT u.*, l.*, (SELECT nome FROM cidades WHERE id_cidade = u.naturalidade) AS cidade, (SELECT uf FROM estados WHERE id_estado = u.n_uf) AS estado
		FROM usuarios u 
		INNER JOIN logs l ON u.id_usuario = l.id_usuario 
		WHERE u.id_usuario = '".$id_user."' 
		ORDER BY l.id_log DESC LIMIT 1
	");
    $smarty->assign('user', Crud::getInstance()->select($dbh, $sql));

	$sql = sprintf("
		SELECT c.*, e.uf AS estado 
		FROM contatos c 
		INNER JOIN estados e ON c.estado = e.id_estado 
		WHERE c.id_usuario = '".$id_user."'
	");
    $smarty->assign('contato', Crud::getInstance()->select($dbh, $sql));


    $sql = sprintf("
		SELECT c.id_curso AS id, c.nome AS curso, c.carga_horaria, c.data_inicio, c.data_termino, c.hora_inicio, c.hora_termino, t.id_aluno AS aluno
		FROM cursos c
        INNER JOIN turmas t ON c.id_curso = t.id_curso
        WHERE t.id_aluno = '".$id_user."'
		ORDER BY c.data_inicio ASC
	");
    $smarty->assign('cursos', Crud::getInstance()->select($dbh, $sql));
	
		
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'perfil',
	    'title'  	=> 'Meu Perfil',
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
    $smarty->display('perfil.tpl');
?>