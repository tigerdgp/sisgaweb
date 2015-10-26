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
	
	//Exibir os dados de informações extras
	$sql = sprintf("
		SELECT *
		FROM info_extra
		WHERE id_usuario = '".$id_user."'
	");
    $smarty->assign('edit_i', Crud::getInstance()->select($dbh, $sql));
	
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
	
	
	if (isset($_POST['submit'])) {
		$errMsg		= "";
		$cor		= "";
		
		$codigo		= $_POST['cod'];
		switch($codigo) {
			case '1': //Atualização das informações gerais
				if(empty($_POST['p_nome'])) {
					$errMsg = 'Campo "Nome" não pode ficar em branco.';
				}
				else {
					try {
						//Recupera os dados pelo método POST e armazena em um array
						$dados 		= array(
							$_POST['p_nome'], $_POST['p_mae'], $_POST['p_pai'], $_POST['p_nasc'], $_POST['p_escolaridade'], $_POST['p_nacionalidade'], $_POST['p_naturalidade'],
							$_POST['p_n_uf'], $_POST['p_sexo'], $_POST['p_raca'], $_POST['p_estado_civil'], $_POST['p_deficiencia'], $_POST['p_perfil']
						);
						
						//Faz o update no banco de dados
						$sql 		= sprintf("
							UPDATE usuarios
							SET nome = :param0, mae = :param1, pai = :param2, data_nasc = :param3, escolaridade = :param4, nacionalidade = :param5, naturalidade = :param6, n_uf = :param7, sexo = :param8, raca = :param9, estado_civil = :param10, deficiencia = :param11, perfil = :param12
							WHERE id_usuario = '".$id_user."'
						");
						$r 		= Crud::getInstance()->update($dbh, $sql, $dados);
						
						//Mensagem
						if($r == true){
							$errMsg .= 'Informações atualizadas com sucesso!';
							$cor = "GREEN";
							
							/*$sql = sprintf("
								SELECT perfil, nome, foto 
								FROM usuarios
								WHERE id_usuario = '".$id_user."'
								LIMIT 1
							");
							$results	= Crud::getInstance()->select($dbh, $sql);
							$_SESSION['usuario']    = $results['nome'];
							$_SESSION['avatar']     = $results['foto'];
							//Perfil - Opções
							//1-Aluno | 2-Instrutor | 3-Administrador | 4-Gerente
							$_SESSION['nivel'] = $results['perfil'];
							if($results['perfil'] == 1) {
								$_SESSION['perfil'] = "Aluno";
							}elseif($results['perfil'] == 2) {
								$_SESSION['perfil'] = "Instrutor";
							}elseif($results['perfil'] == 3) {
								$_SESSION['perfil'] = "Administrador";
							}elseif($results['perfil'] == 4) {
								$_SESSION['perfil'] = "Gerente";
							}*/
							
							Redirect("?editar_perfil&u=".$id_user."&etapa=2");
						}else{
							$errMsg .= 'As informações não foram atualizadas.';
							$cor = "RED";
						}
					}catch(Exception $e) {
						$errMsg .= 'Ocorreu um erro.'.$e;
					}
				}
				break;
				
			case '2': //Atualização dos dados de contato
				if(empty($_POST['p_nome'])) {
				}
				else {
					try {
						//Recupera os dados pelo método POST e armazena em um array
						$dados 		= array(
							
						);
						
						//Faz o update no banco de dados
						$sql 		= sprintf("
						");
						$r 		= Crud::getInstance()->update($dbh, $sql, $dados);
						
						//Mensagem
						if($r == true){
							$errMsg .= 'Cadastro efetuado com sucesso!';
							$cor = "GREEN";
						}else{
							$errMsg .= 'O cadastro não foi efetuado.';
							$cor = "RED";
						}
					}catch(Exception $e) {
						$errMsg .= 'Ocorreu um erro.'.$e;
					}
				}
				break;
				
			case '3': //Atualização das informações extras
				if(empty($_POST['p_nome'])) {
				}
				else {
					try {
						//Recupera os dados pelo método POST e armazena em um array
						$dados 		= array(
							
						);
						
						//Faz o update no banco de dados
						$sql 		= sprintf("
						");
						$r 		= Crud::getInstance()->update($dbh, $sql, $dados);
						
						//Mensagem
						if($r == true){
							$errMsg .= 'Cadastro efetuado com sucesso!';
							$cor = "GREEN";
						}else{
							$errMsg .= 'O cadastro não foi efetuado.';
							$cor = "RED";
						}
					}catch(Exception $e) {
						$errMsg .= 'Ocorreu um erro.'.$e;
					}
				}
				break;
		}
	}
	elseif (isset($_POST['cancelar'])) {
		Redirect("?perfil");
	}
	$smarty->assign('errMsg', $errMsg);
	$smarty->assign('cor', $cor);
	
    
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