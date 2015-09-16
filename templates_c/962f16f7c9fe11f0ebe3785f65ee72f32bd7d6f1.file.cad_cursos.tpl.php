<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-15 09:50:57
         compiled from "templates\cad_cursos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:224565563730de9f798-40916229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '962f16f7c9fe11f0ebe3785f65ee72f32bd7d6f1' => 
    array (
      0 => 'templates\\cad_cursos.tpl',
      1 => 1432650186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224565563730de9f798-40916229',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5563730e18b474_16404327',
  'variables' => 
  array (
    'curso' => 0,
    'errMsg' => 0,
    'cor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5563730e18b474_16404327')) {function content_5563730e18b474_16404327($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <h1>Cadastro - Cursos</h1>
        <form action="" method="post">
        	<input type="hidden" value="2" name="cod" />
        	<div class="p_cad">            	 	
            	<h1>Dados Gerais</h1>
                <div class="blocoText t_100">
                	<p>Nome: </p>                    
                    <p>Programa: </p>
                    <p>Carga Horária: </p>
                    <p>Instituição: </p>
                </div>
                <div class="blocoCampo t_500">
                	<input type="text" name="c_nome" size="60" maxlength="100" />                    
                    <select name="c_prog">
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
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['programa'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['programa'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php endfor; endif; ?>
                    </select>
                    <br />
                    <input type="text" name="c_cargah" maxlength="3" size="5" /> horas
                    <br />
                    <select name="c_instituicao">
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
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['id_instituicao'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curso']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['nome'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php endfor; endif; ?>
                    </select>
                </div> 
                <div class="blocoText t_150">
                	<p>Descrição: </p>
                </div>
                <div class="blocoCampo t_200">
                	<textarea name="c_desc" rows="7" cols="40" ></textarea>
                </div>
                <div class="clear"></div>
        	</div>
            <?php if ($_smarty_tpl->tpl_vars['errMsg']->value!='') {?>
                <div class="p_cad" align="center">
                    <p style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cor']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMsg']->value, ENT_QUOTES, 'UTF-8');?>
</p>
                </div>
            <?php }?>
            <div class="p_cad" align="center">
            	<input type="submit" name="submit" value="Cadastrar" class="botao" />
            </div>            
        </form>
    </div>
</div>
            
<?php }} ?>
