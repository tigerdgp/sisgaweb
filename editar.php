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
		SELECT c.*, (SELECT nome FROM cidades WHERE id_cidade = c.cidade) AS n_cidade, (SELECT uf FROM estados WHERE id_estado = c.estado) AS n_estado
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
		SELECT id_cidade, nome
		FROM cidades
		ORDER BY uf ASC
	");
    $smarty->assign('city', Crud::getInstance()->select($dbh, $sql));
	
	
	if (isset($_POST['submit'])) {
		$errMsg		= "";
		$cor		= "RED";
		
		$codigo		= $_POST['cod'];
		switch($codigo) {
			case '1': //Atualização das informações gerais
				if(empty($_POST['p_nome'])) {
					$errMsg = 'Campo "Nome" não pode ficar em branco.';
				}elseif(empty($_POST['p_mae'])) {
					$errMsg = 'Campo "Mãe" não pode ficar em branco.';
				}elseif(empty($_POST['p_pai'])) {
					$errMsg = 'Campo "Pai" não pode ficar em branco.';
				}elseif(empty($_POST['p_nasc'])) {
					$errMsg = 'Campo "Data Nascimento" não pode ficar em branco.';
				}elseif(empty($_POST['p_escolaridade'])) {
					$errMsg = 'Campo "Escolaridade" não pode ficar em branco.';
				}elseif(empty($_POST['p_nacionalidade'])) {
					$errMsg = 'Campo "Nacionalidade" não pode ficar em branco.';
				}
				else {
					try {
						//Verifica se houve atualização no perfil						
						if(empty($_POST['p_perfil'])) {
							$perfil = $_SESSION['perfil'];
						}else {
							$perfil	= $_POST['p_perfil'];
						}
						
						//Recupera os dados pelo método POST e armazena em um array
						$dados 		= array(
							$_POST['p_nome'], $_POST['p_mae'], $_POST['p_pai'], $_POST['p_nasc'], $_POST['p_escolaridade'], $_POST['p_nacionalidade'], $_POST['p_naturalidade'],
							$_POST['p_n_uf'], $_POST['p_sexo'], $_POST['p_raca'], $_POST['p_estado_civil'], $_POST['p_deficiencia'], $perfil
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
							$errMsg .= 'Informações gerais atualizadas com sucesso!';
							$cor = "GREEN";
							phpAlert("Informações gerais atualizadas com sucesso!");
							Redirect("?editar_perfil&u=".$id_user."&etapa=2");
						}else{
							$errMsg .= 'As informações não foram atualizadas.';
						}
					}catch(Exception $e) {
						$errMsg .= 'Ocorreu um erro.'.$e;
					}
				}
				break;
				
			case '2': //Atualização dos dados de contato
				if(empty($_POST['p_endereco'])) {
					$errMsg = 'Campo "Endereço" não pode ficar em branco.';
				}elseif(empty($_POST['p_numero'])) {
					$errMsg = 'Campo "Nº" não pode ficar em branco.';
				}elseif(empty($_POST['p_bairro'])) {
					$errMsg = 'Campo "Bairro" não pode ficar em branco.';
				}elseif(empty($_POST['p_cep'])) {
					$errMsg = 'Campo "CEP" não pode ficar em branco.';
				}elseif(empty($_POST['p_fone2'])) {
					$errMsg = 'Campo "Telefone Celular" não pode ficar em branco.';
				}
				else {
					try {
						//Recupera os dados pelo método POST e armazena em um array
						$dados 		= array(
							 $_POST['p_endereco'], $_POST['p_numero'], $_POST['p_complemento'], $_POST['p_bairro'], $_POST['p_cep'], $_POST['p_cidade'],
							 $_POST['p_c_uf'], $_POST['p_ref'], $_POST['p_fone1'], $_POST['p_fone2'], $_POST['p_fone3'], $_POST['p_email']
						);
						
						//Faz o update no banco de dados
						$sql 		= sprintf("
							UPDATE contatos
							SET endereco = :param0, numero = :param1, complemento = :param2, bairro = :param3, cep = :param4, cidade = :param5, estado = :param6, referencia = :param7, telefone1 = :param8, telefone2 = :param9, telefone3 = :param10, email = :param11
							WHERE id_usuario = '".$id_user."'
						");
						$r 		= Crud::getInstance()->update($dbh, $sql, $dados);
						
						//Mensagem
						if($r == true){
							$errMsg .= 'Informações de contato atualizadas com sucesso!';
							$cor = "GREEN";
							phpAlert("Informações de contato atualizadas com sucesso!");
							Redirect("?editar_perfil&u=".$id_user."&etapa=3");
						}else{
							$errMsg .= 'As informações não foram atualizadas.';
						}
					}catch(Exception $e) {
						$errMsg .= 'Ocorreu um erro.'.$e;
					}
				}
				break;
				
			case '3': //Atualização das informações extras
				if(empty($_POST['i_profissao'])) {
					$errMsg = 'Campo "Profissão" não pode ficar em branco.';
				}
				else {
					try {
						//Recupera os dados pelo método POST e armazena em um array
						$dados 		= array(
							$_POST['i_profissao'], $_POST['i_renda'], $_POST['i_trabalho'], $_POST['i_tipo_escola'], $_POST['i_arrimo'], $_POST['i_cursou_senac'],
							$_POST['i_p_nome1'], $_POST['i_p_renda1'], $_POST['i_p_parentesco1'], $_POST['i_p_profissao1'], $_POST['i_p_nome2'], $_POST['i_p_renda2'],
							$_POST['i_p_parentesco2'], $_POST['i_p_profissao2'], $_POST['i_p_nome3'], $_POST['i_p_renda3'], $_POST['i_p_parentesco3'],
							$_POST['i_p_profissao3'], $_POST['i_p_nome4'], $_POST['i_p_renda4'], $_POST['i_p_parentesco4'], $_POST['i_p_profissao4']
						);
						
						//Faz o update no banco de dados
						$sql 		= sprintf("
							UPDATE info_extra
							SET profissao = :param0, renda = :param1, trabalho = :param2, tipo_escola = :param3, arrimo = :param4, cursou_senac = :param5, p_nome1 = :param6, p_renda1 = :param7, p_parentesco1 = :param8, p_profissao1 = :param9, p_nome2 = :param10, p_renda2 = :param11, p_parentesco2 = :param12, p_profissao2 = :param13, p_nome3 = :param14, p_renda3 = :param15, p_parentesco3 = :param16, p_profissao3 = :param17, p_nome4 = :param18, p_renda4 = :param19, p_parentesco4 = :param20, p_profissao4 = :param21
							WHERE id_usuario = '".$id_user."'
						");
						$r 		= Crud::getInstance()->update($dbh, $sql, $dados);
						
						//Mensagem
						if($r == true){
							$errMsg .= 'Informações extras atualizadas com sucesso!';
							$cor = "GREEN";
							phpAlert("Informações extras atualizadas com sucesso!");
							Redirect("?painel");
						}else{
							$errMsg .= 'As informações não foram atualizadas.';
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
		'nivel'		=> 1	//1-Aluno | 2-Instrutor | 3-Administrador | 4-Gerente
    );
	
	if($_SESSION['nivel'] < $page['nivel']) {
		header('location: ?login');
	}
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('editar.tpl');
?>