{include file='header.tpl'}
        <h1>Cursos</h1>
        <div class="p_cursos">
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
                        <td class="table15"><a href="?curso&c={$cursos[s].id}">Candidatar</a></td>
                    </tr>
                {/section}
            </table>
        </div>
    </div>
</div>
            
