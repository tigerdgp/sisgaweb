<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-30 21:12:45
         compiled from "templates\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11718554126ba638847-80205685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd56516a5d7ccaf4a4e4ea1979c41b6e9d90b9c7' => 
    array (
      0 => 'templates\\admin.tpl',
      1 => 1443658363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11718554126ba638847-80205685',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554126ba68dc01_20238992',
  'variables' => 
  array (
    'cursos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554126ba68dc01_20238992')) {function content_554126ba68dc01_20238992($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'includes/smarty-3.1.21/libs/plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <h1>Administração</h1>
        <div class="p_admin">
            <div class="p_cursos">
                <h1>Matrículas</h1>
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
                	        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['aluno'], ENT_QUOTES, 'UTF-8');?>
</td>
                            <td class="table10"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['curso'], ENT_QUOTES, 'UTF-8');?>
</td>
                            <td class="table10"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['data_inicio'],"%d/%m/%Y"), ENT_QUOTES, 'UTF-8');?>
</td>
                            <td class="table15"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['hora_inicio'],"%H:%M"), ENT_QUOTES, 'UTF-8');?>
 às <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['hora_termino'],"%H:%M"), ENT_QUOTES, 'UTF-8');?>
</td>
                            <td class="table10"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['vaga'], ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['vagas'], ENT_QUOTES, 'UTF-8');?>
</td>
                            <td class="table10"><a href="?curso&c=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['id'], ENT_QUOTES, 'UTF-8');?>
">Ativar</a></td>
                            <td class="table10"><a href="?curso&c=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['id'], ENT_QUOTES, 'UTF-8');?>
">Desativar</a></td>
                        </tr>
                    <?php endfor; endif; ?>
                </table>
            </div>
        </div>
    </div>
</div>
            
<?php }} ?>
