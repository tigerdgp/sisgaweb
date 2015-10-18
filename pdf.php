<?php

		//Inclusões de arquivos
    require_once('includes/setup.php');
	require_once('includes/classes/conexao.class.php');
    require_once('includes/funcoes.php');
	include("plugins/mpdf/mpdf.php");
	
	//Inicia a instância do framework smarty
    $smarty = new Smarty_Setup();
	
	
	//Recuperação de parametros
	$pdf_aluno = '';
	$pdf_ = '';
	
	$smarty->assign('teste', 'Auxiliar Administrativo');		
	
	$mpdf = new mPDF('', 'A4', '', '', 17, 17, 17, 12.7, 0, 0, 'P'); 
	$content = $smarty->fetch('pdf.tpl');
	$mpdf->WriteHTML($content);
	$mpdf->Output();
	exit;
?>