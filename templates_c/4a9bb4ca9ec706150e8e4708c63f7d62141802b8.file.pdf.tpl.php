<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-19 14:07:17
         compiled from "templates\pdf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146505620ea19134966-48724035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a9bb4ca9ec706150e8e4708c63f7d62141802b8' => 
    array (
      0 => 'templates\\pdf.tpl',
      1 => 1445270833,
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
    'prog' => 0,
    'curso' => 0,
    'pdf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5620ea19246593_59457436')) {function content_5620ea19246593_59457436($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'includes/smarty-3.1.21/libs/plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_phone_format')) include 'includes/smarty-3.1.21/libs/plugins\\modifier.phone_format.php';
?><style>
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
	<?php if ($_smarty_tpl->tpl_vars['prog']->value==1) {?>
        <div id="senac_pronatec">
        	
                <div class="pdf_logo1">
                    <img src="templates/img/logo_senac.png" width="2cm" />
                </div>
                <div class="pdf_line0">
                    <h1>FICHA DE CADASTRO</h1>
                </div>
                <div class="pdf_line1">
                    <h2>IMPORTANTE: É imprescindível o preenchimento de todos os campos abaixo.</h2>
                </div>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['curso']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total']);
?>                       
                <div class="pdf_line2">
                    <p style="float: left; width: 120px;">Curso Escolhido: </p>
                    <h6 style="width: 545px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['nome'], ENT_QUOTES, 'UTF-8');?>
</h6>
                </div>
                <div class="pdf_line3">
                    <p>Horário: 
                    <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['hora_inicio'],"%H")<12) {?>(<span>X</span>)Manhã <b>  </b> (<span> </span>)Tarde <b>  </b> (<span> </span>)Noite</p>
                    <?php } elseif ((smarty_modifier_date_format($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['hora_inicio'],"%H")>=12)&&(smarty_modifier_date_format($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['hora_inicio'],"%H")<19)) {?>(<span> </span>)Manhã <b>  </b> (<span>X</span>)Tarde <b>  </b> (<span> </span>)Noite</p>
                    <?php } else { ?>(<span> </span>)Manhã <b>  </b> (<span> </span>)Tarde <b>  </b> (<span>X</span>)Noite</p>
                    <?php }?>
                </div>
            <?php endfor; endif; ?>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pdf']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total']);
?>
                <div class="pdf_bloco"> 
                    <p style="float: left; width: 35px;">CPF: </p>
                    <h6 style="width: 300px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['cpf'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 50px; clear: both;">Nome: </p>
                    <h6 style="width: 615px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['nome'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 40px;">Mãe: </p>
                    <h6 style="width: 625px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['mae'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 180px;">Sexo: 
                    <?php if ($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['sexo']==1) {?>(<span> </span>)Masc <b>  </b> (<span>X</span>)Fem</p>
                    <?php } else { ?> (<span>X</span>)Masc <b>  </b> (<span> </span>)Fem</p>
                    <?php }?>
                    <p style="float: left; width: 230px; margin-top: -0px;">Data Nascimento: <span style="border-bottom: 1px solid #000;"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['data_nasc'],"%d/%m/%Y"), ENT_QUOTES, 'UTF-8');?>
</span></p> 
                    <p style="float: right; width: 240px; margin-top: -0px;">Estado Civil:
                    <?php if ($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['estado_civil']==2) {?> (<span> </span>)Solteiro <b>  </b> (<span>X</span>)Casado</p>
                    <?php } else { ?> (<span>X</span>)Solteiro <b>  </b> (<span> </span>)Casado</p>
                    <?php }?>
                    <p style="float: left; width: 100px; margin-top: 1px;">Naturalidade: </p>
                    <h6 style="width: 455px; margin-top: -1px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['naturalidade'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 55px; margin-top: 1px; padding-left: 5px;">Estado: </p>
                    <h6 style="width: 50px; text-align: center; margin-top: -1px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['estado'], ENT_QUOTES, 'UTF-8');?>
