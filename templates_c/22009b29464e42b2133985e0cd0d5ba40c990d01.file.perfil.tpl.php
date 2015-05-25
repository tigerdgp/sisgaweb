<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-18 08:27:54
         compiled from "templates\perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2876455410cfa28ac37-93602390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22009b29464e42b2133985e0cd0d5ba40c990d01' => 
    array (
      0 => 'templates\\perfil.tpl',
      1 => 1431721153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2876455410cfa28ac37-93602390',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55410cfa2ee847_93455557',
  'variables' => 
  array (
    'user' => 0,
    'contato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55410cfa2ee847_93455557')) {function content_55410cfa2ee847_93455557($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'includes/smarty-3.1.21/libs/plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <h1>Meu Perfil</h1>
        <div class="p_perfil">
        	<div class="p_perfil_b">
            	<h1>Geral</h1>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['u'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['u']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['name'] = 'u';
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total']);
?>
                    <div class="p_perfil_photo">                	
                        <div class="p_perfil_photo_bg"></div>
                        <img src="templates/img/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['foto'], ENT_QUOTES, 'UTF-8');?>
" alt="" width="150px" height="132px" />
                    </div>
                    <div class="p_perfil_dados1">
                    	<!-- 
                        	Perfil - Opções
                        	1-Aluno | 2-Instrutor | 3-Administrador | 4-Gerente
                        -->
                        <?php if ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['perfil']=="1") {?>
                        	<p><span>Perfil:</span> Aluno</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['perfil']=="2") {?>
                        	<p><span>Perfil:</span> Instrutor</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['perfil']=="3") {?>
                        	<p><span>Perfil:</span> Administrador</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['perfil']=="4") {?>
                        	<p><span>Perfil:</span> Gerente</p>
                        <?php }?>
                        <p><span>Nome:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['nome'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <p><span>Mãe:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['mae'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <p><span>Pai:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['pai'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <p><span>Data de Nascimento:</span> <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['data_nasc'],"%d/%m/%Y"), ENT_QUOTES, 'UTF-8');?>
</p>
                        <!-- 
                        	Sexo - Opções
                        	1-Feminino | 2-Masculino
                        -->
                        <?php if ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['sexo']=="1") {?>
                        	<p><span>Sexo:</span> Feminino</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['sexo']=="2") {?>
                        	<p><span>Sexo:</span> Masculino</p>
                        <?php }?>
                    </div>
                    <div class="p_perfil_dados2">
                        <p><span>Naturalidade:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['naturalidade'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <p><span>Nacionalidade:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['nacionalidade'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <!-- 
                        	Estado Civil - Opções
                        	1-Solteiro | 2-Casado | 3-Viuvo | 4-Divorciado | 5-Separado Judicialmente | 6-Uniao Estavel 
                        -->
                        <?php if ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['estado_civil']=="1") {?>
                        	<p><span>Estado Civil:</span> Solteiro</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['estado_civil']=="2") {?>
                        	<p><span>Estado Civil:</span> Casado</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['estado_civil']==3) {?>
                        	<p><span>Estado Civil:</span> Viuvo</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['estado_civil']==4) {?>
                        	<p><span>Estado Civil:</span> Divorciado</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['estado_civil']==5) {?>
                        	<p><span>Estado Civil:</span> Separado Judicialmente</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['estado_civil']==6) {?>
                        	<p><span>Estado Civil:</span> Uniao Estavel</p>
                        <?php }?>
                        <!-- 
                        	Raça / Cor - Opções
                        	1-Amarela | 2-Branca | 3-Indigena | 4-Negra | 5-Parda | 6-Nao Declarada
                        -->
                        <?php if ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['raca']=="1") {?>
                        	<p><span>Raça / Cor:</span> Amarela</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['raca']=="2") {?>
                        	<p><span>Raça / Cor:</span> Branca</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['raca']=="3") {?>
                        	<p><span>Raça / Cor:</span> Indigena</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['raca']=="4") {?>
                        	<p><span>Raça / Cor:</span> Negra</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['raca']=="5") {?>
                        	<p><span>Raça / Cor:</span> Parda</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['raca']=="6") {?>
                        	<p><span>Raça / Cor:</span> Nao Declarada</p>
                        <?php }?>
                        <p><span>Escolaridade:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['escolaridade'], ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>
                    <div class="p_perfil_dados5">
                        <p><span>IP:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['ip'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <p><span>Último Acesso:</span> <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['data'],"%A, %e de %B de %Y às %H:%M:%S"), ENT_QUOTES, 'UTF-8');?>
</p>
                        <p><span>Data de Cadastro:</span> <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['data_cadastro'],"%d/%m/%Y"), ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>
                <?php endfor; endif; ?>
                <div class="clear"></div>
            </div>
            <div class="p_perfil_b">
            	<h1>Informações de Contato</h1>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['c'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contato']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total']);
