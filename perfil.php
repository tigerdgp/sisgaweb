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
	
	$user = array();
	$contato = array();
    $query_u = sprintf("
		SELECT u.*, l.* 
		FROM usuarios u 
		INNER JOIN logs l ON u.id_usuario = l.id_usuario 
		WHERE u.id_usuario = 1 
		ORDER BY l.id_log DESC LIMIT 1
	");
	$query_c = sprintf("
		SELECT c.*, ci.nome AS cidade, e.uf AS estado 
		FROM contatos c 
		INNER JOIN cidades ci ON c.cidade = id_cidade 
		INNER JOIN estados e ON c.estado = id_estado 
		WHERE id_usuario = 1
	");
    $con = $dbh->query($query_u);
    while($row = $con->fetch(PDO::FETCH_ASSOC)){
        $user[] = $row;
    }
    $smarty->assign('user', $user);
	
	$con = $dbh->query($query_c);
    while($row = $con->fetch(PDO::FETCH_ASSOC)){
        $contato[] = $row;
    }
    $smarty->assign('contato', $contato);
	
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'perfil',
	    'title'  	=> 'Meu Perfil',
	    'tab'    	=> 0,
	    'path'   	=> '[]'
    );
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('perfil.tpl');
?>