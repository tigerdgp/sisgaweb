<?php

	/*
	**************************************************************************
	*	Nome: 		cursos.php
	*	Descrição: 	Página de listagem dos cursos
	*	Autor: 		Dérik Gomide Padua
	*	Data: 		29/04/2015
	*	Versão: 	1.1
	*	Edição: 	19/09/2015
	**************************************************************************
	*/  
    
    if(isset($_POST['submit'])){
		$errMsg             = "";
		$cor	            = "RED";
		
		try {
			//Pega as variáveis
            $curso          = $_POST['curso'];
			$aluno 			= $_POST['aluno'];            					
					
			$query          = $dbh->prepare("
				INSERT INTO turmas (id_curso, id_aluno, id_form)
				VALUES (:curso, :aluno, '2')
			");
			$query->bindParam(':curso', $curso);
			$query->bindParam(':aluno', $aluno);
			$query->execute();
			$id             = $dbh->lastInsertId();
			$r1             = $query->fetch(PDO::FETCH_ASSOC);
					
			if(count($r1) == 1){
				$errMsg     .= 'Pré-Inscrição efetuada com sucesso!';
				$cor        = "GREEN";
			}else{
				$errMsg     .= 'A Pré-Inscrição não foi efetuada.';
			}
		}catch(Exception $e) {
			$errMsg         .= 'Ocorreu um erro.'.$e;
		}
	}
	$smarty->assign('errMsg', $errMsg);
	$smarty->assign('cor', $cor);  
	
	/* ********** ********** ********** **********
    ******* Listagem de Cursos Disponíveis *******
    ********** ********** ********** ********** */
    $aluno = $_SESSION['id_usuario'];
    $query = $dbh->prepare("
		SELECT count(t.id_turma) AS turma, t.ativo
		FROM turmas t
        WHERE t.id_aluno = '".$aluno."'
	");
    $query->execute();
    $r = $query->fetch(PDO::FETCH_ASSOC);
    if($r['turma'] >= 1){
		$c = "1";      
	}else{
		$c = "0";
	}
    $smarty->assign('c', $c);  
    
    $query = $dbh->prepare("
		SELECT c.nome
		FROM turmas t
        INNER JOIN cursos c ON t.id_curso = c.id_curso
        WHERE t.id_aluno = '".$aluno."'
	");
    $query->execute();
    $r = $query->fetch(PDO::FETCH_ASSOC);
    $nome = $r['nome'];
    $smarty->assign('nome', $nome); 

    $cursos = array();  
    $q = sprintf("
		    SELECT c.id_curso AS id, c.nome AS curso, c.carga_horaria, c.data_inicio, c.data_termino, c.hora_inicio, c.hora_termino, c.inscricao, c.vagas, (
            SELECT count(t.id_turma) AS alunos
		        FROM turmas t
                WHERE t.id_curso = c.id_curso
            ) AS vaga
		    FROM cursos c
            WHERE c.inscricao = 1
		    ORDER BY c.data_inicio ASC 
	    ");
    $con = $dbh->query($q);
    while($row = $con->fetch(PDO::FETCH_ASSOC)){
        $cursos[] = $row;
    }
    $smarty->assign('cursos', $cursos);
    
	//Variável global com informações da página
    global $page;
    $page = array(
	    'arquivo' 	=> 'cursos',
	    'title'  	=> 'Cursos',
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
    $smarty->display('cursos.tpl');
?>