?>
                    <div class="p_perfil_dados3">
                        <p><span>Endereço:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contato']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['endereco'], ENT_QUOTES, 'UTF-8');?>
</p>                 
                        <p><span>Bairro:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contato']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['bairro'], ENT_QUOTES, 'UTF-8');?>
</p>                    
                        <p><span>Complemento:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contato']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['complemento'], ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>
                    <div class="p_perfil_dados4">
                        <p><span>Nº:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contato']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['numero'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <p><span>Cidade:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contato']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['cidade'], ENT_QUOTES, 'UTF-8');?>
 / <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contato']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['estado'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <p><span>CEP:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contato']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['cep'], ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>
                    <div class="p_perfil_dados2">
                        <p><span>E-mail:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contato']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['email'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <p><span>Telefone Fixo:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contato']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['telefone1'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <p><span>Telefone Celular:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contato']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['telefone2'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <p><span>Telefone Celular:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contato']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['telefone3'], ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>
                <?php endfor; endif; ?>
                <div class="clear"></div>
            </div>
            <div class="p_perfil_b">
            	<h1>Histórico de Cursos</h1>
                <table>
            	<tr>
                	<th>Curso</th>
                    <th>Carga Horária</th>
                    <th>Início</th>
                    <th>Término</th>
                    <th>Horário</th>
                    <th>Situação</th>
                    <th>Certificado Digital</th>
                </tr>
                <tr>
                	<td>Costura de Vestuário</td>
                    <td class="table10">80 Horas</td>
                    <td class="table10">19/05/2015</td>
                    <td class="table10">18/06/2015</td>
                    <td class="table15">08:00 às 12:15</td>
                    <td class="table10">Cursando</td>
                    <td class="table15">Aguardando</td>
                </tr>
                <tr>
                	<td>Costura de Vestuário</td>
                    <td class="table10">80 Horas</td>
                    <td class="table10">19/05/2015</td>
                    <td class="table10">18/06/2015</td>
                    <td class="table15">13:45 às 18:00</td>
                    <td class="table10">Aprovado</td>
                    <td class="table15"><a href="?certificado">Abrir</a></td>
                </tr>
                <tr>
                	<td>Auxiliar Administrativo</td>
                    <td class="table10">160 Horas</td>
                    <td class="table10">19/05/2015</td>
                    <td class="table10">18/06/2015</td>
                    <td class="table15">19:00 às 22:00</td>
                    <td class="table10">Aprovado</td>
                    <td class="table15"><a href="?certificado">Abrir</a></td>
                </tr>
                <tr>
                	<td>Artesão em Bordado à Mão</td>
                    <td class="table10">160 Horas</td>
                    <td class="table10">19/05/2015</td>
                    <td class="table10">18/06/2015</td>
                    <td class="table15">13:00 às 16:00</td>
                    <td class="table10">Reprovado</td>
                    <td class="table15">Não Gerado</td>
                </tr>
                <tr>
                	<td>Artesão em Bordado à Mão</td>
                    <td class="table10">160 Horas</td>
                    <td class="table10">19/05/2015</td>
                    <td class="table10">18/06/2015</td>
                    <td class="table15">13:00 às 16:00</td>
                    <td class="table10">Reprovado</td>
                    <td class="table15">Não Gerado</td>
                </tr>
                <tr>
                	<td>Artesão em Bordado à Mão</td>
                    <td class="table10">160 Horas</td>
                    <td class="table10">19/05/2015</td>
                    <td class="table10">18/06/2015</td>
                    <td class="table15">13:00 às 16:00</td>
                    <td class="table10">Reprovado</td>
                    <td class="table15">Não Gerado</td>
                </tr>
                <tr>
                	<td>Artesão em Bordado à Mão</td>
                    <td class="table10">160 Horas</td>
                    <td class="table10">19/05/2015</td>
                    <td class="table10">18/06/2015</td>
                    <td class="table15">13:00 às 16:00</td>
                    <td class="table10">Reprovado</td>
                    <td class="table15">Não Gerado</td>
                </tr>
                <tr>
                	<td>Artesão em Bordado à Mão</td>
                    <td class="table10">160 Horas</td>
                    <td class="table10">19/05/2015</td>
                    <td class="table10">18/06/2015</td>
                    <td class="table15">13:00 às 16:00</td>
                    <td class="table10">Reprovado</td>
                    <td class="table15">Não Gerado</td>
                </tr>
            </table>
            </div>
        </div>
    </div>
</div>
            
<?php }} ?>
