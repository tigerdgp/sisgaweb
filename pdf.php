<?php

	//Inclusões de arquivos
	include("plugins/mpdf/mpdf.php");	
	
	//Recuperação de parametros
	$pdf_aluno = '';
	$pdf_ = '';
	
	$smarty->assign('teste', 'Auxiliar Administrativo');

    $sql = sprintf("
    ");
    $smarty->assign('pdf', Crud::getInstance()->select($dbh, $sql));
	
	$mpdf = new mPDF('', 'A4', '', '', 17, 17, 17, 12.7, 0, 0, 'P'); 
	$content = $smarty->fetch('pdf.tpl');
	$mpdf->WriteHTML($content);
	$mpdf->Output();
	exit;
?>