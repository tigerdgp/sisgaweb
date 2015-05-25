<?php

	/*
	**************************************************************************
	*	Nome: 		validar.php
	*	Descrição: 	Página para validacoes
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		15/05/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/
	
	if(!empty($_POST) AND (empty($_POST['user']) OR empty($_POST['pass']))) {
		header("Location: ?home");
	}
	else {
		if($_POST['validar'] == '1') {
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			
			$msg = "";
			
			$query = $dbh->prepare("
				SELECT d.cpf, u.id_usuario, u.perfil, u.nome 
				FROM usuarios u
				INNER JOIN documentos d ON u.id_usuario = d.id_usuario
				WHERE (d.cpf = :user) AND (u.senha = :pass)
				LIMIT 1
			");//'".$user."') AND (u.senha = '".$pass."')
			$query->bindParam(':user', $user);
			$query->bindParam(':pass', $pass);
			$query->execute();
			$test = $query->fetchColumn();
			if($test == false) {
				$msg = "Login falhou";
			}
			else {
				$msg = $r['nome'];
			}
			/*$r = $query->fetch(PDO::FETCH_ASSOC);
			if(count($r) > 0) {*/
				/*if($r = $query->fetch(PDO::FETCH_ASSOC)){
				$msg = $r['u.nome'];
				
				//$msg += "OK";
			}
			else {
				$msg = "Erro";
			}*/
			//echo $msg;
			$smarty->assign('msg', $msg);
			/*$con = $dbh->query($query);
			if($con->fetch(PDO::FETCH_NUM) != 1) {
				$erro = "Login invalido!";
				$smarty->assign('erro', $erro);
			}
			else {
				$r = $con->fetch(PDO::FETCH_ASSOC);
			}*/
		}
	}
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'validar',
	    'title'  	=> 'Validando...',
	    'tab'    	=> 0,
	    'path'   	=> '[]'
    );
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('validar.tpl');
?>