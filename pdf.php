<?php

	//Inclusões de arquivos
	include("plugins/mpdf/mpdf.php");	
	
	//Recuperação de parametros
	$pdf_turma 		= $_GET['t'];
	$pdf_aluno 		= $_GET['u'];
	$pdf_prog 		= $_GET['p'];
	$pdf_curso 		= $_GET['c'];
	$smarty->assign('prog', $pdf_prog);
	
	$sql = sprintf("
		SELECT c.*, t.*
		FROM cursos c
		INNER JOIN turmas t ON c.id_curso = t.id_curso
		WHERE c.id_curso = '".$pdf_curso."'
		LIMIT 1
    ");
    $smarty->assign('curso', Crud::getInstance()->select($dbh, $sql));

    $sql = sprintf("
		SELECT u.*, c.*, d.*, (SELECT nome FROM cidades WHERE id_cidade = u.naturalidade) AS u_cidade, (SELECT uf FROM estados WHERE id_estado = u.n_uf) AS u_uf, (SELECT nome FROM cidades WHERE id_cidade = c.cidade) AS c_cidade, (SELECT uf FROM estados WHERE id_estado = c.estado) AS c_uf, (SELECT nome FROM cidades WHERE id_cidade = d.titulo_cidade) AS d_cidade, (SELECT uf FROM estados WHERE id_estado = d.titulo_uf) AS titulo_uf, (SELECT uf FROM estados WHERE id_estado = d.rg_uf) AS rg_uf, (SELECT cursou_senac FROM info_extra WHERE id_usuario = u.id_usuario) AS cursou_senac, (SELECT tipo_escola FROM info_extra WHERE id_usuario = u.id_usuario) AS escola
		FROM usuarios u
		INNER JOIN contatos c ON u.id_usuario = c.id_usuario
		INNER JOIN documentos d ON u.id_usuario = d.id_usuario
		WHERE u.id_usuario = '".$pdf_aluno."'
		LIMIT 1
    ");
    $smarty->assign('pdf', Crud::getInstance()->select($dbh, $sql));
	
	$sql = sprintf("
		SELECT *
		FROM info_extra
		WHERE id_usuario = '".$pdf_aluno."'
		LIMIT 1
    ");
    $smarty->assign('extra', Crud::getInstance()->select($dbh, $sql));
	
	//Gerando arquivo PDF
	$nome 		= "matricula-". $pdf_turma ."-". $pdf_curso ."-". $pdf_aluno ."-". date("dmY") ."-". random() . ".pdf";
	$dir 		= "pdf/". $nome;
	
	$mpdf 		= new mPDF('', 'A4', '', '', 17, 17, 17, 12.7, 0, 0, 'P'); 
	$content 	= $smarty->fetch('pdf.tpl');
	$mpdf->WriteHTML($content);
	$mpdf->Output($dir, 'I');
	$mpdf->Output($dir, 'F');
	$sql = sprintf("
		UPDATE turmas 
		SET matricula = '". $nome ."'
		WHERE id_turma = :param0 AND id_aluno = :param1
	");
	Crud::getInstance()->update($dbh, $sql, array($pdf_turma, $pdf_aluno));
	exit;
?>