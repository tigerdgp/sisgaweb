<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-12 01:47:34
         compiled from "templates\matricula.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23987561b3b663bf5d9-56653116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75c5afb12ae5ac7e76c7d697029d1c4331798feb' => 
    array (
      0 => 'templates\\matricula.tpl',
      1 => 1444625110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23987561b3b663bf5d9-56653116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errMsg' => 0,
    'cor' => 0,
    'matricula' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_561b3b6642aca4_91943805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561b3b6642aca4_91943805')) {function content_561b3b6642aca4_91943805($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'includes/smarty-3.1.21/libs/plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="p_admin">
            <div class="p_cursos">
                <h1>Matrículas</h1>
                <?php if ($_smarty_tpl->tpl_vars['errMsg']->value!='') {?>
                    <div class="p_cad" align="center">
                        <p style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cor']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMsg']->value, ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>
                <?php }?>
        	    <table>
            	    <tr>
                	    <th>Aluno</th>
                        <th>Curso</th>
                        <th>Início</th>
                        <th>Horário</th>
                        <th colspan="2">Situação</th>
                    </tr>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['matricula']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                	        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['matricula']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['aluno'], ENT_QUOTES, 'UTF-8');?>
</td>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['matricula']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['curso'], ENT_QUOTES, 'UTF-8');?>
</td>
                            <td class="table10"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['matricula']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['data_inicio'],"%d/%m/%Y"), ENT_QUOTES, 'UTF-8');?>
</td>
                            <td class="table15"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['matricula']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['hora_inicio'],"%H:%M"), ENT_QUOTES, 'UTF-8');?>
 às <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['matricula']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['hora_termino'],"%H:%M"), ENT_QUOTES, 'UTF-8');?>
</td>
                            <td class="table10"><a href="?admin&c=matriculas&a=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['matricula']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['id'], ENT_QUOTES, 'UTF-8');?>
">Ativar</a></td>
                            <td class="table10"><a href="?admin&c=matriculas&d=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['matricula']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['id'], ENT_QUOTES, 'UTF-8');?>
">Desativar</a></td>
                        </tr>
                    <?php endfor; endif; ?>
                </table>
            </div>
        </div>
    </div>
</div><?php }} ?>
