{include file='header.tpl'}
        {section name=s loop=$curso}
            <h1>Curso {$curso[s].nome}</h1>
            <div class="p_cursos">
                <div class="p_cursos_b">
        	        <h1>Informações</h1>
                    <div class="p_cursos_b1">
                        <p><span>Nome:</span> {$curso[s].curso}</p>
                        <p><span>Data de início:</span> {$curso[s].data_inicio|date_format:"%d/%m/%Y"}</p>
                        <p><span>Data de Término:</span> {$curso[s].data_termino|date_format:"%d/%m/%Y"}</p>
                    </div>
                    <div class="p_cursos_b1">
                        <p><span>Carga Horária:</span> {$curso[s].carga_horaria} horas</p>
                        <p><span>Horário:</span> {$curso[s].hora_inicio|date_format:"%H:%M"} às {$curso[s].hora_termino|date_format:"%H:%M"}</p>                    
                        <p><span>Programa:</span> {$curso[s].programa}</p>
                    </div>                    
                    <div class="p_cursos_b1">
                        <p><span>Valor:</span> {$curso[s].valor}</p>
                        <p><span>Ofertante:</span> {$curso[s].instituicao}</p>
                        <p><span>Vagas:</span> {$curso[s].vagas}</p>
                    </div> 
                    <div class="clear"></div>                   
                </div>
                <div class="p_cursos_b">
                <h1>Exigências</h1>
                    <p>Ter cursado o {$curso[s].escolaridade}</p>
                    <p>Ser maior de {$curso[s].idade} anos</p>
                </div>
                <div class="p_cursos_b">          
                    <h1>Documentação necessária</h1>
                    <p>Cópia do RG (Registro Geral);</p>
                    <p>Cópia do CPF (Certidão de Pessoa Física);</p>
                    <p>Cópia do Comprovante de Residência (Atualizado);</p>
                    <p>Cópia do Comprovante de Escolaridade</p>
                </div>
                <div align="center" class="p_cursos_b">
                    <h1>ATENÇÃO</h1>
                    <p style="font-size: 20px">Caro aluno, após a confirmação de sua candidatura à bolsa deste curso você terá prazo até dia {$amanha|date_format:"%d/%m/%Y"} às 16:00 horas para apresentar a documentação listada acima para fins de confirmação da pré-matrícula. A não apresentação acarretará no cancelamento de sua candidatura e a vaga será disponibilizada novamente no sistema.</p>
                </div>
                <div align="center">
                    <input type="button" name="" title="" value="Estou ciente" class="botao"/> <input type="button" name="" title="" value="Cancelar" onClick="voltar()" class="botao"/>
                </div>
            </div>
        {/section}
    </div>
</div>
            
