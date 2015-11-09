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
		
		$codigo = $_POST['cod'];
		
		switch($codigo) {
			case '1': //Cadastro de instituições
		
				//Verificação dos campos obrigatorios que devem ser preenchidos
				if(empty($_POST['i_nome'])) {
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
						$dados1 = array(
							$_POST['i_nome'], $_POST['i_representante']				
						);
						$sql = sprintf("
							INSERT INTO instituicao (nome, representante, data_cad)
							VALUES (:param0, :param1, now())
						");
						$r1 = Crud::getInstance()->insert($dbh, $sql, $dados1);
						$id = $dbh->lastInsertId();						
						
						//Programas
						$cb = $_POST['cb'];						
						for ($i = 0; $i < sizeof($cb); $i++){
							$nome = "form_".$id."_".$cb[$i];
							$dados = array($nome, $cb[$i], $id);
							$sql = sprintf("
								INSERT INTO formularios (nome, programa, instituicao)
								VALUES (:param0, :param1, :param2)
							");
							Crud::getInstance()->insert($dbh, $sql, $dados);
						}
						
						//Contato
						$dados2 = array(
							$id, $_POST['i_endereco'], $_POST['i_numero'], $_POST['i_complemento'], $_POST['i_bairro'], $_POST['i_cep'], $_POST['i_cidade'], 
							$_POST['i_uf'], $_POST['i_ref'], $_POST['i_fone1'], $_POST['i_fone2'], $_POST['i_fone3'], $_POST['i_email']
						);
						$sql = sprintf("
							INSERT INTO contatos (id_instituicao, endereco, numero, complemento, bairro, cep, cidade, estado, referencia, telefone1, telefone2, telefone3, email)
							VALUES (:param0, :param1, :param2, :param3, :param4, :param5, :param6, :param7, :param8, :param9, :param10, :param11, :param12)
						");
						$r2 = Crud::getInstance()->insert($dbh, $sql, $dados2);
						
						//Mensagem
						if(count($r1) == 1 && count($r2) == 1){
							$errMsg .= 'Cadastro efetuado com sucesso!';
							$cor = "GREEN";
						}else{
							$errMsg .= 'O cadastro não foi efetuado.';
						}
					}catch(Exception $e) {
						$errMsg .= 'Ocorreu um erro.'.$e;
					}
				}
				
				break;
			
			case '2': //Cadastro de cursos
			
				//Verificação dos campos obrigatorios que devem ser preenchidos
				if(empty($_POST['c_nome'])) {
					$errMsg .= 'Campo "Nome" obrigatório.';
				}elseif(empty($_POST['c_cargah'])) {
					$errMsg .= 'Campo "Carga Horária" obrigatório.';
				}elseif(empty($_POST['c_vagas'])) {
					$errMsg .= 'Campo "Quantidade Vagas" obrigatório.';
				}elseif(empty($_POST['c_d_inicio'])) {
					$errMsg .= 'Campo "Data Início" obrigatório.';
				}elseif(empty($_POST['c_d_termino'])) {
					$errMsg .= 'Campo "Data Término" obrigatório.';
				}elseif(empty($_POST['c_t_inicio'])) {
					$errMsg .= 'Campo "Hora Início" obrigatório.';
				}elseif(empty($_POST['c_t_termino'])) {
					$errMsg .= 'Campo "Hora Término" obrigatório.';
				}elseif(empty($_POST['c_idade'])) {
					$errMsg .= 'Campo "Faixa Etária" obrigatórios.';
				}elseif(empty($_POST['c_local'])) {
					$errMsg .= 'Campo "Local" obrigatórios.';
				}elseif(empty($_POST['c_desc'])) {
					$errMsg .= 'Campo "Descrição" obrigatórios.';
				}else {
					try {
						//Pega as variáveis pelo metodo POST
						//Dados Gerais
						$dados1 = array(
							$_POST['c_nome'], $_POST['c_prog'], $_POST['c_cargah'], $_POST['c_d_inicio'], $_POST['c_d_termino'], $_POST['c_t_inicio'], 
							$_POST['c_t_termino'], $_POST['c_esc'], $_POST['c_idade'], $_POST['c_local'], $_POST['c_desc'], $_POST['c_vagas'], $_POST['c_instituicao']
						);
						$sql = sprintf("
							INSERT INTO cursos (nome, programa, carga_horaria, data_inicio, data_termino, hora_inicio, hora_termino, escolaridade, idade, local, descricao, vagas)
							VALUES (:param0, :param1, :param2, :param3, :param4, :param5, :param6, :param7, :param8, :param9, :param10, :param11, :param12)
						");
						$r1 = Crud::getInstance()->insert($dbh, $sql, $dados1);
						
						//Mensagem
						if(count($r1) == 1){
							$errMsg .= 'Cadastro efetuado com sucesso!';
							$cor = "GREEN";
						}else{
							$errMsg .= 'O cadastro não foi efetuado.';
						}
					}catch(Exception $e) {
						$errMsg .= 'Ocorreu um erro.'.$e;
					}
				}
			
				break;
			
			case '3': //Cadastro de pessoas	
				
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
						$dados1 = array(
							$_POST['p_nome'], $_POST['p_mae'], $_POST['p_pai'], $_POST['p_estado_civil'], $_POST['p_raca'], $_POST['p_deficiencia'], 
							$_POST['p_nasc'], $_POST['p_sexo'], $_POST['p_escolaridade'], $_POST['p_perfil'], $_POST['p_naturalidade'], $_POST['p_n_uf'],
							$_POST['p_nacionalidade'], md5($_POST['p_senha'])					
						);						
						$sql = sprintf("
							INSERT INTO usuarios (nome, mae, pai, estado_civil, raca, deficiencia, data_nasc, sexo, escolaridade, perfil, data_cadastro, naturalidade, n_uf, nacionalidade, senha)
							VALUES (:param0, :param1, :param2, :param3, :param4, :param5, :param6, :param7, :param8, :param9, now(), :param10, :param11, :param12, :param13)
						");
						$r1 = Crud::getInstance()->insert($dbh, $sql, $dados1);
						$id = $dbh->lastInsertId();				
						
						//Dados Documentos
						$dados2 = Array(
							$id, $_POST['p_cpf'], $_POST['p_rg'], $_POST['p_orgao'], $_POST['p_emissao'], $_POST['p_d_uf'], $_POST['p_titulo'], 
							$_POST['p_zona'], $_POST['p_sessao'], $_POST['p_d_cidade'], $_POST['p_dt_uf'], $_POST['p_reservista']					
						);
						$sql = sprintf("
							INSERT INTO documentos (id_usuario, cpf, rg_numero, rg_orgao, rg_emissao, rg_uf, titulo_numero, titulo_zona, titulo_sessao, titulo_cidade, titulo_uf, reservista)
							VALUES (:param0, :param1, :param2, :param3, :param4, :param5, :param6, :param7, :param8, :param9, :param10, :param11)
						");
						$r2 = Crud::getInstance()->insert($dbh, $sql, $dados2);
						
						//Dados Contato
						$dados3 = Array(
							$id, $_POST['p_endereco'], $_POST['p_numero'], $_POST['p_complemento'], $_POST['p_bairro'], $_POST['p_cep'], $_POST['p_cidade'], 
							$_POST['p_c_uf'], $_POST['p_ref'], $_POST['p_fone1'], $_POST['p_fone2'], $_POST['p_fone3'], $_POST['p_email']
						);
						$sql = sprintf("
							INSERT INTO contatos (id_usuario, endereco, numero, complemento, bairro, cep, cidade, estado, referencia, telefone1, telefone2, telefone3, email)
							VALUES (:param0, :param1, :param2, :param3, :param4, :param5, :param6, :param7, :param8, :param9, :param10, :param11, :param12)
						");
						$r3 = Crud::getInstance()->insert($dbh, $sql, $dados3);
						
						//Dados Info Extra
						$dados4 = Array(
							$id
						);				
						$sql = sprintf("
							INSERT INTO info_extra (id_usuario)
							VALUES (:param0)
						");
						$r4 = Crud::getInstance()->insert($dbh, $sql, $dados4);
						
						//Mensagem
						if(count($r1) == 1 && count($r2) == 1 && count($r3) == 1 && count($r4) == 1){
							$errMsg .= 'Cadastro efetuado com sucesso!';
							$cor = "GREEN";
						}else{
							$errMsg .= 'O cadastro não foi efetuado.';
						}
					}catch(Exception $e) {
						$errMsg .= 'Ocorreu um erro.'.$e;
					}
				}
			
				break;
			
		}
	}
	$smarty->assign('errMsg', $errMsg);
	$smarty->assign('cor', $cor);
	$smarty->assign('id', $id);
	
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
	
	//Exibir os programas no formulario
    $sql = sprintf("
		SELECT id_instituicao, nome
		FROM instituicao
	");
    $smarty->assign('inst', Crud::getInstance()->select($dbh, $sql));
	
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'cadastro',
		'title' 	=> '',
	    'tab'    	=> 0,
	    'path'   	=> '[]',
		'nivel'		=> 3	//1-Aluno | 2-Instrutor | 3-Administrador | 4-Gerente
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