<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-04 12:12:09
         compiled from "templates\perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2876455410cfa28ac37-93602390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22009b29464e42b2133985e0cd0d5ba40c990d01' => 
    array (
      0 => 'templates\\perfil.tpl',
      1 => 1430766724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2876455410cfa28ac37-93602390',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55410cfa2ee847_93455557',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55410cfa2ee847_93455557')) {function content_55410cfa2ee847_93455557($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <h1>Meu Perfil</h1>
        <div class="p_perfil">
        	<div class="p_perfil_b">
            	<h1>Geral</h1>
            	<div class="p_perfil_photo">
                	<div class="p_perfil_photo_bg"></div>
                    <img src="templates/img/haseo.jpg" alt="" width="150px" height="132px" />
                </div>
                <div class="p_perfil_dados1">
                    <p><span>Nome:</span> Derik Gomide Padua</p>
                    <p><span>Mãe:</span> Alcione Alves Gomide Padua</p>
                    <p><span>Pai:</span> Euripedes Barsanulfo de Padua</p>
                    <p><span>Data de Nascimento:</span> 21/09/1989</p>
                </div>
                <div class="p_perfil_dados2">
                    <p><span>Naturalidade:</span> Sacramento</p>
                    <p><span>Nacionalidade:</span> Brasileiro</p>
                    <p><span>Estado Civil:</span> Solteiro</p>
                </div>
                <div class="p_perfil_dados5">
                    <p><span>IP:</span> 192.168.1.1</p>
                    <p><span>Último Acesso:</span> Segunda - 04/05/2015 - 16:11</p>
                    <p><span>Data de Cadastro:</span> 01/05/2015</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="p_perfil_b">
            	<h1>Informações de Contato</h1>
                <div class="p_perfil_dados3">
                    <p><span>Endereço:</span> Rua Vereador Jose Torquato</p>                    
                    <p><span>Bairro:</span> Euripedes Barsanulfo</p>                    
                    <p><span>Complemento:</span> </p>
                </div>
                <div class="p_perfil_dados4">
					<p><span>Nº:</span> 53</p>
                    <p><span>Cidade:</span> Sacramento / MG</p>
                    <p><span>CEP:</span> 38190-000</p>
                </div>
                <div class="p_perfil_dados2">
                    <p><span>E-mail:</span> tiger.dgp@hotmail.com</p>
                    <p><span>Telefone Fixo:</span> (34) 3351-2472</p>
                    <p><span>Telefone Celular:</span> (34) 9164-1120</p>
                </div>
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
            </table>
            </div>
        </div>
    </div>
</div>
            
<?php }} ?>
