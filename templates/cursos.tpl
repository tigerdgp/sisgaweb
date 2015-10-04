{include file='header.tpl'}
        <h1>Cursos</h1>
        <div class="p_cursos">
            {if $errMsg != ''}
                <div align="center" style="padding: 0 0 10px 0">
                    <p style="font-size: 20px; color: {$cor}">{$errMsg}</p>
                </div>
            {/if}
            {if $c == '1'}
                <div align="center" class="p_cursos_b">
                    <p style="font-size: 20px; color: red">Você já possui Pré-matrícula em um de nossos cursos. Vá até o SINE para dar andamento ao processo.</p>
                    <br>
                    <h1>Curso</h1>
                    <p>{$nome}</p>
                    <br>
                    <h1>Documentação necessária</h1>
                    <p>Cópia do RG (Registro Geral);</p>
                    <p>Cópia do CPF (Certidão de Pessoa Física);</p>
                    <p>Cópia do Comprovante de Residência (Atualizado);</p>
                    <p>Cópia do Comprovante de Escolaridade</p>
                    <br>
                    <h1>Local</h1>
                    <p>SINE Sacramento</p>
                    <p>Av. Benedito Valadares, 511 - Rosário - Sacramento - MG</p>
                </div>
                <div align="center">
                    <input type="submit" name="imprimir" title="Imprimir" value="Imprimir" class="botao"/>
                </div>
            {elseif $c == '0'}
        	    <table>
            	    <tr>
                	    <th>Curso</th>
                        <th>Carga Horária</th>
                        <th>Início</th>
                        <th>Término</th>
                        <th>Horário</th>
                        <th>Vagas</th>
                        <th>Candidatar</th>
                    </tr>
                    {section name=s loop=$cursos}
                        <tr>
                	        <td>{$cursos[s].curso}</td>
                            <td class="table10">{$cursos[s].carga_horaria} horas</td>
                            <td class="table10">{$cursos[s].data_inicio|date_format:"%d/%m/%Y"}</td>
                            <td class="table10">{$cursos[s].data_termino|date_format:"%d/%m/%Y"}</td>
                            <td class="table15">{$cursos[s].hora_inicio|date_format:"%H:%M"} às {$cursos[s].hora_termino|date_format:"%H:%M"}</td>
                            <td class="table10">{$cursos[s].vaga}/{$cursos[s].vagas}</td>
                            <td class="table15">
                                {if $cursos[s].ativo == "1"}
                        	        Candidatado
                                {elseif $cursos[s].ativo == "0"}
                        	        Candidatado
                                {else}
                        	        <a href="?curso&c={$cursos[s].id}">Candidatar</a>
                                {/if}
                            </td>
                        </tr>
                    {/section}
                </table>
            {/if}
        </div>
    </div>
</div>
            
