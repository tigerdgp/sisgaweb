<?php

	//Inclusões de arquivos
	include("plugins/mpdf/mpdf.php");	
	
	//Recuperação de parametros
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
		SELECT u.*, c.*, d.*
		FROM usuarios u
		INNER JOIN contatos c ON u.id_usuario = c.id_usuario
		INNER JOIN documentos d ON u.id_usuario = d.id_usuario
		WHERE u.id_usuario = '".$pdf_aluno."'
		LIMIT 1
    ");
    $smarty->assign('pdf', Crud::getInstance()->select($dbh, $sql));
	
	$mpdf = new mPDF('', 'A4', '', '', 17, 17, 17, 12.7, 0, 0, 'P'); 
	$content = $smarty->fetch('pdf.tpl');
	$mpdf->WriteHTML($content);
	$mpdf->Output();
	exit;
?>