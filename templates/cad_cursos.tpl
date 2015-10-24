{include file='header.tpl'}
        <h1>Cadastro - Cursos</h1>
        <form action="" method="post">
        	<input type="hidden" value="2" name="cod" />
        	<div class="p_cad">            	 	
            	<h1>Dados Gerais</h1>
                <div class="blocoText t_100">
                	<p>Nome: </p>                    
                    <p>Programa: </p>
                    <p>Carga Horária: </p>
                    <p>Quantidade Vagas: </p>
                    <p>Instituição: </p>
                    <p>Data Início: </p>
                    <p>Data Término: </p>
                    <p>Hora Início: </p>
                    <p>Hora Término: </p>
                    <p>Escolaridade: </p>
                    <p>Faixa Etária: </p>
                    <p>Local: </p>
                </div>
                <div class="blocoCampo t_500">
                	<input type="text" name="c_nome" size="60" maxlength="100" />                    
                    <select name="c_prog">
                    	<option value="pronatec">PRONATEC</option>
                        <option value="psg">PSG</option>
                        <option value="escola_movel">Escola Móvel</option>
                        <option value="planteq">PLANTEQ</option>
                        <option value="pnq">PNQ</option>
                    </select>
                    <br />
                    <input type="text" name="c_cargah" maxlength="3" size="5" /> horas
                    <br />
                    <input type="text" name="c_vagas" maxlength="3" size="5" />
                    <br />
                    <select name="c_instituicao">
                        {section name=s loop=$inst}
                            <option value="{$inst[s].id_instituicao}">{$inst[s].nome}</option>
                        {/section}
                    </select>
                    <br />
                    <input type="date" name="c_d_inicio" class="input" />
                    <br />
                    <input type="date" name="c_d_termino" class="input" />
                    <br />
                    <input type="time" name="c_t_inicio" class="input" />
                    <br />
                    <input type="time" name="c_t_termino" class="input" />
                    <br />
                    <select name="c_esc">
                    	<option value="Ensino Fundamental I Incompleto">Ensino Fundamental I Incompleto</option>
                        <option value="Ensino Fundamental I Completo">Ensino Fundamental I Completo</option>
                        <option value="Ensino Fundamental II Incompleto">Ensino Fundamental II Incompleto</option>
                        <option value="Ensino Fundamental II Completo">Ensino Fundamental II Completo</option>
                        <option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>
                        <option value="Ensino Médio Completo">Ensino Médio Completo</option>
                    </select>
                    <br />
                    <input type="text" name="c_idade" maxlength="2" size="5" /> anos
                    <br />
                    <input type="text" name="c_local" size="111" />
                </div> 
                <div class="blocoText t_150">
                	<p>Descrição: </p>
                </div>
                <div class="blocoCampo t_200">
                	<textarea name="c_desc" rows="20" cols="40" ></textarea>
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
            
