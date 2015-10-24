{include file='header.tpl'}
        <h1>Administração</h1>
        <div class="p_admin">
            <div class="p_cursos">
                <h1>Matrículas</h1>
                {if $errMsg != ''}
                    <div class="p_cad" align="center">
                        <p style="color: {$cor}">{$errMsg}</p>
                    </div>
                {/if}
        	    <table>
            	    <tr>
                	    <th>Aluno</th>
                        <th>Curso</th>
                        <th>Início</th>
                        <th>Horário</th>
                        <th colspan="2">Situação</th>
                    </tr>
                    {section name=s loop=$matricula}
                        <tr>
                	        <td>{$matricula[s].aluno}</td>
                            <td>{$matricula[s].curso}</td>
                            <td class="table10">{$matricula[s].data_inicio|date_format:"%d/%m/%Y"}</td>
                            <td class="table15">{$matricula[s].hora_inicio|date_format:"%H:%M"} às {$matricula[s].hora_termino|date_format:"%H:%M"}</td>
                            <td class="table10"><a href="?admin&c=matriculas&a={$matricula[s].id}&u={$matricula[s].id_usuario}&p={$matricula[s].id_form}&x={$matricula[s].id_curso}">Ativar</a></td>
                            <td class="table10"><a href="?admin&c=matriculas&d={$matricula[s].id}">Desativar</a></td>
                        </tr>
                    {/section}
                </table>
            </div>
        </div>
    </div>
</div>
            
