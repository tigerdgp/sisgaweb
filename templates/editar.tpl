{include file='header.tpl'}
        <div class="p_perfil">
            {if $smarty.get.etapa == 1}
                <div class="p_perfil_b">
                    <h1>Editar - Informações Gerais</h1>
                    <form action="" method="post">
                        <input type="hidden" value="1" name="cod" />
                        <div class="edit_bloco" style="background-color:#66C">
                        {section name=s loop=$edit}
                            <h1>Original</h1>
                            <p><span>Nome: </span>{$edit[s].nome}</p>
                            <p><span>Mãe: </span>{$edit[s].mae}</p>
                            <p><span>Pai: </span>{$edit[s].pai}</p>                                
                            <p><span>Data Nascimento: </span>{$edit[s].data_nasc|date_format:"%d/%m/%Y"}</p>
                            <p><span>Escolaridade: </span>{$edit[s].escolaridade}</p>
                            <p><span>Nacionalidade: </span>{$edit[s].nacionalidade}</p>
                            <p><span>Naturalidade: </span>{$edit[s].cidade} - {$edit[s].estado}</p>
                            <p><span>Sexo: </span>
                            	{if $edit[s].sexo == 1}Feminino
                                {elseif $edit[s].sexo == 2}Masculino
                                {/if}
                            </p>
                            <p><span>Raça / Cor: </span>
                            	{if $edit[s].raca == 1}Amarela
                                {elseif $edit[s].raca == 2}Branca
                                {elseif $edit[s].raca == 3}Indigena
                                {elseif $edit[s].raca == 4}Negra
                                {elseif $edit[s].raca == 5}Parda
                                {elseif $edit[s].raca == 6}Não Declarada
                                {/if}
                            </p>
                            
                            <p><span>Estado Civil: </span>
                            	{if $edit[s].estado_civil == 1}Solteiro
                                {elseif $edit[s].estado_civil == 2}Casado
                                {elseif $edit[s].estado_civil == 3}Viuvo
                                {elseif $edit[s].estado_civil == 4}Divorciado
                                {elseif $edit[s].estado_civil == 5}Separado Judicialmente
                                {elseif $edit[s].estado_civil == 6}União Estável
                                {/if}
                            </p>
                            <p><span>Deficiência: </span>
                            	{if $edit[s].deficiencia == 1}Auditiva
                                {elseif $edit[s].deficiencia == 2}Física
                                {elseif $edit[s].deficiencia == 3}Mental
                                {elseif $edit[s].deficiencia == 4}Múltiplas
                                {elseif $edit[s].deficiencia == 5}Visual
                                {elseif $edit[s].deficiencia == 6}Nenhuma
                                {/if}
                            </p>
                            {if $edit[s].perfil >= 3}
                            	<p><span>Perfil: </span>
                                	{if $edit[s].perfil == 1}Aluno
                                    {elseif $edit[s].perfil == 2}Instrutor
                                    {elseif $edit[s].perfil == 3}Administrador
                                    {elseif $edit[s].perfil == 4}Gerente
                                    {/if}
                                </p>
                            {/if}
                        {/section}
                        </div>
                        <div class="edit_bloco" style="background-color:#9C0">
                            {section name=s loop=$edit}
                                <h1>Novo</h1>
                                <p><input type="text" name="p_nome" size="60" maxlength="100" value="{$edit[s].nome}" /></p>
                                <p><input type="text" name="p_mae" size="60" maxlength="100" value="{$edit[s].mae}" /></p>
                                <p><input type="text" name="p_pai" size="60" maxlength="100" value="{$edit[s].pai}" /></p>
                                <p><input type="date" name="p_nasc" class="input" value='{$edit[s].data_nasc}' /></p>
                                <p><input type="text" name="p_escolaridade" value="{$edit[s].escolaridade}" /></p>
                                <p><input type="text" name="p_nacionalidade" value="{$edit[s].nacionalidade}" /></p>
                            {/section}
                            <p><select name="p_naturalidade">
                                    {section name=s loop=$edit}
                                        <option value="{$edit[s].naturalidade}" selected="selected">{$edit[s].cidade}</option>
                                    {/section}
                                    {section name=s loop=$city}
                                        <option value="{$city[s].id_cidade}">{$city[s].nome}</option>
                                    {/section}
                                </select><select name="p_n_uf">
                                    {section name=s loop=$edit}
                                        <option value="{$edit[s].n_uf}" selected="selected">{$edit[s].estado}</option>
                                    {/section}
                                    {section name=s loop=$uf}
                                        <option value="{$uf[s].id_estado}">{$uf[s].uf}</option>
                                    {/section}
                                </select>
                            </p>
                            {section name=s loop=$edit}
                                <p><select name="p_sexo">
                                        {if $edit[s].sexo == 1}
                                            <option value="1" selected="selected">Feminino</option>
                                            <option value="2">Masculino</option>
                                        {elseif $edit[s].sexo == 2}
                                            <option value="1">Feminino</option>
                                            <option value="2" selected="selected">Masculino</option>
                                        {/if}
                                    </select>
                                </p>
                                <p><select name="p_raca">
                                        {if $edit[s].raca == 1}
                                            <option value="1" selected="selected">Amarela</option>
                                            <option value="2">Branca</option>
                                            <option value="3">Indigena</option>
                                            <option value="4">Negra</option>
                                            <option value="5">Parda</option>
                                            <option value="6">Não Declarada</option>
                                        {elseif $edit[s].raca == 2}
                                            <option value="1">Amarela</option>
                                            <option value="2" selected="selected">Branca</option>
                                            <option value="3">Indigena</option>
                                            <option value="4">Negra</option>
                                            <option value="5">Parda</option>
                                            <option value="6">Não Declarada</option>
                                        {elseif $edit[s].raca == 3}
                                            <option value="1">Amarela</option>
                                            <option value="2">Branca</option>
                                            <option value="3" selected="selected">Indigena</option>
                                            <option value="4">Negra</option>
                                            <option value="5">Parda</option>
                                            <option value="6">Não Declarada</option>
                                        {elseif $edit[s].raca == 4}
                                            <option value="1">Amarela</option>
                                            <option value="2">Branca</option>
                                            <option value="3">Indigena</option>
                                            <option value="4" selected="selected">Negra</option>
                                            <option value="5">Parda</option>
                                            <option value="6">Não Declarada</option>
                                        {elseif $edit[s].raca == 5}
                                            <option value="1">Amarela</option>
                                            <option value="2">Branca</option>
                                            <option value="3">Indigena</option>
                                            <option value="4">Negra</option>
                                            <option value="5" selected="selected">Parda</option>
                                            <option value="6">Não Declarada</option>
                                        {elseif $edit[s].raca == 6}
                                            <option value="1">Amarela</option>
                                            <option value="2">Branca</option>
                                            <option value="3">Indigena</option>
                                            <option value="4">Negra</option>
                                            <option value="5">Parda</option>
                                            <option value="6" selected="selected">Não Declarada</option>
                                        {/if}
                                    </select>
                                </p>
                                <p><select name="p_estado_civil">
                                        {if $edit[s].estado_civil == 1}
                                            <option value="1" selected="selected">Solteiro</option>
                                            <option value="2">Casado</option>
                                            <option value="3">Viuvo</option>
                                            <option value="4">Divorciado</option>
                                            <option value="5">Separado Judicialmente</option>
                                            <option value="6">União Estável</option>
                                        {elseif $edit[s].estado_civil == 2}
                                            <option value="1">Solteiro</option>
                                            <option value="2" selected="selected">Casado</option>
                                            <option value="3">Viuvo</option>
                                            <option value="4">Divorciado</option>
                                            <option value="5">Separado Judicialmente</option>
                                            <option value="6">União Estável</option>
                                        {elseif $edit[s].estado_civil == 3}
                                            <option value="1">Solteiro</option>
                                            <option value="2">Casado</option>
                                            <option value="3" selected="selected">Viuvo</option>
                                            <option value="4">Divorciado</option>
                                            <option value="5">Separado Judicialmente</option>
                                            <option value="6">União Estável</option>
                                        {elseif $edit[s].estado_civil == 4}
                                            <option value="1">Solteiro</option>
                                            <option value="2">Casado</option>
                                            <option value="3">Viuvo</option>
                                            <option value="4" selected="selected">Divorciado</option>
                                            <option value="5">Separado Judicialmente</option>
                                            <option value="6">União Estável</option>
                                        {elseif $edit[s].estado_civil == 5}
                                            <option value="1">Solteiro</option>
                                            <option value="2">Casado</option>
                                            <option value="3">Viuvo</option>
                                            <option value="4">Divorciado</option>
                                            <option value="5" selected="selected">Separado Judicialmente</option>
                                            <option value="6">União Estável</option>
                                        {elseif $edit[s].estado_civil == 6}
                                            <option value="1">Solteiro</option>
                                            <option value="2">Casado</option>
                                            <option value="3">Viuvo</option>
                                            <option value="4">Divorciado</option>
                                            <option value="5">Separado Judicialmente</option>
                                            <option value="6" selected="selected">União Estável</option>
                                        {/if}
                                    </select>
                                </p>
                                <p><select name="p_deficiencia">
                                        {if $edit[s].deficiencia == 1}
                                            <option value="1" selected="selected">Auditiva</option>
                                            <option value="2">Física</option>
                                            <option value="3">Mental</option>
                                            <option value="4">Múltiplas</option>
                                            <option value="5">Visual</option>
                                            <option value="6">Nenhuma</option>
                                        {elseif $edit[s].deficiencia == 2}
                                            <option value="1">Auditiva</option>
                                            <option value="2" selected="selected">Física</option>
                                            <option value="3">Mental</option>
                                            <option value="4">Múltiplas</option>
                                            <option value="5">Visual</option>
                                            <option value="6">Nenhuma</option>
                                        {elseif $edit[s].deficiencia == 3}
                                            <option value="1">Auditiva</option>
                                            <option value="2">Física</option>
                                            <option value="3" selected="selected">Mental</option>
                                            <option value="4">Múltiplas</option>
                                            <option value="5">Visual</option>
                                            <option value="6">Nenhuma</option>
                                        {elseif $edit[s].deficiencia == 4}
                                            <option value="1">Auditiva</option>
                                            <option value="2">Física</option>
                                            <option value="3">Mental</option>
                                            <option value="4" selected="selected">Múltiplas</option>
                                            <option value="5">Visual</option>
                                            <option value="6">Nenhuma</option>
                                        {elseif $edit[s].deficiencia == 5}
                                            <option value="1">Auditiva</option>
                                            <option value="2">Física</option>
                                            <option value="3">Mental</option>
                                            <option value="4">Múltiplas</option>
                                            <option value="5" selected="selected">Visual</option>
                                            <option value="6">Nenhuma</option>
                                        {elseif $edit[s].deficiencia == 6}
                                            <option value="1">Auditiva</option>
                                            <option value="2">Física</option>
                                            <option value="3">Mental</option>
                                            <option value="4">Múltiplas</option>
                                            <option value="5">Visual</option>
                                            <option value="6" selected="selected">Nenhuma</option>
                                        {/if}
                                    </select>
                                </p>
                                {if $edit[s].perfil >= 3}
                                    <p><select name="p_perfil">
                                            {if $edit[s].perfil == 1}
                                                <option value="1" selected="selected">Aluno</option>
                                                <option value="2">Instrutor</option>
                                                <option value="3">Administrador</option>
                                                <option value="4">Gerente</option>
                                            {elseif $edit[s].perfil == 2}
                                                <option value="1">Aluno</option>
                                                <option value="2" selected="selected">Instrutor</option>
                                                <option value="3">Administrador</option>
                                                <option value="4">Gerente</option>
                                            {elseif $edit[s].perfil == 3}
                                                <option value="1">Aluno</option>
                                                <option value="2">Instrutor</option>
                                                <option value="3" selected="selected">Administrador</option>
                                                <option value="4">Gerente</option>
                                            {elseif $edit[s].perfil == 4}
                                                <option value="1">Aluno</option>
                                                <option value="2">Instrutor</option>
                                                <option value="3">Administrador</option>
                                                <option value="4" selected="selected">Gerente</option>
                                            {/if}
                                        </select>
                                    </p>
                                {/if}
                            {/section}
                        </div>
                        <div class="clear"></div>
                        <div class="p_cad" align="center">                        	
                            <input type="submit" name="submit" value="Cancelar" class="botao" />
                            <input type="submit" name="submit" value="Avançar" class="botao" />
                        </div>            
                    </form>
                </div>
            {elseif $smarty.get.etapa == 2}
                <div class="p_perfil_b">
                    <h1>Editar - Informações de Contato</h1>
                    <form action="" method="post">
                        <input type="hidden" value="2" name="cod" />                        
                        <div class="edit_bloco" style="background-color:#9C0">
                        	{section name=s loop=$edit_c}
                                <p><span>Endereço: </span>{$edit_c[s].endereco}</p>
                                <p><span>Nº: </span>{$edit_c[s].numero}</p> 
                                <p><span>Complemento: </span>{$edit_c[s].complemento}</p>
                                <p><span>Bairro: </span>{$edit_c[s].bairro}</p>
                                <p><span>CEP: </span>{$edit_c[s].cep}</p>                          
                                <p><span>Cidade: </span>{$edit_c[s].cidade}</p>
                                <p><span>Estado: </span>{$edit_c[s].estado}</p>                            
                                <p><span>Referência: </span>{$edit_c[s].ref}</p>
                                <p><span>Telefone Fixo: </span>{$edit_c[s].telefone1|phone_format}</p>
                                <p><span>Telefone Celular: </span>{$edit_c[s].telefone2|phone_format}</p>
                                <p><span>Telefone Celular: </span>{$edit_c[s].telefone3|phone_format}</p>
                                <p><span>E-mail: </span>{$edit_c[s].email}</p>
                            {/section}
                        </div>
                        <div class="edit_bloco" style="background-color:#C99">
                        	{section name=s loop=$edit_c}
                                <p><input type="text" name="p_endereco" size="50" value="{$edit_c[s].endereco}" /></p>
                                <p><input type="text" name="p_numero" size="5" value="{$edit_c[s].numero}" /></p>
                                <p><input type="text" name="p_complemento" size="30" value="{$edit_c[s].complemento}" /></p>
                                <p><input type="text" name="p_bairro" value="{$edit_c[s].bairro}" /></p>
                                <p><input type="number" name="p_cep" size="7" value="{$edit_c[s].cep}" /></p>
                            {/section}
                            <p><select name="p_cidade">
                            		{section name=s loop=$edit_c}
                                        <option value="{$edit_c[s].naturalidade}" selected="selected">{$edit_c[s].cidade}</option>
                                    {/section}
                                    {section name=s loop=$city}
                                        <option value="{$city[s].id_cidade}">{$city[s].nome}</option>
                                    {/section}
                                </select>
                            </p>
                            <p><select name="p_c_uf">
                            		{section name=s loop=$edit_c}
                                        <option value="{$edit_c[s].n_uf}" selected="selected">{$edit_c[s].estado}</option>
                                    {/section}
                                    {section name=s loop=$uf}
                                        <option value="{$uf[s].id_estado}">{$uf[s].uf}</option>
                                    {/section}
                                </select>
                            </p>
                            {section name=s loop=$edit_c}
                                <p><input type="text" name="p_ref" size="15" value="{$edit_c[s].ref}" /></p>
                                <p><input type="tel" name="p_fone1" value="{$edit_c[s].telefone1}" /></p>
                                <p><input type="tel" name="p_fone2" value="{$edit_c[s].telefone2}" /></p>
                                <p><input type="tel" name="p_fone3" value="{$edit_c[s].telefone3}" /></p>
                                <p><input type="email" name="p_email" value="{$edit_c[s].email}" size="40" /></p>
                            {/section}
                        </div>                        
                        <div class="clear"></div>
                        <div class="p_cad" align="center">
                            <input type="submit" name="submit" value="Cancelar" class="botao" />
                            <input type="submit" name="submit" value="Avançar" class="botao" />
                        </div>            
                    </form>
                </div>
            {elseif $smarty.get.etapa == 3}
                <div class="p_perfil_b">
                    <h1>Editar - Informações Extras</h1>
                    <form action="" method="post">
                        <input type="hidden" value="3" name="cod" />
                        <div class="p_cad" align="center">
                            <input type="submit" name="submit" value="Cancelar" class="botao" />
                            <input type="submit" name="submit" value="Avançar" class="botao" />
                        </div>            
                    </form>
                </div>
            {/if}
        </div>
    </div>
</div>
            
