{include file='header.tpl'}
        <h1>Meu Perfil</h1>
        <div class="p_perfil">
        	<div class="p_perfil_b">
            	<h1>Informações Gerais</h1>
                {section name=u loop=$user}
                    <div class="p_perfil_photo">                	
                        <div class="p_perfil_photo_bg"></div>
                        <img src="templates/img/{$user[u].foto}" alt="Avatar" width="150px" height="132px" />
                    </div>
                    <div class="p_perfil_dados1">
                    	<!-- 
                        	Perfil - Opções
                        	1-Aluno | 2-Instrutor | 3-Administrador | 4-Gerente
                        -->
                        {if $user[u].perfil == "1"}
                        	<p><span>Perfil:</span> Aluno</p>
                        {elseif $user[u].perfil == "2"}
                        	<p><span>Perfil:</span> Instrutor</p>
                        {elseif $user[u].perfil == "3"}
                        	<p><span>Perfil:</span> Administrador</p>
                        {elseif $user[u].perfil == "4"}
                        	<p><span>Perfil:</span> Gerente</p>
                        {/if}
                        <p><span>Nome:</span> {$user[u].nome}</p>
                        <p><span>Mãe:</span> {$user[u].mae}</p>
                        <p><span>Pai:</span> {$user[u].pai}</p>
                        <p><span>Data de Nascimento:</span> {$user[u].data_nasc|date_format:"%d/%m/%Y"}</p>
                        <!-- 
                        	Sexo - Opções
                        	1-Feminino | 2-Masculino
                        -->
                        {if $user[u].sexo == "1"}
                        	<p><span>Sexo:</span> Feminino</p>
                        {elseif $user[u].sexo == "2"}
                        	<p><span>Sexo:</span> Masculino</p>
                        {/if}
                    </div>
                    <div class="p_perfil_dados2">
                        <p><span>Naturalidade:</span> {$user[u].naturalidade}</p>
                        <p><span>Nacionalidade:</span> {$user[u].nacionalidade}</p>
                        <!-- 
                        	Estado Civil - Opções
                        	1-Solteiro | 2-Casado | 3-Viuvo | 4-Divorciado | 5-Separado Judicialmente | 6-Uniao Estavel 
                        -->
                        {if $user[u].estado_civil == "1"}
                        	<p><span>Estado Civil:</span> Solteiro</p>
                        {elseif $user[u].estado_civil == "2"}
                        	<p><span>Estado Civil:</span> Casado</p>
                        {elseif $user[u].estado_civil == 3}
                        	<p><span>Estado Civil:</span> Viuvo</p>
                        {elseif $user[u].estado_civil == 4}
                        	<p><span>Estado Civil:</span> Divorciado</p>
                        {elseif $user[u].estado_civil == 5}
                        	<p><span>Estado Civil:</span> Separado Judicialmente</p>
                        {elseif $user[u].estado_civil == 6}
                        	<p><span>Estado Civil:</span> Uniao Estavel</p>
                        {/if}
                        <!-- 
                        	Raça / Cor - Opções
                        	1-Amarela | 2-Branca | 3-Indigena | 4-Negra | 5-Parda | 6-Nao Declarada
                        -->
                        {if $user[u].raca == "1"}
                        	<p><span>Raça / Cor:</span> Amarela</p>
                        {elseif $user[u].raca == "2"}
                        	<p><span>Raça / Cor:</span> Branca</p>
                        {elseif $user[u].raca == "3"}
                        	<p><span>Raça / Cor:</span> Indigena</p>
                        {elseif $user[u].raca == "4"}
                        	<p><span>Raça / Cor:</span> Negra</p>
                        {elseif $user[u].raca == "5"}
                        	<p><span>Raça / Cor:</span> Parda</p>
                        {elseif $user[u].raca == "6"}
                        	<p><span>Raça / Cor:</span> Nao Declarada</p>
                        {/if}
                        <p><span>Escolaridade:</span> {$user[u].escolaridade}</p>
                    </div>
                    <div class="p_perfil_dados5">
                        <p><span>IP:</span> {$user[u].ip}</p>
                        <p><span>Último Acesso:</span> {$user[u].data|date_format:"%A, %e de %B de %Y às %H:%M:%S"}</p>
                        <p><span>Data de Cadastro:</span> {$user[u].data_cadastro|date_format:"%d/%m/%Y"}</p>
                    </div>
                {/section}
                <div class="clear"></div>
            </div>
            <div class="p_perfil_b">
            	<h1>Informações de Contato</h1>
                {section name=c loop=$contato}
                    <div class="p_perfil_dados3">
                        <p><span>Endereço:</span> {$contato[c].endereco}</p>                 
                        <p><span>Bairro:</span> {$contato[c].bairro}</p>                    
                        <p><span>Complemento:</span> {$contato[c].complemento}</p>
                    </div>
                    <div class="p_perfil_dados4">
                        <p><span>Nº:</span> {$contato[c].numero}</p>
                        <p><span>Cidade:</span> {$contato[c].cidade} / {$contato[c].estado}</p>
                        <p><span>CEP:</span> {$contato[c].cep}</p>
                    </div>
                    <div class="p_perfil_dados2">
                        <p><span>E-mail:</span> {$contato[c].email}</p>
                        <p><span>Telefone Fixo:</span> {$contato[c].telefone1}</p>
                        <p><span>Telefone Celular:</span> {$contato[c].telefone2}</p>
                        <p><span>Telefone Celular:</span> {$contato[c].telefone3}</p>
                    </div>
                {/section}
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
                    {section name=s loop=$cursos}
                        <tr>
                	        <td>{$cursos[s].curso}</td>
                            <td class="table10">{$cursos[s].carga_horaria} horas</td>
                            <td class="table10">{$cursos[s].data_inicio|date_format:"%d/%m/%Y"}</td>
                            <td class="table10">{$cursos[s].data_termino|date_format:"%d/%m/%Y"}</td>
                            <td class="table15">{$cursos[s].hora_inicio|date_format:"%H:%M"} às {$cursos[s].hora_termino|date_format:"%H:%M"}</td>
                            <td class="table10">Pré-Matriculado</td>
                            <td class="table15">
                                <a href="?certificado&c={$cursos[s].id}&{$cursos[s].aluno}">Aguardando</a>
                            </td>
                        </tr>
                    {/section}
                </table>
            </div>
        </div>
    </div>
</div>
            
