<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-16 16:29:41
         compiled from "templates\pdf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146505620ea19134966-48724035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a9bb4ca9ec706150e8e4708c63f7d62141802b8' => 
    array (
      0 => 'templates\\pdf.tpl',
      1 => 1445023777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146505620ea19134966-48724035',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5620ea19246593_59457436',
  'variables' => 
  array (
    'teste' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5620ea19246593_59457436')) {function content_5620ea19246593_59457436($_smarty_tpl) {?><style>
	body div, p, h1, h2 {
		border: none;
	}
	div.content {
		font-size: 13.5px;
		width: 100%;
		font-family: Arial, Helvetica, sans-serif;
		font-weight: bold;
	}
	div.content h6 {
		font-family:"Courier New", Courier, monospace;
		text-transform: uppercase;
		font-size: 12px;
		height: 18px;
		border-bottom: 1px solid #000; 
		margin: 0;
		float: left;
	}
	div.content p {
		margin: 3px 0 3px 0;
		padding-bottom: 0;
		padding-top: 0;
	}
	div.content span {
		font-family:"Courier New", Courier, monospace;
		text-transform: uppercase;
		font-size: 12px;
	}
	div.content div.pdf_logo1 {
		text-align: center;
	}
	div.content div.pdf_logo2 {
		text-align: center;
		width: 1.4cm;
		margin-left: -10px;
		margin-top: 10px;
		float: left;
	}
	div.content div.pdf_line0 {
		margin-top: 25px;
	}
		.content div.pdf_line0 h1 {
			font-size: 20px;
			text-align: center;
		}
	div.content div.pdf_line1 {
		margin-top: -10px;
		margin-bottom: 0;
	}
		.content div.pdf_line1 h2 {
			text-align: center;
			font-size: 15px;
		}
	div.content div.pdf_line2 {
		margin-bottom: 20px;
	}
	div.content div.pdf_line3 {
		margin-bottom: 10px 	;
	}
	
	div.content div.pdf_bloco {
		margin-top: 30px;
		margin-bottom: 30px;
	}
	div.content div.clear {
		clear: both;
	}
	div.content div.pdf_footer1 {
		font-size: 12px;
		float: left;
		margin: 20px 30px 0 15px;
		border-bottom: 3px solid #FC3;
	}
		div.content div.pdf_footer1 p {
			padding-left: 5px;
		}
	div.content div.pdf_footer2 {
		font-size: 10px;
		padding-left: 20px;
		float: left;
		margin: -25px 0 0 195px;
	}
		div.content div.pdf_footer2 p {
			margin: 1 0 1 0;
			text-align: left;
		}
</style>
<div class="content">   
    <div class="pdf_logo1">
        <img src="templates/img/logo_senac.png" width="2cm" />
    </div>
    <div class="pdf_line0">
        <h1>FICHA DE CADASTRO</h1>
    </div>
    <div class="pdf_line1">
        <h2>IMPORTANTE: É imprescindível o preenchimento de todos os campos abaixo.</h2>
    </div>                        
    <div class="pdf_line2">
        <p style="float: left; width: 120px;">Curso Escolhido: </p>
        <h6 style="width: 545px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['teste']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
    </div>
    <div class="pdf_line3">
        <p>Horário: (<span>X</span>)Manhã <b>  </b> (<span> </span>)Tarde <b>  </b> (<span> </span>)Noite</p>
    </div>
    <div class="pdf_bloco"> 
        <p style="float: left; width: 35px;">CPF: </p>
        <h6 style="width: 300px;">09478753606</h6>
        <p style="float: left; width: 50px; clear: both;">Nome: </p>
        <h6 style="width: 615px;">Dérik Gomide Padua</h6>
        <p style="float: left; width: 40px;">Mãe: </p>
        <h6 style="width: 625px;">Alcione Alves Gomide de Padua</h6>
        <p style="float: left; width: 180px;">Sexo: (<span>X</span>)Masc <b>  </b> (<span> </span>)Fem</p>
        <p style="float: left; width: 230px; margin-top: -0px;">Data Nascimento: <span style="border-bottom: 1px solid #000;">21/09/1989</span></p> 
        <p style="float: right; width: 240px; margin-top: -0px;">Estado Civil: (<span>X</span>)Solteiro <b>  </b> (<span> </span>)Casado</p>
        <p style="float: left; width: 100px; margin-top: 1px;">Naturalidade: </p>
        <h6 style="width: 455px; margin-top: -1px;">Sacramento</h6>
        <p style="float: left; width: 55px; margin-top: 1px; padding-left: 5px;">Estado: </p>
        <h6 style="width: 50px; text-align: center; margin-top: -1px;">MG</h6>        
        <p style="margin-top: 4px; margin-bottom: 4px;">Cor / Raça: (<span> </span>)Amarela <b>  </b> (<span>X</span>)Branca <b>  </b> (<span> </span>)Indígena <b>  </b> (<span> </span>)Negra <b>  </b> (<span> </span>)Parda</p>
        <p style="margin-top: 4px; margin-bottom: 4px;">Possui Deficiência: (<span> </span>)Auditiva <b>  </b> (<span> </span>)Física/Motora <b>  </b> (<span> </span>)Mental <b>  </b> (<span> </span>)Múltiplas <b>  </b> (<span> </span>)Visual <b>  </b> (<span>X</span>)Nenhuma</p>
        <p style="margin-top: 4px; margin-bottom: 4px;">Cursou ou cursa Programa de Aprendizagem Comercial ou outro programa gratuito oferecido pelo Senac? (<span>X</span>)Sim <b>  </b> (<span> </span>)Não</p>
        <p style="margin-top: 4px;">Faz ou já fez curso no Senac Minas? (<span>X</span>)Sim <b>  </b> (<span> </span>)Não</p>
    </div>
    <div class="pdf_bloco">
    	<p style="float: left; width: 75px;">Endereço: </p>
        <h6 style="width: 485px;">Rua Vereador Jose Torquato</h6>
        <p style="float: left; width: 30px; padding-left: 5px; margin-top: -0px;">Nº: </p>
        <h6 style="width: 70px; text-align: center;">53</h6>
        <p style="float: left; width: 105px;">Complemento: </p>
        <h6 style="width: 100px;">   </h6>
        <p style="float: left; width: 50px; padding-left: 5px; margin-top: -0px;">Bairro: </p>
        <h6 style="width: 300px;">Euripedes Barsanulfo</h6>
        <p style="float: left; width: 35px; padding-left: 5px; margin-top: -0px;">CEP: </p>
        <h6 style="width: 65px;">38190000</h6>
        <p style="float: left; width: 55px;">Cidade: </p>
        <h6 style="width: 250px;">Sacramento</h6>
        <p style="float: left; width: 145px; padding-left: 5px; margin-top: -0px;">Ponto de referência: </p>
        <h6 style="width: 210px;">    </h6>
        <p style="float: left; width: 120px;">Fone residencial: </p>
        <h6 style="width: 210px;">34 3351-2472</h6>
        <p style="float: left; width: 110px; padding-left: 5px; margin-top: -0px;">Fone comercial: </p>
        <h6 style="width: 220px;">34 3351-4695</h6>
        <p style="float: left; width: 55px;">Celular: </p>
        <h6 style="width: 275px;">34 9164-1120</h6>
        <p style="float: left; width: 55px; padding-left: 5px; margin-top: -0px;">Outros: </p>
        <h6 style="width: 275px;">    </h6>
        <p style="float: left; width: 50px;">E-mail: </p>
        <h6 style="width: 615px;">tiger.dgp@hotmail.com</h6>
        <p style="float: left; width: 210px;">Documento de Identidade: Nº </p>
        <h6 style="width: 300px;">16172746</h6>
        <p style="float: left; width: 110px; padding-left: 5px; margin-top: -0px;">Órgão emissor: </p>
        <h6 style="width: 40px; text-align: center;">PC</h6>
        <p style="float: left; width: 120px;">Data de Emissão: </p>
        <h6 style="width: 285px; border: none;"><span style="border-bottom: 1px solid #000;">01/01/2010</span></h6>
        <p style="float: left; width: 120px; padding-left: 5px; margin-top: -0px;">UF de Expedição: </p>
        <h6 style="width: 40px; text-align: center;">MG</h6>
        <p style="float: left; width: 140px;">Título de Eleitor: Nº </p>
        <h6 style="width: 240px;">123456789123</h6>
        <p style="float: left; width: 95px; padding-left: 5px; margin-top: -0px;">Zona / Seção: </p>
        <h6 style="width: 185px;">    </h6>
        <p style="float: left; width: 225px;">UF e Cidade do Título de Eleitor: </p>
        <h6 style="width: 440px;">Sacramento - MG</h6>
        <p style="float: left; width: 160px;">Data da última eleição: </p>
        <h6 style="width: 150px; border: none;"><span style="border-bottom: 1px solid #000;">18/08/2000</span></h6>
        <p style="float: left; width: 180px; padding-left: 5px; margin-top: -0px;">Certificado de Reservista: </p>
        <h6 style="width: 170px;">12645823123356</h6>
        <p style="float: left; width: 95px;">Escolaridade: </p>
        <h6 style="width: 375px;">Ensino Superior</h6>
        <p style="width: 190px; float: left; padding-left: 5px; margin-top: -0px;">(<span> </span>)Completo <b>  </b> (<span>X</span>)Incompleto</p>        
        <p style="float: left; width: 410px;">Você estudou mais tempo em escola Pública ou Particular? </p>
        <h6 style="width: 255px;">Pública</h6>        
    </div>
    <div class="pdf_logo2">
        <img src="templates/img/iso_senac.jpg" width="1.4cm" />
    </div>
    <div class="pdf_footer1">
    	<p>Serviço Nacional de Aprendizagem Comercial</p>
    </div>
    <div class="pdf_footer2">
    	<p>Superintendência Comercial Senac Minas - Regional Triângulo</p>
        <p>SENAC Uberaba</p>
        <p style="font-weight: normal;">Tel.: (34) 3334-3400</p>
        <p style="font-weight: normal;">www.mg.senac.br</p>
    </div>
</div><?php }} ?>
