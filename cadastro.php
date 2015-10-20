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
		$teste	= "oi";
		
		if($_POST['cod'] == '1') { //Cadastro de instituições
			//Verificação dos campos obrigatorios que devem ser preenchidos
			/*if(empty($_POST['i_nome'])) {
				$errMsg .= 'Campo "Nome" obrigatório.';
			}elseif(empty($_POST['i_representante'])) {
				$errMsg .= 'Campo "Representante" obrigatório.';
			}elseif(empty($_POST['i_endereco'])) {
				$errMsg .= 'Campo "Endereço" obrigatório.';
			}elseif(empty($_POST['i_numero'])) {
				$errMsg .= 'Campo "Nº" obrigatório.';
			}elseif(empty($_POST['i_bairro'])) {
				$errMsg .= 'Campo "Bairro" obrigatório.';
			}elseif(empty($_POST['i_cep'])) {
				$errMsg .= 'Campo "CEP" obrigatório.';
			}elseif(empty($_POST['i_cidade'])) {
				$errMsg .= 'Campo "Cidade" obrigatório.';
			}elseif(empty($_POST['i_fone1'])) {
				$errMsg .= 'Campos "Telefone" obrigatórios. (Pelo menos 1 deve ser informado)';
			}else {
				try {
					//Pega as variáveis pelo metodo POST
					//Dados Gerais
					$i_nome 			= $_POST['i_nome'];
					$i_representante 	= $_POST['i_representante'];
					
					//Contato
					$i_endereco 		= $_POST['i_endereco'];
					$i_numero 			= $_POST['i_numero'];
					$i_complemento 		= $_POST['i_complemento'];
					$i_bairro 			= $_POST['i_bairro'];
					$i_cep 				= $_POST['i_cep'];
					$i_cidade 			= $_POST['i_cidade'];
					$i_uf 				= $_POST['i_uf'];
					$i_ref 				= $_POST['i_ref'];
					$i_fone1 			= $_POST['i_fone1'];
					$i_fone2 			= $_POST['i_fone2'];
					$i_fone3 			= $_POST['i_fone3'];
					$i_email 			= $_POST['i_email'];
					
					
					$query = $dbh->prepare("
						INSERT INTO instituicao (nome, representante, data_cad)
						VALUES (:i_nome, :i_representante, now())
					");
					$query->bindParam(':i_nome', $i_nome);
					$query->bindParam(':i_representante', $i_representante);
					$query->execute();
					$id = $dbh->lastInsertId();
					$r1 = $query->fetch(PDO::FETCH_ASSOC);
										
					
					$query = $dbh->prepare("
						INSERT INTO contatos (id_instituicao, endereco, numero, complemento, bairro, cep, cidade, estado, referencia, telefone1, telefone2, telefone3, email)
						VALUES (:id, :i_endereco, :i_numero, :i_complemento, :i_bairro, :i_cep, :i_cidade, :i_uf, :i_ref, :i_fone1, :i_fone2, :i_fone3, :i_email)
					");
					$query->bindParam(':id', $id);
					$query->bindParam(':i_endereco', $i_endereco);
					$query->bindParam(':i_numero', $i_numero);
					$query->bindParam(':i_complemento', $i_complemento);
					$query->bindParam(':i_bairro', $i_bairro);
					$query->bindParam(':i_cep', $i_cep);
					$query->bindParam(':i_cidade', $i_cidade);
					$query->bindParam(':i_uf', $i_uf);
					$query->bindParam(':i_ref', $i_ref);
					$query->bindParam(':i_fone1', $i_fone1);
					$query->bindParam(':i_fone2', $i_fone2);
					$query->bindParam(':i_fone3', $i_fone3);
					$query->bindParam(':i_email', $i_email);
					$query->execute();	
					$r2 = $query->fetch(PDO::FETCH_ASSOC);
					*/
					$id = '1';
					if(isset($_POST['i_pronatec'])) {
						$query = $dbh->prepare("
							INSERT INTO formularios (nome, programa, instituicao)
							VALUES (:form, 'PRONATEC', :id)
						");
						$query->bindParam(':form', 'form_pronatec_');
						$query->bindParam(':id', $id);
						$query->execute();
					}elseif(isset($_POST['i_psg'])) {
						$query = $dbh->prepare("
							INSERT INTO formularios (nome, programa, instituicao)
							VALUES (:form, 'PSG', :id)
						");
						$query->bindParam(':form', 'form_psg_');
						$query->bindParam(':id', $id);
						$query->execute();
					}elseif(isset($_POST['i_movel'])) {
						$query = $dbh->prepare("
							INSERT INTO formularios (nome, programa, instituicao)
							VALUES (:form, 'Escola Móvel', :id)
						");
						$query->bindParam(':form', 'form_movel_');
						$query->bindParam(':id', $id);
						$query->execute();
					}elseif(isset($_POST['i_planteq'])) {
						$query = $dbh->prepare("
							INSERT INTO formularios (nome, programa, instituicao)
							VALUES (:form, 'PLANTEQ', :id)
						");
						$query->bindParam(':form', 'form_planteq_');
						$query->bindParam(':id', $id);
						$query->execute();
					}elseif(isset($_POST['i_pnq'])) {
						$query = $dbh->prepare("
							INSERT INTO formularios (nome, programa, instituicao)
							VALUES (:form, 'PNQ', :id)
						");
						$query->bindParam(':form', 'form_pnq_');
						$query->bindParam(':id', $id);
						$query->execute();
					}
					/*
					if(count($r1) == 1 && count($r2) == 1){
						$errMsg .= 'Cadastro efetuado com sucesso!';
						$cor = "GREEN";
					}else{
						$errMsg .= 'O cadastro não foi efetuado.';
					}
				}catch(Exception $e) {
					$errMsg .= 'Ocorreu um erro.'.$e;
				}
			}*/
			
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
					
					/*$p_nome 			= $_POST['p_nome'];
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
					*/
					
					Crud::getInstance()->set('p_nome', $_POST['p_nome']);
					Crud::getInstance()->set('p_mae', $_POST['p_mae']);
					Crud::getInstance()->set('p_pai', $_POST['p_pai']);
					Crud::getInstance()->set('p_nasc', $_POST['p_nasc']);
					Crud::getInstance()->set('p_naturalidade', $_POST['p_naturalidade']);
					Crud::getInstance()->set('p_nacionalidade', $_POST['p_nacionalidade']);
					Crud::getInstance()->set('p_sexo', $_POST['p_sexo']);
					Crud::getInstance()->set('p_raca', $_POST['p_raca']);
					Crud::getInstance()->set('p_escolaridade', $_POST['p_escolaridade']);
					Crud::getInstance()->set('p_estado_civil', $_POST['p_estado_civil']);
					Crud::getInstance()->set('p_deficiencia', $_POST['p_deficiencia']);
					Crud::getInstance()->set('p_perfil', $_POST['p_perfil']);
					Crud::getInstance()->set('p_senha', md5($_POST['senha']));
					
					$dados1 = Array(
						Crud::getInstance()->get('p_nome'),
						Crud::getInstance()->get('p_mae'),
						Crud::getInstance()->get('p_pai'),
						Crud::getInstance()->get('p_nasc'),
						Crud::getInstance()->get('p_naturalidade'),
						Crud::getInstance()->get('p_nacionalidade'),
						Crud::getInstance()->get('p_sexo'),
						Crud::getInstance()->get('p_raca'),
						Crud::getInstance()->get('p_escolaridade'),
						Crud::getInstance()->get('p_estado_civil'),
						Crud::getInstance()->get('p_deficiencia'),
						Crud::getInstance()->get('p_perfil'),
						Crud::getInstance()->get('p_senha')					
					);
					
					$sql = sprintf ("
						INSERT INTO usuarios (nome, mae, pai, estado_civil, raca, deficiencia, data_nasc, sexo, escolaridade, perfil, data_cadastro, naturalidade, nacionalidade, senha)
						VALUES (:param0, :param1, :param2, :param3, :param4, :param5, :param6, :param7, :param8, :param9, now(), :param10, :param11, :param12)
					");
					Crud::getInstance()->insert($dbh, $sql, $dados1);
					$id = $dbh->lastInsertId();				
					
					
					$dados2 = Array(
						$id,
						Crud::getInstance()->get($_POST['p_cpf']),
						Crud::getInstance()->get($_POST['p_rg']),
						Crud::getInstance()->get($_POST['p_orgao']),
						Crud::getInstance()->get($_POST['p_emissao']),
						Crud::getInstance()->get($_POST['p_d_uf']),
						Crud::getInstance()->get($_POST['p_titulo']),
						Crud::getInstance()->get($_POST['p_zona']),
						Crud::getInstance()->get($_POST['p_sessao']),
						Crud::getInstance()->get($_POST['p_d_cidade']),
						Crud::getInstance()->get($_POST['p_reservista'])					
					);
					
					$dados3 = Array(
						$id,
						Crud::getInstance()->get($_POST['p_endereco']),
						Crud::getInstance()->get($_POST['p_numero']),
						Crud::getInstance()->get($_POST['p_complemento']),
						Crud::getInstance()->get($_POST['p_bairro']),
						Crud::getInstance()->get($_POST['p_cep']),
						Crud::getInstance()->get($_POST['p_cidade']),
						Crud::getInstance()->get($_POST['p_c_uf']),
						Crud::getInstance()->get($_POST['p_ref']),
						Crud::getInstance()->get($_POST['p_fone1']),
						Crud::getInstance()->get($_POST['p_fone2']),
						Crud::getInstance()->get($_POST['p_fone3']),
						Crud::getInstance()->get($_POST['p_email'])			
					);					
					
					
					$sql = sprintf ("
						INSERT INTO documentos (id_usuario, cpf, rg_numero, rg_orgao, rg_emissao, rg_uf, titulo_numero, titulo_zona, titulo_sessao, titulo_cidade, reservista)
						VALUES (:param0, :param1, :param2, :param3, :param4, :param5, :param6, :param7, :param8, :param9, :param10)
					");
					Crud::getInstance()->insert($dbh, $sql, $dados2);
					
					$sql = sprintf ("
						INSERT INTO contatos (id_usuario, endereco, numero, complemento, bairro, cep, cidade, estado, referencia, telefone1, telefone2, telefone3, email)
						VALUES (:param0, :param1, :param2, :param3, :param4, :param5, :param6, :param7, :param8, :param9, :param10, :param11, :param12)
					");
					Crud::getInstance()->insert($dbh, $sql, $dados3);
					
					/*$query = $dbh->prepare("
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
					}*/
				}catch(Exception $e) {
					$errMsg .= 'Ocorreu um erro.'.$e;
				}
			}
		}
	}
	$smarty->assign('errMsg', $errMsg);
	$smarty->assign('cor', $cor);
	$smarty->assign('id', $id);
	$smarty->assign('teste', $teste);
	
    $sql = sprintf("
		SELECT id_estado, uf
		FROM estados
		ORDER BY uf ASC
	");
    $smarty->assign('uf', Crud::getInstance()->select($dbh, $sql));
	
    $sql = sprintf("
		SELECT c.programa, i.nome
		FROM cursos c
		INNER JOIN instituicao i ON c.id_instituicao = i.id_instituicao
	");
    $smarty->assign('curso', Crud::getInstance()->select($dbh, $sql));
	
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