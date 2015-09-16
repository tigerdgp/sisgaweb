<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-15 09:50:50
         compiled from "templates\cad_instituicoes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1886655631f65b94459-14944640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d44dc9266e3a13d807b4fbccb5ff74d8b62c016' => 
    array (
      0 => 'templates\\cad_instituicoes.tpl',
      1 => 1432686204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1886655631f65b94459-14944640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55631f667238c0_29729328',
  'variables' => 
  array (
    'uf' => 0,
    'errMsg' => 0,
    'cor' => 0,
    'teste' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55631f667238c0_29729328')) {function content_55631f667238c0_29729328($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <h1>Cadastro - Instituições</h1>
        <form action="" method="post">
        	<input type="hidden" value="1" name="cod" />
        	<div class="p_cad">            	 	
            	<h1>Dados Gerais</h1>
                <div class="blocoText t_100">
                	<p>Nome: </p>
                    <p>Representante: </p>
                </div>
                <div class="blocoCampo t_500">
                	<input type="text" name="i_nome" size="60" maxlength="100" />
                    <input type="text" name="i_representante" size="60" maxlength="100" />
                    
                </div> 
                <div class="clear"></div>
        	</div>
            <div class="p_cad">            	 	
            	<h1>Programas</h1>
                <div class="blocoText t_150">
                    <p>Gerar Formulários</p>
                </div>
                <div class="blocoCampo t_100">
                	<select name="i_uf">
                        <option value="1">Sim</option>
                        <option value="2">Não</option>
                    </select>
                </div> 
                <div class="clear"></div>
                <div class="blocoText t_150">
                	<p><input type="checkbox" name="i_pronatec" value="PRONATEC" /> PRONATEC</p>
                    <p><input type="checkbox" name="i_psg" /> PSG</p>
                </div>
                <div class="blocoText t_150">
                    <p><input type="checkbox" name="i_movel" /> Escola Móvel</p>
                    <p><input type="checkbox" name="i_planteq" /> PLANTEQ</p>
                </div>
                <div class="blocoText t_150">
                    <p><input type="checkbox" name="i_pnq" /> PNQ</p>
                </div>
                <div class="clear"></div>
        	</div>
            <div class="p_cad">        	
            	<h1>Contato</h1>
                <div class="blocoText t_100">
                    <p>Endereço: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="text" name="i_endereco" size="50" />
                </div>
                <div class="blocoText t_100">
                    <p>Nº: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="text" name="i_numero" size="5" />
                </div>
                <div class="blocoText t_100">
                    <p>Complemento: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="text" name="i_complemento" size="30" />
                </div>
                <div class="clear"></div>
                <div class="blocoText t_100">
                    <p>Bairro: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="text" name="i_bairro" />
                </div>
                <div class="blocoText t_100">
                    <p>CEP: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="text" name="i_cep" size="7" />
                </div>
                <div class="blocoText t_100">
                    <p>Cidade: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="text" name="i_cidade" size="15" />
                </div>
                <div class="blocoText t_100">
                    <p>Estado: </p>
                </div>
                <div class="blocoCampo t_100">
                    <select name="i_uf">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['uf']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['id_estado'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['uf'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php endfor; endif; ?>
                    </select>
                </div>
                <div class="blocoText t_100">
                    <p>Referência: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="text" name="i_ref" size="15" />
                </div>
                <div class="clear"></div>
                <div class="blocoText t_120">
                    <p>Telefone Fixo: </p>
                </div>
                <div class="blocoCampo t_100">
                	<input type="tel" name="i_fone1" />
                </div>
                <div class="blocoText t_100">
                    <p>Celular: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="tel" name="i_fone2" />
                </div>
                <div class="blocoText t_100">
                    <p>Celular: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="tel" name="i_fone3" />
                </div>
                <div class="clear"></div>
                <div class="blocoText t_100">
                    <p>E-mail: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="email" name="i_email" size="40" />
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
            	<input type="submit" name="submit" value="Cadastrar" class="botao" /> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['teste']->value, ENT_QUOTES, 'UTF-8');?>

            </div>            
        </form>
    </div>
</div>
            
<?php }} ?>
