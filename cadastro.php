<?php

	/*
	**************************************************************************
	*	Nome: 		cadastro.php
	*	Descrição: 	Página de controle dos cadastros do sistema
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		11/05/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/
	
	if(isset($_POST['submit'])){
		$errMsg = "";
		$cor	= "RED";
		
		if($_POST['cod'] == '1') { //Cadastro de instituições
		} elseif($_POST['cod'] == '2') { //Cadastro de cursos
		} elseif($_POST['cod'] == '3') { //Cadastro de pessoas
		
			//Verificação dos campos obrigatorios que devem ser preenchidos
			if(empty($_POST['p_nome'])) {
				$errMsg .= 'Campo "Nome" obrigatório.';
			}elseif(empty($_POST['p_mae'])) {
				$errMsg .= 'Campo "Mãe" obrigatório.';
			}elseif(empty($_POST['p_nasc'])) {
				$errMsg .= 'Campo "Data de Nascimento" obrigatório.';
			}elseif(empty($_POST['p_naturalidade'])) {
				$errMsg .= 'Campo "Naturalidade" obrigatório.';
			}elseif(empty($_POST['p_nacionalidade'])) {
				$errMsg .= 'Campo "Nacionalidade" obrigatório.';
			}elseif(empty($_POST['p_escolaridade'])) {
				$errMsg .= 'Campo "Escolaridade" obrigatório.';
			}elseif(empty($_POST['p_cpf'])) {
				$errMsg .= 'Campo "CPF" obrigatório.';
			}elseif(empty($_POST['p_rg'])) {
				$errMsg .= 'Campo "Identidade" obrigatório.';
			}elseif(empty($_POST['p_orgao'])) {
				$errMsg .= 'Campo "Orgão Emissor" obrigatório.';
			}elseif(empty($_POST['p_emissao'])) {
				$errMsg .= 'Campo "Data de Emissão" obrigatório.';
			}elseif(empty($_POST['p_endereco'])) {
				$errMsg .= 'Campo "Endereço" obrigatório.';
			}elseif(empty($_POST['p_numero'])) {
				$errMsg .= 'Campo "Nº" obrigatório.';
			}elseif(empty($_POST['p_bairro'])) {
				$errMsg .= 'Campo "Bairro" obrigatório.';
			}elseif(empty($_POST['p_cep'])) {
				$errMsg .= 'Campo "CEP" obrigatório.';
			}elseif(empty($_POST['p_cidade'])) {
				$errMsg .= 'Campo "Cidade" obrigatório.';
			}elseif(empty($_POST['p_fone2'])) {
				$errMsg .= 'Campo "Celular" obrigatório. (Pelo menos 1 deve ser informado)';
			}else {
				try {
					//Pega as variáveis pelo metodo POST
					//Dados Gerais
					$p_nome 			= $_POST['p_nome'];
					$p_mae 				= $_POST['p_mae'];
					$p_pai 				= $_POST['p_pai'];
					$p_nasc 			= $_POST['p_nasc'];
					$p_naturalidade 	= $_POST['p_naturalidade'];
					$p_nacionalidade 	= $_POST['p_nacionalidade'];
					$p_sexo 			= $_POST['p_sexo'];
					$p_raca 			= $_POST['p_raca'];
					$p_escolaridade 	= $_POST['p_escolaridade'];
					$p_estado_civil 	= $_POST['p_estado_civil'];
					$p_deficiencia 		= $_POST['p_deficiencia'];
					$p_perfil 			= $_POST['p_perfil'];
					$senha 			= $_POST['senha'];
					
					//Documentos
					$p_cpf 				= $_POST['p_cpf'];
					$p_rg 				= $_POST['p_rg'];
					$p_orgao 			= $_POST['p_orgao'];
					$p_emissao 			= $_POST['p_emissao'];
					$p_d_uf 			= $_POST['p_d_uf'];
					$p_titulo 			= $_POST['p_titulo'];
					$p_zona 			= $_POST['p_zona'];
					$p_sessao 			= $_POST['p_sessao'];
					$p_d_cidade 		= $_POST['p_d_cidade'];
					$p_reservista 		= $_POST['p_reservista'];
					
					//Contato
					$p_endereco 		= $_POST['p_endereco'];
					$p_numero 			= $_POST['p_numero'];
					$p_complemento 		= $_POST['p_complemento'];
					$p_bairro 			= $_POST['p_bairro'];
					$p_cep 				= $_POST['p_cep'];
					$p_cidade 			= $_POST['p_cidade'];
					$p_c_uf 			= $_POST['p_c_uf'];
					$p_ref 				= $_POST['p_ref'];
					$p_fone1 			= $_POST['p_fone1'];
					$p_fone2 			= $_POST['p_fone2'];
					$p_fone3 			= $_POST['p_fone3'];
					$p_email 			= $_POST['p_email'];
					
					
					$query = $dbh->prepare("
						INSERT INTO usuarios (nome, mae, pai, estado_civil, raca, deficiencia, data_nasc, sexo, escolaridade, perfil, data_cadastro, naturalidade, nacionalidade, senha)
						VALUES (:p_nome, :p_mae, :p_pai, :p_estado_civil, :p_raca, :p_deficiencia, :p_nasc, :p_sexo, :p_escolaridade, :p_perfil, now(), :p_naturalidade, :p_nacionalidade, :senha)
					");
					$query->bindParam(':p_nome', $p_nome);
					$query->bindParam(':p_mae', $p_mae);
					$query->bindParam(':p_pai', $p_pai);
					$query->bindParam(':p_nasc', $p_nasc);
					$query->bindParam(':p_naturalidade', $p_naturalidade);
					$query->bindParam(':p_nacionalidade', $p_nacionalidade);
					$query->bindParam(':p_sexo', $p_sexo);
					$query->bindParam(':p_raca', $p_raca);
					$query->bindParam(':p_escolaridade', $p_escolaridade);
					$query->bindParam(':p_estado_civil', $p_estado_civil);
					$query->bindParam(':p_deficiencia', $p_deficiencia);
					$query->bindParam(':p_perfil', $p_perfil);
					$query->bindParam(':senha', md5($senha));
					$query->execute();
					$id = $dbh->lastInsertId();
					$r1 = $query->fetch(PDO::FETCH_ASSOC);
					
					$query = $dbh->prepare("
						INSERT INTO documentos (id_usuario, cpf, rg_numero, rg_orgao, rg_emissao, rg_uf, titulo_numero, titulo_zona, titulo_sessao, titulo_cidade, reservista)
						VALUES (:id, :p_cpf, :p_rg, :p_orgao, :p_emissao, :p_d_uf, :p_titulo, :p_zona, :p_sessao, :p_d_cidade, :p_reservista)
					");
					$query->bindParam(':id', $id);
					$query->bindParam(':p_cpf', $p_cpf);
					$query->bindParam(':p_rg', $p_rg);
					$query->bindParam(':p_orgao', $p_orgao);
					$query->bindParam(':p_emissao', $p_emissao);
					$query->bindParam(':p_d_uf', $p_d_uf);
					$query->bindParam(':p_titulo', $p_titulo);
					$query->bindParam(':p_zona', $p_zona);
					$query->bindParam(':p_sessao', $p_sessao);
					$query->bindParam(':p_d_cidade', $p_d_cidade);
					$query->bindParam(':p_reservista', $p_reservista);
					$query->execute();
					$r2 = $query->fetch(PDO::FETCH_ASSOC);
					
					$query = $dbh->prepare("
						INSERT INTO contatos (id_usuario, endereco, numero, complemento, bairro, cep, cidade, estado, referencia, telefone1, telefone2, telefone3, email)
						VALUES (:id, :p_endereco, :p_numero, :p_complemento, :p_bairro, :p_cep, :p_cidade, :p_c_uf, :p_ref, :p_fone1, :p_fone2, :p_fone3, :p_email)
					");
					$query->bindParam(':id', $id);
					$query->bindParam(':p_endereco', $p_endereco);
					$query->bindParam(':p_numero', $p_numero);
					$query->bindParam(':p_complemento', $p_complemento);
					$query->bindParam(':p_bairro', $p_bairro);
					$query->bindParam(':p_cep', $p_cep);
					$query->bindParam(':p_cidade', $p_cidade);
					$query->bindParam(':p_c_uf', $p_c_uf);
					$query->bindParam(':p_ref', $p_ref);
					$query->bindParam(':p_fone1', $p_fone1);
					$query->bindParam(':p_fone2', $p_fone2);
					$query->bindParam(':p_fone3', $p_fone3);
					$query->bindParam(':p_email', $p_email);
					$query->execute();	
					$r3 = $query->fetch(PDO::FETCH_ASSOC);
					
					if(count($r1) == 1 && count($r2) == 1 && count($r3) == 1){
						$errMsg .= 'Cadastro efetuado com sucesso!';
						$cor = "GREEN";
					}else{
						$errMsg .= 'O cadastro não foi efetuado.';
					}
				}catch(Exception $e) {
					$errMsg .= 'Ocorreu um erro.'.$e;
				}
			}
		}
	}
	$smarty->assign('errMsg', $errMsg);
	$smarty->assign('cor', $cor);
	$smarty->assign('id', $id);
	
	$uf = array();
    $query = sprintf("
		SELECT id_estado, uf
		FROM estados
		ORDER BY uf ASC
	");
    $con = $dbh->query($query);
    while($row = $con->fetch(PDO::FETCH_ASSOC)){
        $uf[] = $row;
    }
    $smarty->assign('uf', $uf);
	
	$curso = array();
    $query = sprintf("
		SELECT c.programa, i.nome
		FROM cursos c
		INNER JOIN instituicao i ON c.id_instituicao = i.id_instituicao
	");
    $con = $dbh->query($query);
    while($row = $con->fetch(PDO::FETCH_ASSOC)){
        $curso[] = $row;
    }
    $smarty->assign('curso', $curso);
	
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'cadastro',
		'title' 	=> '',
	    'tab'    	=> 0,
	    'path'   	=> '[]',
		'nivel'		=> 3
    );
	
	if($_SESSION['nivel'] < $page['nivel']) {
		header('location: ?login');
	}
	$smarty->assign('teste', $_REQUEST['cadastro']);	
	$cad = $_GET['c'];
	//Faz o include da página solicitada
    switch($cad)
    {			
        //Carrega a tela de cadastro de Instituições
	    case 'instituicoes':
			$page['title'] = 'Cadastro de Instituições';
		    $display = 'cad_instituicoes.tpl';
		    break;
			
		//Carrega a tela de cadastro de cursos
	    case 'cursos':
			$page['title'] = 'Cadastro de Cursos';
		    $display = 'cad_cursos.tpl';
		    break;
		
		//Carrega a tela de cadastro de usuarios
	    case 'pessoas':
			$page['title'] = 'Cadastro de Pessoas';
		    $display = 'cad_pessoas.tpl';
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