<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-12 01:34:15
         compiled from "templates\cursos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:320405540dd4c28d5a0-25173086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '834e3bb0ca5682452e90dc2b4994551549719b17' => 
    array (
      0 => 'templates\\cursos.tpl',
      1 => 1443659781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320405540dd4c28d5a0-25173086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5540dd4c2d7db5_79297160',
  'variables' => 
  array (
    'errMsg' => 0,
    'cor' => 0,
    'c' => 0,
    'nome' => 0,
    'cursos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5540dd4c2d7db5_79297160')) {function content_5540dd4c2d7db5_79297160($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'includes/smarty-3.1.21/libs/plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <h1>Cursos</h1>
        <div class="p_cursos">
            <?php if ($_smarty_tpl->tpl_vars['errMsg']->value!='') {?>
                <div align="center" style="padding: 0 0 10px 0">
                    <p style="font-size: 20px; color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cor']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMsg']->value, ENT_QUOTES, 'UTF-8');?>
</p>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['c']->value=='1') {?>
                <div align="center" class="p_cursos_b">
                    <p style="font-size: 20px; color: red">Você já possui Pré-matrícula em um de nossos cursos. Vá até o SINE para dar andamento ao processo.</p>
                    <br>
                    <h1>Curso</h1>
                    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nome']->value, ENT_QUOTES, 'UTF-8');?>
</p>
                    <br>
                    <h1>Documentação necessária</h1>
                    <p>Cópia do RG (Registro Geral);</p>
                    <p>Cópia do CPF (Certidão de Pessoa Física);</p>
                    <p>Cópia do Comprovante de Residência (Atualizado);</p>
                    <p>Cópia do Comprovante de Escolaridade</p>
                    <br>
                    <h1>Local</h1>
                    <p>SINE Sacramento</p>
                    <p>Av. Benedito Valadares, 511 - Rosário - Sacramento - MG</p>
                </div>
                <div align="center">
                    <input type="submit" name="imprimir" title="Imprimir" value="Imprimir" class="botao"/>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['c']->value=='0') {?>
        	    <table>
            	    <tr>
                	    <th>Curso</th>
                        <th>Carga Horária</th>
                        <th>Início</th>
                        <th>Término</th>
                        <th>Horário</th>
                        <th>Vagas</th>
                        <th>Candidatar</th>
                    </tr>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cursos']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                        <tr>
                	        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['curso'], ENT_QUOTES, 'UTF-8');?>
</td>
                            <td class="table10"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['carga_horaria'], ENT_QUOTES, 'UTF-8');?>
 horas</td>
                            <td class="table10"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['data_inicio'],"%d/%m/%Y"), ENT_QUOTES, 'UTF-8');?>
</td>
                            <td class="table10"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['data_termino'],"%d/%m/%Y"), ENT_QUOTES, 'UTF-8');?>
</td>
                            <td class="table15"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['hora_inicio'],"%H:%M"), ENT_QUOTES, 'UTF-8');?>
 às <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['hora_termino'],"%H:%M"), ENT_QUOTES, 'UTF-8');?>
</td>
                            <td class="table10"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['vaga'], ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['vagas'], ENT_QUOTES, 'UTF-8');?>
</td>
                            <td class="table15">
                                <?php if ($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['ativo']=="1") {?>
                        	        Candidatado
                                <?php } elseif ($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['ativo']=="0") {?>
                        	        Candidatado
                                <?php } else { ?>
                        	        <a href="?curso&c=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['id'], ENT_QUOTES, 'UTF-8');?>
">Candidatar</a>
                                <?php }?>
                            </td>
                        </tr>
                    <?php endfor; endif; ?>
                </table>
            <?php }?>
        </div>
    </div>
</div>
            
<?php }} ?>
