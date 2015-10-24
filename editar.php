<?php

	/*
	**************************************************************************
	*	Nome: 		editar.php
	*	Descrição: 	Página de edição do perfil do usuario
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		23/10/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/
	
	$id_user = $_GET['u'];
	$etapa = $_GET['etapa'];
	
	/* Edição
	*/
	//Exibir os dados gerais
	$sql = sprintf("
		SELECT u.*, (SELECT nome FROM cidades WHERE id_cidade = u.naturalidade) AS cidade, (SELECT uf FROM estados WHERE id_estado = u.n_uf) AS estado
		FROM usuarios u
		WHERE id_usuario = '".$id_user."'
	");
    $smarty->assign('edit', Crud::getInstance()->select($dbh, $sql));
	
	//Exibir os dados de contatos
	$sql = sprintf("
		SELECT c.*, (SELECT nome FROM cidades WHERE id_cidade = c.cidade) AS cidade, (SELECT uf FROM estados WHERE id_estado = c.estado) AS estado
		FROM contatos c
		WHERE id_usuario = '".$id_user."'
	");
    $smarty->assign('edit_c', Crud::getInstance()->select($dbh, $sql));
	
	//Exibir os estados no formulario
    $sql = sprintf("
		SELECT id_estado, uf
		FROM estados
		ORDER BY uf ASC
	");
    $smarty->assign('uf', Crud::getInstance()->select($dbh, $sql));
	
	//Exibir as cidades no formulario
	$sql = sprintf("
		SELECT *
		FROM cidades
		ORDER BY uf ASC
	");
    $smarty->assign('city', Crud::getInstance()->select($dbh, $sql));
	
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'perfil',
	    'title'  	=> 'Meu Perfil',
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
    $smarty->display('editar.tpl');
?>