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
                    <p>Instituição: </p>
                </div>
                <div class="blocoCampo t_500">
                	<input type="text" name="c_nome" size="60" maxlength="100" />                    
                    <select name="c_prog">
                    	{section name=s loop=$curso}
                            <option value="{$curso[s].programa}">{$curso[s].programa}</option>
                        {/section}
                    </select>
                    <br />
                    <input type="text" name="c_cargah" />
                    <br />
                    <select name="c_instituicao">
                        {section name=s loop=$curso}
                            <option value="{$curso[s].id_instituicao}">{$curso[s].nome}</option>
                        {/section}
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
            
