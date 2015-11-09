{include file='header.tpl'}
        <h1>Pesquisa</h1>
        <div class="p_cursos">
        	<div style="float: right;" class="p_cursos_b">
            	<p><input type="search" placeholder="Pesquisar" size="50" /><input type="submit" value="Pesquisar" /></p>
            </div>
            <div class="clear"></div>
            <div class="p_cursos_b">
            	<table>
            	    <tr>
                	    <th>Usuario</th>
                        <th>Perfil</th>
                        <th>Cursos</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                    {section name=s loop=$usuarios}
                    	{assign "id" $usuarios[s].id_usuario}
                        <tr>
                	        <td>{$usuarios[s].nome}</td>
                            <td class="table15">
                            	{if $usuarios[s].perfil == 1}Aluno
                                {elseif $usuarios[s].perfil == 2}Instrutor
                                {elseif $usuarios[s].perfil == 3}Administrador
                                {elseif $usuarios[s].perfil == 4}Gerente
                                {/if}
                            </td>
                            <td class="table20">                            	
                                {foreach from=$cursos item=c}
                                    {if $c.id_aluno == $id}
                                        <span style="font-weight: normal">{$c.nome}</span>  
                                    {/if}                                      
                                {/foreach}                                
                            </td>
                            <td class="table10"><a href="?editar_perfil&u={$usuarios[s].id_usuario}&etapa=1">Editar</a></td>
                            <td class="table10"><a href="#">Deletar</a></td>
                            </td>
                        </tr>
                    {/section}
                </table>
            </div>
        </div>
    </div>
</div>
            
