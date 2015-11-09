<?php

	/*
	**************************************************************************
	*	Nome: 		login.php
	*	Descrição: 	Página de login do sistema
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		09/04/2015
	*	Versão: 	1.0
	*	Edição: 	-
	**************************************************************************
	*/
	if(!isset($_SESSION['id_usuario'])) {	
	
		if(isset($_POST['submit'])){
			$errMsg = '';
			
			
			if(empty($_POST['user'])) {
				$errMsg .= 'Informe seu usuario';
			}
			elseif(empty($_POST['pass'])) {
				$errMsg .= 'Informe sua senha';
			}
			else {
				try {
					//username and password sent from Form
					$user = trim($_POST['user']);
					$pass = trim($_POST['pass']);
					
					$query = $dbh->prepare("
						SELECT d.cpf, u.id_usuario, u.perfil, u.nome, u.foto 
						FROM usuarios u
						INNER JOIN documentos d ON u.id_usuario = d.id_usuario
						WHERE (d.cpf = :user) AND (u.senha = :pass)
						LIMIT 1
					");
					$query->bindParam(':user', $user);
					$query->bindParam(':pass', md5($pass));
					$query->execute();
					$results = $query->fetch(PDO::FETCH_ASSOC);
					if(count($results) > 0){
						$_SESSION['id_usuario'] = $results['id_usuario'];
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
						}
						
						//Cadastro do log d acesso
						$ip = getIp();
						$query = $dbh->prepare("
							INSERT INTO logs (id_usuario, data, ip)
							VALUES (:id, now(), :ip)
						");
						$query->bindParam(':id', $results['id_usuario']);
						$query->bindParam(':ip', $ip);
						$query->execute();
						
						header('location: ?painel');
						exit;
					}else{
						$errMsg .= 'Usuario ou senha nao encontrado.';
					}
				}
				catch(Exception $e) {
					$errMsg .= 'Ocorreu um erro.'.$e;
				}
			}
		}
		$smarty->assign('errMsg', $errMsg);
	}
	else {
		header('Location: ?painel'); exit;
	}

    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'login',
	    'title'  	=> 'Login',
	    'tab'    	=> 0,
	    'path'   	=> '[]',
		'nivel'		=> 0	//1-Aluno | 2-Instrutor | 3-Administrador | 4-Gerente
    );
	
	//Assina a variável global ao smarty
    $smarty->assign('page', $page);
	//Define o arquivo de exibição
    $smarty->display('login.tpl');
?>