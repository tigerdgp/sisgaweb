{include file='header.tpl'}
        <h1>Cadastro - Pessoas</h1>
        <form action="" method="post">
        	<input type="hidden" value="3" name="cod" />
        	<div class="p_cad">            	 	
            	<h1>Dados Gerais</h1>
                <div class="blocoText t_100">
                	<p>* Nome: </p>
                    <p>* Mãe: </p>
                    <p>* Pai: </p>
                    <p>* Naturalidade: </p>
                </div>
                <div class="blocoCampo t_500">
                	<input type="text" name="p_nome" size="60" maxlength="100" />
                    <input type="text" name="p_mae" size="60" maxlength="100" />
                    <input type="text" name="p_pai" size="60" maxlength="100" />
                    <select name="p_naturalidade">
                        {section name=s loop=$city}
                            <option value="{$city[s].id_cidade}">{$city[s].nome}</option>
                        {/section}
                    </select>
                    <select name="p_n_uf">
                        {section name=s loop=$uf}
                            <option value="{$uf[s].id_estado}">{$uf[s].uf}</option>
                        {/section}
                    </select>
                </div> 
                <div class="clear"></div>
                <div class="blocoText t_150">
                	<p>* Data Nascimento: </p> 
                	<p>Sexo: </p>
                    <p>Raça / Cor: </p>
                </div>
                <div class="blocoCampo t_150">
                	<input type="date" name="p_nasc" class="input" />
                    <select name="p_sexo">
                        <option value="1">Feminino</option>
                        <option value="2">Masculino</option>
                    </select>                    
                    <select name="p_raca">
                        <option value="1">Amarela</option>
                        <option value="2">Branca</option>
                        <option value="3">Indigena</option>
                        <option value="4">Negra</option>
                        <option value="5">Parda</option>
                        <option value="6">Não Declarada</option>
                    </select>
                </div>
                <div class="blocoText t_120">
                	<p>* Nacionalidade: </p>
                	<p>* Escolaridade: </p>
                    <p>Estado Civil: </p>
                </div>
                <div class="blocoCampo t_200">
                	<input type="text" name="p_nacionalidade" />
                	<input type="text" name="p_escolaridade" />
                    <select name="p_estado_civil">
                        <option value="1">Solteiro</option>
                        <option value="2">Casado</option>
                        <option value="3">Viuvo</option>
                        <option value="4">Divorciado</option>
                        <option value="5">Separado Judicialmente</option>
                        <option value="6">União Estável</option>
                    </select>
                </div>
                <div class="blocoText t_120">
                	<p>Deficiência: </p>
                    <p>Perfil: </p>
                </div>
                <div class="blocoCampo t_150">
                	<select name="p_deficiencia">
                        <option value="1">Auditiva</option>
                        <option value="2">Física</option>
                        <option value="3">Mental</option>
                        <option value="4">Múltiplas</option>
                        <option value="5">Visual</option>
                        <option selected="selected" value="6">Nenhuma</option>
                    </select><br />
                    <select name="p_perfil">
                        <option value="1">Aluno</option>
                        <option value="2">Instrutor</option>
                        <option value="3">Administrador</option>
                        <option value="4">Gerente</option>
                    </select>
                </div>
                <div class="clear"></div>
        	</div>
            <div class="p_cad">        	
            	<h1>Documentos</h1>
                <div class="blocoText t_100">
                	<p>* CPF: </p>
                </div>
                <div class="blocoCampo t_200">
                	<input type="number" name="p_cpf" maxlength="11" />
                </div>
                <div class="clear"></div>
                <div class="blocoText t_100">
                	<p>* Identidade: </p>
                </div>
                <div class="blocoCampo t_200">
                	<input type="text" name="p_rg" maxlength="20" />
                </div>
                <div class="blocoText t_130">
                    <p>* Orgão Emissor: </p>
                </div>
                <div class="blocoCampo t_100">                    
                    <input type="text" name="p_orgao" maxlength="5" size="5" />
                </div>
                <div class="blocoText t_140">
                    <p>* Data de Emissão: </p>
                </div>
                <div class="blocoCampo t_150">
                	<input type="date" name="p_emissao" class="input" />
                </div>
                <div class="blocoText t_100">
                    <p>Estado: </p>
                </div>
                <div class="blocoCampo t_100">
                    <select name="p_d_uf">
                        {section name=s loop=$uf}
                            <option value="{$uf[s].id_estado}">{$uf[s].uf}</option>
                        {/section}
                    </select>
                </div>
                <div class="clear"></div>
                <div class="blocoText t_100">
                    <p>Título: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="text" name="p_titulo" maxlength="11" />
                </div>
                <div class="blocoText t_100">
                    <p>Zona: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="text" name="p_zona" size="5" />
                </div>
                <div class="blocoText t_100">
                    <p>Sessão: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="text" name="p_sessao" size="5" />
                </div>
                <div class="blocoText t_100">
                    <p>Cidade: </p>
                </div>
                <div class="blocoCampo t_100">
                    <select name="p_d_cidade">
                        {section name=s loop=$city}
                            <option value="{$city[s].id_cidade}">{$city[s].nome}</option>
                        {/section}
                    </select>
                    <select name="p_dt_uf">
                        {section name=s loop=$uf}
                            <option value="{$uf[s].id_estado}">{$uf[s].uf}</option>
                        {/section}
                    </select>
                </div>
                <div class="clear"></div>
                <div class="blocoText t_100">
                    <p>Reservista: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="text" name="p_reservista" maxlength="20" />
                </div>
                <div class="clear"></div>     	
        	</div>
            <div class="p_cad">        	
            	<h1>Contato</h1>
                <div class="blocoText t_100">
                    <p>* Endereço: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="text" name="p_endereco" size="50" />
                </div>
                <div class="blocoText t_100">
                    <p>* Nº: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="text" name="p_numero" size="5" />
                </div>
                <div class="blocoText t_100">
                    <p>Complemento: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="text" name="p_complemento" size="20" />
                </div>
                <div class="clear"></div>
                <div class="blocoText t_100">
                    <p>* Bairro: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="text" name="p_bairro" />
                </div>
                <div class="blocoText t_100">
                    <p>* CEP: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="number" name="p_cep" size="7" />
                </div>
                <div class="blocoText t_100">
                    <p>Cidade: </p>
                </div>
                <div class="blocoCampo t_100">
                    <select name="p_cidade">
                        {section name=s loop=$city}
                            <option value="{$city[s].id_cidade}">{$city[s].nome}</option>
                        {/section}
                    </select>
                </div>
                <div class="blocoText t_100">
                    <p>Estado: </p>
                </div>
                <div class="blocoCampo t_100">
                    <select name="p_c_uf">
                        {section name=s loop=$uf}
                            <option value="{$uf[s].id_estado}">{$uf[s].uf}</option>
                        {/section}
                    </select>
                </div>                
                <div class="clear"></div>
                <div class="blocoText t_100">
                    <p>Referência: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="text" name="p_ref" size="15" />
                </div>
                <div class="blocoText t_120">
                    <p>Telefone Fixo: </p>
                </div>
                <div class="blocoCampo t_100">
                	<input type="tel" name="p_fone1" />
                </div>
                <div class="blocoText t_100">
                    <p>* Celular: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="tel" name="p_fone2" />
                </div>                
                <div class="clear"></div>
                <div class="blocoText t_100">
                    <p>Celular: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="tel" name="p_fone3" />
                </div>
                <div class="blocoText t_100">
                    <p>E-mail: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="email" name="p_email" size="40" />
                </div>
                <div class="blocoText t_100">
                    <p>Senha: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="password" name="senha" />
                </div>
                <div class="clear"></div>                  
        	</div>
            {if $errMsg != ''}
                <div class="p_cad" align="center">
                    <p style="color: {$cor}">{$errMsg}</p>
                </div>
            {/if}
            <div class="p_cad" align="center">
            	<input type="submit" name="submit" value="Cadastrar" class="botao" />
            </div>            
        </form>
    </div>
</div>
            
