<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-24 13:24:27
         compiled from "templates\curso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121815542c78e6d1499-99902759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c0f3059cfb5bdc012b699c18031115435df8c6d' => 
    array (
      0 => 'templates\\curso.tpl',
      1 => 1443111862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121815542c78e6d1499-99902759',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5542c78e6fc187_23908168',
  'variables' => 
  array (
    'curso' => 0,
    'amanha' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5542c78e6fc187_23908168')) {function content_5542c78e6fc187_23908168($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'includes/smarty-3.1.21/libs/plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
            <h1>Parabéns! Você está prestes a se candidatar ao Curso abaixo.</h1>
            <div class="p_cursos">
                <div class="p_cursos_b">
        	        <h1>Informações</h1>
                    <div class="p_cursos_b1">
                        <p><span>Nome:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['curso'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <p><span>Data de início:</span> <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['data_inicio'],"%d/%m/%Y"), ENT_QUOTES, 'UTF-8');?>
</p>
                        <p><span>Data de Término:</span> <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['data_termino'],"%d/%m/%Y"), ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>
                    <div class="p_cursos_b1">
                        <p><span>Carga Horária:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['carga_horaria'], ENT_QUOTES, 'UTF-8');?>
 horas</p>
                        <p><span>Horário:</span> <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['hora_inicio'],"%H:%M"), ENT_QUOTES, 'UTF-8');?>
 às <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['hora_termino'],"%H:%M"), ENT_QUOTES, 'UTF-8');?>
</p>                    
                        <p><span>Programa:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['programa'], ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>                    
                    <div class="p_cursos_b1">
                        <p><span>Valor:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['valor'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <p><span>Ofertante:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['instituicao'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <p><span>Vagas:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['vagas'], ENT_QUOTES, 'UTF-8');?>
</p>
                    </div> 
                    <div class="clear"></div>                   
                </div>
                <div class="p_cursos_b">
                <h1>Exigências</h1>
                    <p>Ter cursado o <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['escolaridade'], ENT_QUOTES, 'UTF-8');?>
</p>
                    <p>Ser maior de <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['idade'], ENT_QUOTES, 'UTF-8');?>
 anos</p>
                </div>
                <div class="p_cursos_b">          
                    <h1>Documentação necessária</h1>
                    <p>Cópia do RG (Registro Geral);</p>
                    <p>Cópia do CPF (Certidão de Pessoa Física);</p>
                    <p>Cópia do Comprovante de Residência (Atualizado);</p>
                    <p>Cópia do Comprovante de Escolaridade</p>
                </div>
                <div align="center" class="p_cursos_b">
                    <h1>ATENÇÃO</h1>
                    <p style="font-size: 20px">Caro aluno, após a confirmação de sua candidatura à bolsa deste curso você terá prazo até dia <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['amanha']->value,"%d/%m/%Y"), ENT_QUOTES, 'UTF-8');?>
 às 16:00 horas para apresentar a documentação listada acima para fins de confirmação da pré-matrícula. A não apresentação acarretará no cancelamento de sua candidatura e a vaga será disponibilizada novamente no sistema.</p>
                </div>
                <form action="" method="post">
                    <input hidden name="curso" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['id'], ENT_QUOTES, 'UTF-8');?>
">
                    <input hidden name="aluno" value="<?php echo htmlspecialchars($_SESSION['id_usuario'], ENT_QUOTES, 'UTF-8');?>
">
                    <div align="center">
                        <input type="submit" name="submit" title="Estou ciente" value="Estou ciente" class="botao"/> <input type="button" name="cancel" title="Cancelar" value="Cancelar" onClick="voltar()" class="botao"/>
                    </div>
                </form>
            </div>            
        <?php endfor; endif; ?>
    </div>
</div>
            
<?php }} ?>
