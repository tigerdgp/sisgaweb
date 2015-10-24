{include file='header.tpl'}
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
                	<p><input type="checkbox" name="cb[]" value="pronatec" /> PRONATEC</p>
                    <p><input type="checkbox" name="cb[]" value="psg" /> PSG</p>
                </div>
                <div class="blocoText t_150">
                    <p><input type="checkbox" name="cb[]" value="escola_movel" /> Escola Móvel</p>
                    <p><input type="checkbox" name="cb[]" value="planteq" /> PLANTEQ</p>
                </div>
                <div class="blocoText t_150">
                    <p><input type="checkbox" name="cb[]" value="pnq" /> PNQ</p>
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
                    <input type="number" name="i_cep" size="7" />
                </div>
                <div class="blocoText t_100">
                    <p>Cidade: </p>
                </div>
                <div class="blocoCampo t_100">
                    <select name="i_cidade">
                        {section name=s loop=$city}
                            <option value="{$city[s].id_cidade}">{$city[s].nome}</option>
                        {/section}
                    </select>
                </div>
                <div class="blocoText t_100">
                    <p>Estado: </p>
                </div>
                <div class="blocoCampo t_100">
                    <select name="i_uf">
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
                    <input type="text" name="i_ref" size="15" />
                </div>
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
                <div class="clear"></div>
                <div class="blocoText t_100">
                    <p>Celular: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="tel" name="i_fone3" />
                </div>
                <div class="blocoText t_100">
                    <p>E-mail: </p>
                </div>
                <div class="blocoCampo t_100">
                    <input type="email" name="i_email" size="40" />
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
            