</h6>        
                    <p style="margin-top: 4px; margin-bottom: 4px;">Cor / Raça: 
                    <?php if ($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['raca']==1) {?>(<span>X</span>)Amarela <b>  </b> (<span> </span>)Branca <b>  </b> (<span> </span>)Indígena <b>  </b> (<span> </span>)Negra <b>  </b> (<span> </span>)Parda</p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['raca']==2) {?>(<span> </span>)Amarela <b>  </b> (<span>X</span>)Branca <b>  </b> (<span> </span>)Indígena <b>  </b> (<span> </span>)Negra <b>  </b> (<span> </span>)Parda</p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['raca']==3) {?>(<span> </span>)Amarela <b>  </b> (<span> </span>)Branca <b>  </b> (<span>X</span>)Indígena <b>  </b> (<span> </span>)Negra <b>  </b> (<span> </span>)Parda</p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['raca']==4) {?>(<span> </span>)Amarela <b>  </b> (<span> </span>)Branca <b>  </b> (<span> </span>)Indígena <b>  </b> (<span>X</span>)Negra <b>  </b> (<span> </span>)Parda</p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['raca']==5) {?>(<span> </span>)Amarela <b>  </b> (<span> </span>)Branca <b>  </b> (<span> </span>)Indígena <b>  </b> (<span> </span>)Negra <b>  </b> (<span>X</span>)Parda</p>
                    <?php }?>
                    <p style="margin-top: 4px; margin-bottom: 4px;">Possui Deficiência: 
                    <?php if ($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['deficiencia']==1) {?>(<span>X</span>)Auditiva <b>  </b> (<span> </span>)Física/Motora <b>  </b> (<span> </span>)Mental <b>  </b> (<span> </span>)Múltiplas <b>  </b> (<span> </span>)Visual <b>  </b> (<span> </span>)Nenhuma</p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['deficiencia']==2) {?>(<span> </span>)Auditiva <b>  </b> (<span>X</span>)Física/Motora <b>  </b> (<span> </span>)Mental <b>  </b> (<span> </span>)Múltiplas <b>  </b> (<span> </span>)Visual <b>  </b> (<span> </span>)Nenhuma</p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['deficiencia']==3) {?>(<span> </span>)Auditiva <b>  </b> (<span> </span>)Física/Motora <b>  </b> (<span>X</span>)Mental <b>  </b> (<span> </span>)Múltiplas <b>  </b> (<span> </span>)Visual <b>  </b> (<span> </span>)Nenhuma</p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['deficiencia']==4) {?>(<span> </span>)Auditiva <b>  </b> (<span> </span>)Física/Motora <b>  </b> (<span> </span>)Mental <b>  </b> (<span>X</span>)Múltiplas <b>  </b> (<span> </span>)Visual <b>  </b> (<span> </span>)Nenhuma</p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['deficiencia']==5) {?>(<span> </span>)Auditiva <b>  </b> (<span> </span>)Física/Motora <b>  </b> (<span> </span>)Mental <b>  </b> (<span> </span>)Múltiplas <b>  </b> (<span>X</span>)Visual <b>  </b> (<span> </span>)Nenhuma</p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['deficiencia']==6) {?>(<span> </span>)Auditiva <b>  </b> (<span> </span>)Física/Motora <b>  </b> (<span> </span>)Mental <b>  </b> (<span> </span>)Múltiplas <b>  </b> (<span> </span>)Visual <b>  </b> (<span>X</span>)Nenhuma</p>
                    <?php }?>
                    <p style="margin-top: 4px; margin-bottom: 4px;">Cursou ou cursa Programa de Aprendizagem Comercial ou outro programa gratuito oferecido pelo Senac? (<span>X</span>)Sim <b>  </b> (<span> </span>)Não</p>
                    <p style="margin-top: 4px;">Faz ou já fez curso no Senac Minas? (<span>X</span>)Sim <b>  </b> (<span> </span>)Não</p>
                </div>
                <div class="pdf_bloco">
                    <p style="float: left; width: 75px;">Endereço: </p>
                    <h6 style="width: 485px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['endereco'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 30px; padding-left: 5px; margin-top: -0px;">Nº: </p>
                    <h6 style="width: 70px; text-align: center;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['numero'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 105px;">Complemento: </p>
                    <h6 style="width: 100px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['complemento'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 50px; padding-left: 5px; margin-top: -0px;">Bairro: </p>
                    <h6 style="width: 300px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['bairro'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 35px; padding-left: 5px; margin-top: -0px;">CEP: </p>
                    <h6 style="width: 65px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['cep'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 55px;">Cidade: </p>
                    <h6 style="width: 250px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['cidade'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 145px; padding-left: 5px; margin-top: -0px;">Ponto de referência: </p>
                    <h6 style="width: 210px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['referencia'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 120px;">Fone residencial: </p>
                    <h6 style="width: 210px;"><?php echo htmlspecialchars(smarty_modifier_phone_format($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['telefone1']), ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 110px; padding-left: 5px; margin-top: -0px;">Fone comercial: </p>
                    <h6 style="width: 220px;"> </h6>
                    <p style="float: left; width: 55px;">Celular: </p>
                    <h6 style="width: 275px;"><?php echo htmlspecialchars(smarty_modifier_phone_format($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['telefone2']), ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 55px; padding-left: 5px; margin-top: -0px;">Outros: </p>
                    <h6 style="width: 275px;"><?php echo htmlspecialchars(smarty_modifier_phone_format($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['telefone3']), ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 50px;">E-mail: </p>
                    <h6 style="width: 615px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['email'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 210px;">Documento de Identidade: Nº </p>
                    <h6 style="width: 300px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['rg_numero'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 110px; padding-left: 5px; margin-top: -0px;">Órgão emissor: </p>
                    <h6 style="width: 40px; text-align: center;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['rg_orgao'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 120px;">Data de Emissão: </p>
                    <h6 style="width: 285px; border: none;"><span style="border-bottom: 1px solid #000;"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['rg_emissao'],"%d/%m/%Y"), ENT_QUOTES, 'UTF-8');?>
</span></h6>
                    <p style="float: left; width: 120px; padding-left: 5px; margin-top: -0px;">UF de Expedição: </p>
                    <h6 style="width: 40px; text-align: center;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['rg_uf'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 140px;">Título de Eleitor: Nº </p>
                    <h6 style="width: 240px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['titulo_numero'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 95px; padding-left: 5px; margin-top: -0px;">Zona / Seção: </p>
                    <h6 style="width: 185px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['titulo_zona'], ENT_QUOTES, 'UTF-8');?>
 / <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['titulo_sessao'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 225px;">UF e Cidade do Título de Eleitor: </p>
                    <h6 style="width: 440px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['titulo_cidade'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 160px;">Data da última eleição: </p>
                    <h6 style="width: 150px; border: none;"><span style="border-bottom: 1px solid #000;"> </span></h6>
                    <p style="float: left; width: 180px; padding-left: 5px; margin-top: -0px;">Certificado de Reservista: </p>
                    <h6 style="width: 170px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['reservista'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="float: left; width: 95px;">Escolaridade: </p>
                    <h6 style="width: 375px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pdf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['escolaridade'], ENT_QUOTES, 'UTF-8');?>
</h6>
                    <p style="width: 190px; float: left; padding-left: 5px; margin-top: -0px;">(<span> </span>)Completo <b>  </b> (<span>X</span>)Incompleto</p>        
                    <p style="float: left; width: 410px;">Você estudou mais tempo em escola Pública ou Particular? </p>
                    <h6 style="width: 255px;"></h6>        
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
            <?php endfor; endif; ?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['prog']->value==2) {?>
        <div id="senac_psg">
        senac - psg
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['prog']->value==3) {?>
        <div id="senai_pronatec">
        senai - pronatec
        </div>
    <?php }?>
</div><?php }} ?>
