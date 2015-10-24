<style>
	body div, p, h1, h2 {
		border: none;
	}
	div.content {
		font-size: 13.5px;
		width: 100%;
		font-family: Arial, Helvetica, sans-serif;
		font-weight: bold;
	}
	div.content h6 {
		font-family:"Courier New", Courier, monospace;
		text-transform: uppercase;
		font-size: 12px;
		height: 18px;
		border-bottom: 1px solid #000; 
		margin: 0;
		float: left;
	}
	div.content p {
		margin: 3px 0 3px 0;
		padding-bottom: 0;
		padding-top: 0;
	}
	div.content span {
		font-family:"Courier New", Courier, monospace;
		text-transform: uppercase;
		font-size: 12px;
	}
	div.content div.pdf_logo1 {
		text-align: center;
	}
	div.content div.pdf_logo2 {
		text-align: center;
		width: 1.4cm;
		margin-left: -10px;
		margin-top: 10px;
		float: left;
	}
	div.content div.pdf_line0 {
		margin-top: 25px;
	}
		.content div.pdf_line0 h1 {
			font-size: 20px;
			text-align: center;
		}
	div.content div.pdf_line1 {
		margin-top: -10px;
		margin-bottom: 0;
	}
		.content div.pdf_line1 h2 {
			text-align: center;
			font-size: 15px;
		}
	div.content div.pdf_line2 {
		margin-bottom: 20px;
	}
	div.content div.pdf_line3 {
		margin-bottom: 10px 	;
	}
	
	div.content div.pdf_bloco {
		margin-top: 30px;
		margin-bottom: 30px;
	}
	div.content div.clear {
		clear: both;
	}
	div.content div.pdf_footer1 {
		font-size: 12px;
		float: left;
		margin: 20px 30px 0 15px;
		border-bottom: 3px solid #FC3;
	}
		div.content div.pdf_footer1 p {
			padding-left: 5px;
		}
	div.content div.pdf_footer2 {
		font-size: 10px;
		padding-left: 20px;
		float: left;
		margin: -25px 0 0 195px;
	}
		div.content div.pdf_footer2 p {
			margin: 1 0 1 0;
			text-align: left;
		}
</style>
<div class="content">
	{if $prog == 2}
        <div id="senac_psg">
        	
                <div class="pdf_logo1">
                    <img src="templates/img/logo_senac.png" width="2cm" />
                </div>
                <div class="pdf_line0">
                    <h1>FICHA DE CADASTRO</h1>
                </div>
                <div class="pdf_line1">
                    <h2>IMPORTANTE: É imprescindível o preenchimento de todos os campos abaixo.</h2>
                </div>
            {section name=s loop=$curso}                       
                <div class="pdf_line2">
                    <p style="float: left; width: 120px;">Curso Escolhido: </p>
                    <h6 style="width: 545px;">{$curso[s].nome}</h6>
                </div>
                <div class="pdf_line3">
                    <p>Horário: 
                    {if $curso[s].hora_inicio|date_format:"%H" < 12}(<span>X</span>)Manhã <b>  </b> (<span> </span>)Tarde <b>  </b> (<span> </span>)Noite</p>
                    {elseif ($curso[s].hora_inicio|date_format:"%H" >= 12) AND ($curso[s].hora_inicio|date_format:"%H" < 19)}(<span> </span>)Manhã <b>  </b> (<span>X</span>)Tarde <b>  </b> (<span> </span>)Noite</p>
                    {else}(<span> </span>)Manhã <b>  </b> (<span> </span>)Tarde <b>  </b> (<span>X</span>)Noite</p>
                    {/if}
                </div>
            {/section}
            {section name=s loop=$pdf}
                <div class="pdf_bloco"> 
                    <p style="float: left; width: 35px;">CPF: </p>
                    <h6 style="width: 300px;">{$pdf[s].cpf}</h6>
                    <p style="float: left; width: 50px; clear: both;">Nome: </p>
                    <h6 style="width: 615px;">{$pdf[s].nome}</h6>
                    <p style="float: left; width: 40px;">Mãe: </p>
                    <h6 style="width: 625px;">{$pdf[s].mae}</h6>
                    <p style="float: left; width: 180px;">Sexo: 
                    {if $pdf[s].sexo == 1}(<span> </span>)Masc <b>  </b> (<span>X</span>)Fem</p>
                    {elseif $pdf[s].sexo == 2} (<span>X</span>)Masc <b>  </b> (<span> </span>)Fem</p>
                    {/if}
                    <p style="float: left; width: 230px; margin-top: -0px;">Data Nascimento: <span style="border-bottom: 1px solid #000;">{$pdf[s].data_nasc|date_format:"%d/%m/%Y"}</span></p> 
                    <p style="float: right; width: 240px; margin-top: -0px;">Estado Civil:
                    {if $pdf[s].estado_civil == 2} (<span> </span>)Solteiro <b>  </b> (<span>X</span>)Casado</p>
                    {else} (<span>X</span>)Solteiro <b>  </b> (<span> </span>)Casado</p>
                    {/if}
                    <p style="float: left; width: 100px; margin-top: 1px;">Naturalidade: </p>
                    <h6 style="width: 455px; margin-top: -1px;">{$pdf[s].u_cidade}</h6>
                    <p style="float: left; width: 55px; margin-top: 1px; padding-left: 5px;">Estado: </p>
                    <h6 style="width: 50px; text-align: center; margin-top: -1px;">{$pdf[s].u_uf}</h6>        
                    <p style="margin-top: 4px; margin-bottom: 4px;">Cor / Raça: 
                    {if $pdf[s].raca == 1}(<span>X</span>)Amarela <b>  </b> (<span> </span>)Branca <b>  </b> (<span> </span>)Indígena <b>  </b> (<span> </span>)Negra <b>  </b> (<span> </span>)Parda</p>
                    {elseif $pdf[s].raca == 2}(<span> </span>)Amarela <b>  </b> (<span>X</span>)Branca <b>  </b> (<span> </span>)Indígena <b>  </b> (<span> </span>)Negra <b>  </b> (<span> </span>)Parda</p>
                    {elseif $pdf[s].raca == 3}(<span> </span>)Amarela <b>  </b> (<span> </span>)Branca <b>  </b> (<span>X</span>)Indígena <b>  </b> (<span> </span>)Negra <b>  </b> (<span> </span>)Parda</p>
                    {elseif $pdf[s].raca == 4}(<span> </span>)Amarela <b>  </b> (<span> </span>)Branca <b>  </b> (<span> </span>)Indígena <b>  </b> (<span>X</span>)Negra <b>  </b> (<span> </span>)Parda</p>
                    {elseif $pdf[s].raca == 5}(<span> </span>)Amarela <b>  </b> (<span> </span>)Branca <b>  </b> (<span> </span>)Indígena <b>  </b> (<span> </span>)Negra <b>  </b> (<span>X</span>)Parda</p>
                    {/if}
                    <p style="margin-top: 4px; margin-bottom: 4px;">Possui Deficiência: 
                    {if $pdf[s].deficiencia == 1}(<span>X</span>)Auditiva <b>  </b> (<span> </span>)Física/Motora <b>  </b> (<span> </span>)Mental <b>  </b> (<span> </span>)Múltiplas <b>  </b> (<span> </span>)Visual <b>  </b> (<span> </span>)Nenhuma</p>
                    {elseif $pdf[s].deficiencia == 2}(<span> </span>)Auditiva <b>  </b> (<span>X</span>)Física/Motora <b>  </b> (<span> </span>)Mental <b>  </b> (<span> </span>)Múltiplas <b>  </b> (<span> </span>)Visual <b>  </b> (<span> </span>)Nenhuma</p>
                    {elseif $pdf[s].deficiencia == 3}(<span> </span>)Auditiva <b>  </b> (<span> </span>)Física/Motora <b>  </b> (<span>X</span>)Mental <b>  </b> (<span> </span>)Múltiplas <b>  </b> (<span> </span>)Visual <b>  </b> (<span> </span>)Nenhuma</p>
                    {elseif $pdf[s].deficiencia == 4}(<span> </span>)Auditiva <b>  </b> (<span> </span>)Física/Motora <b>  </b> (<span> </span>)Mental <b>  </b> (<span>X</span>)Múltiplas <b>  </b> (<span> </span>)Visual <b>  </b> (<span> </span>)Nenhuma</p>
                    {elseif $pdf[s].deficiencia == 5}(<span> </span>)Auditiva <b>  </b> (<span> </span>)Física/Motora <b>  </b> (<span> </span>)Mental <b>  </b> (<span> </span>)Múltiplas <b>  </b> (<span>X</span>)Visual <b>  </b> (<span> </span>)Nenhuma</p>
                    {elseif $pdf[s].deficiencia == 6}(<span> </span>)Auditiva <b>  </b> (<span> </span>)Física/Motora <b>  </b> (<span> </span>)Mental <b>  </b> (<span> </span>)Múltiplas <b>  </b> (<span> </span>)Visual <b>  </b> (<span>X</span>)Nenhuma</p>
                    {/if}
                    <p style="margin-top: 4px; margin-bottom: 4px;">Cursou ou cursa Programa de Aprendizagem Comercial ou outro programa gratuito oferecido pelo Senac? 
                    {if $pdf[s].cursou_senac == 1}(<span>X</span>)Sim <b>  </b> (<span> </span>)Não</p>
                    {elseif $pdf[s].cursou_senac == 2}(<span> </span>)Sim <b>  </b> (<span>X</span>)Não</p>
                    {/if}
                    <p style="margin-top: 4px;">Faz ou já fez curso no Senac Minas? 
                    {if $pdf[s].cursou_senac == 1}(<span>X</span>)Sim <b>  </b> (<span> </span>)Não</p>
                    {elseif $pdf[s].cursou_senac == 2}(<span> </span>)Sim <b>  </b> (<span>X</span>)Não</p>
                    {/if}
                </div>
                <div class="pdf_bloco">
                    <p style="float: left; width: 75px;">Endereço: </p>
                    <h6 style="width: 485px;">{$pdf[s].endereco}</h6>
                    <p style="float: left; width: 30px; padding-left: 5px; margin-top: -0px;">Nº: </p>
                    <h6 style="width: 70px; text-align: center;">{$pdf[s].numero}</h6>
                    <p style="float: left; width: 105px;">Complemento: </p>
                    <h6 style="width: 100px;">{$pdf[s].complemento}</h6>
                    <p style="float: left; width: 50px; padding-left: 5px; margin-top: -0px;">Bairro: </p>
                    <h6 style="width: 300px;">{$pdf[s].bairro}</h6>
                    <p style="float: left; width: 35px; padding-left: 5px; margin-top: -0px;">CEP: </p>
                    <h6 style="width: 65px;">{$pdf[s].cep}</h6>
                    <p style="float: left; width: 55px;">Cidade: </p>
                    <h6 style="width: 250px;">{$pdf[s].c_cidade}</h6>
                    <p style="float: left; width: 145px; padding-left: 5px; margin-top: -0px;">Ponto de referência: </p>
                    <h6 style="width: 210px;">{$pdf[s].referencia}</h6>
                    <p style="float: left; width: 120px;">Fone residencial: </p>
                    <h6 style="width: 210px;">{$pdf[s].telefone1|phone_format}</h6>
                    <p style="float: left; width: 110px; padding-left: 5px; margin-top: -0px;">Fone comercial: </p>
                    <h6 style="width: 220px;"> </h6>
                    <p style="float: left; width: 55px;">Celular: </p>
                    <h6 style="width: 275px;">{$pdf[s].telefone2|phone_format}</h6>
                    <p style="float: left; width: 55px; padding-left: 5px; margin-top: -0px;">Outros: </p>
                    <h6 style="width: 275px;">{$pdf[s].telefone3|phone_format}</h6>
                    <p style="float: left; width: 50px;">E-mail: </p>
                    <h6 style="width: 615px;">{$pdf[s].email}</h6>
                    <p style="float: left; width: 210px;">Documento de Identidade: Nº </p>
                    <h6 style="width: 300px;">{$pdf[s].rg_numero}</h6>
                    <p style="float: left; width: 110px; padding-left: 5px; margin-top: -0px;">Órgão emissor: </p>
                    <h6 style="width: 40px; text-align: center;">{$pdf[s].rg_orgao}</h6>
                    <p style="float: left; width: 120px;">Data de Emissão: </p>
                    <h6 style="width: 285px; border: none;"><span style="border-bottom: 1px solid #000;">{$pdf[s].rg_emissao|date_format:"%d/%m/%Y"}</span></h6>
                    <p style="float: left; width: 120px; padding-left: 5px; margin-top: -0px;">UF de Expedição: </p>
                    <h6 style="width: 40px; text-align: center;">{$pdf[s].rg_uf}</h6>
                    <p style="float: left; width: 140px;">Título de Eleitor: Nº </p>
                    <h6 style="width: 240px;">{$pdf[s].titulo_numero}</h6>
                    <p style="float: left; width: 95px; padding-left: 5px; margin-top: -0px;">Zona / Seção: </p>
                    <h6 style="width: 185px;">{$pdf[s].titulo_zona} / {$pdf[s].titulo_sessao}</h6>
                    <p style="float: left; width: 225px;">UF e Cidade do Título de Eleitor: </p>
                    <h6 style="width: 440px;">{$pdf[s].d_cidade} - {$pdf[s].titulo_uf}</h6>
                    <p style="float: left; width: 160px;">Data da última eleição: </p>
                    <h6 style="width: 150px; border: none;"><span style="border-bottom: 1px solid #000;"> </span></h6>
                    <p style="float: left; width: 180px; padding-left: 5px; margin-top: -0px;">Certificado de Reservista: </p>
                    <h6 style="width: 170px;">{$pdf[s].reservista}</h6>
                    <p style="float: left; width: 95px;">Escolaridade: </p>
                    <h6 style="width: 375px;">{$pdf[s].escolaridade}</h6>
                    <p style="width: 190px; float: left; padding-left: 5px; margin-top: -0px;">(<span> </span>)Completo <b>  </b> (<span>X</span>)Incompleto</p>        
                    <p style="float: left; width: 410px;">Você estudou mais tempo em escola Pública ou Particular? </p>
                    <h6 style="width: 255px;">
                        {if $pdf[s].escola == 1}Pública
                        {elseif $pdf[s].escola == 2}Particular
                        {/if}
                    </h6>     
                </div><br />
                <div class="pdf_logo2">
                    <img src="templates/img/iso_senac.jpg" width="1.4cm" />
                </div>
                <div class="pdf_footer1">
                    <p>Serviço Nacional de Aprendizagem Comercial</p>
                </div>
                <div class="pdf_footer2">
                    <p>Superintendência Comercial Senac Minas - Regional Triângulo</p>
                    <p>SENAC Uberaba</p>
                    <p style="font-weight: normal;">Tel.: (34) 3334-3400</p>
                    <p style="font-weight: normal;">www.mg.senac.br</p>
                </div>
                <div class="pdf_logo1">
                    <img src="templates/img/logo_senac.png" width="2cm" />
                </div>
            {/section}
            {section name=s loop=$extra}
                <div class="pdf_bloco">
                	<p style="float: left; width: 70px; clear: both;">Profissão: </p>
                    <h6 style="width: 595px;">{$extra[s].profissao}</h6>
                    <p style="float: left; width: 660px;">Situação de trabalho atual: 
                    {if $extra[s].trabalho == 1}(<span>X</span>)Desempregado <b>  </b> (<span> </span>)Empregado <b>  </b> (<span> </span>)Candidato ao primeiro emprego</p>
                    {elseif $extra[s].trabalho == 2}(<span> </span>)Desempregado <b>  </b> (<span>X</span>)Empregado <b>  </b> (<span> </span>)Candidato ao primeiro emprego</p>
                    {elseif $extra[s].trabalho == 3}(<span> </span>)Desempregado <b>  </b> (<span> </span>)Empregado <b>  </b> (<span>X</span>)Candidato ao primeiro emprego</p>
                    {/if}
                    <p style="float: left; width: 660px;">Você é o (a) principal responsável (arrimo) pelo domicílio onde mora? 
                    {if $extra[s].arrimo == 1}(<span>X</span>)Sim <b>  </b> (<span> </span>)Não</p>
                    {elseif $extra[s].arrimo == 2}(<span> </span>)Sim <b>  </b> (<span>X</span>)Não</p>
                    {/if}
                    <p style="float: left; width: 170px; clear: both;">Renda bruta pessoal: R$ </p>
                    <h6 style="width: 250px;">{$extra[s].renda|number_format:2:",":"."}</h6>
                    <p style="width: 190px; float: left; padding-left: 5px; margin-top: -0px;"> (Ex.: R$ 788,00)</p>
                </div>
                <div class="pdf_bloco">
                	<p>Pessoas que residem com o candidato à bolsa:</p>
                </div>
                <div class="pdf_bloco">
                	<p style="float: left; width: 60px; clear: both;">Nome 1: </p>
                    <h6 style="width: 400px;">{$extra[s].p_nome1}</h6>
                    <p style="width: 130px; float: left; padding-left: 5px; margin-top: -0px;"> Renda mensal: R$ </p>
                    <h6 style="width: 70px;">{$extra[s].p_renda1|number_format:2:",":"."}</h6>
                    <p style="float: left; width: 85px; clear: both;">Parentesco: </p>
                    <h6 style="width: 300px;">{$extra[s].p_parentesco1}</h6>
                    <p style="width: 75px; float: left; padding-left: 5px; margin-top: -0px;"> Profissão: </p>
                    <h6 style="width: 200px;">{$extra[s].p_profissao1}</h6>
                </div>
                <div class="pdf_bloco">
                	<p style="float: left; width: 60px; clear: both;">Nome 2: </p>
                    <h6 style="width: 400px;">{$extra[s].p_nome2}</h6>
                    <p style="width: 130px; float: left; padding-left: 5px; margin-top: -0px;"> Renda mensal: R$ </p>
                    <h6 style="width: 70px;">{$extra[s].p_renda2|number_format:2:",":"."}</h6>
                    <p style="float: left; width: 85px; clear: both;">Parentesco: </p>
                    <h6 style="width: 300px;">{$extra[s].p_parentesco2}</h6>
                    <p style="width: 75px; float: left; padding-left: 5px; margin-top: -0px;"> Profissão: </p>
                    <h6 style="width: 200px;">{$extra[s].p_profissao2}</h6>
                </div>
                <div class="pdf_bloco">
                	<p style="float: left; width: 60px; clear: both;">Nome 3: </p>
                    <h6 style="width: 400px;">{$extra[s].p_nome3}</h6>
                    <p style="width: 130px; float: left; padding-left: 5px; margin-top: -0px;"> Renda mensal: R$ </p>
                    <h6 style="width: 70px;">{$extra[s].p_renda3|number_format:2:",":"."}</h6>
                    <p style="float: left; width: 85px; clear: both;">Parentesco: </p>
                    <h6 style="width: 300px;">{$extra[s].p_parentesco3}</h6>
                    <p style="width: 75px; float: left; padding-left: 5px; margin-top: -0px;"> Profissão: </p>
                    <h6 style="width: 200px;">{$extra[s].p_profissao3}</h6>
                </div>
                <div class="pdf_bloco">
                	<p style="float: left; width: 60px; clear: both;">Nome 4: </p>
                    <h6 style="width: 400px;">{$extra[s].p_nome4}</h6>
                    <p style="width: 130px; float: left; padding-left: 5px; margin-top: -0px;"> Renda mensal: R$ </p>
                    <h6 style="width: 70px;">{$extra[s].p_renda4|number_format:2:",":"."}</h6>
                    <p style="float: left; width: 85px; clear: both;">Parentesco: </p>
                    <h6 style="width: 300px;">{$extra[s].p_parentesco4}</h6>
                    <p style="width: 75px; float: left; padding-left: 5px; margin-top: -0px;"> Profissão: </p>
                    <h6 style="width: 200px;">{$extra[s].p_profissao4}</h6>
                </div>
                <div class="pdf_bloco">
                	<br />
                	<p>Declaro que as informações ora prestadas correspondem exatamente à situação de fato, podendo ser consideradas verdadeiras para todos os efeitos legais cabíveis.</p>
                    <br /><br />
                </div>
                <div class="pdf_bloco">
                	<p style="text-align: center;">Sacramento, {$smarty.now|date_format: "%d de %B de %Y"}.</p>
                </div>
                <div class="pdf_bloco">
                	<p style="text-align: center;">_________________________________________________________________________________</p>
                    <p style="text-align: center;">Assinatura</p>
                </div>
                <br /><br /><br />
                <div class="pdf_logo2">
                    <img src="templates/img/iso_senac.jpg" width="1.4cm" />
                </div>
                <div class="pdf_footer1">
                    <p>Serviço Nacional de Aprendizagem Comercial</p>
                </div>
                <div class="pdf_footer2">
                    <p>Superintendência Comercial Senac Minas - Regional Triângulo</p>
                    <p>SENAC Uberaba</p>
                    <p style="font-weight: normal;">Tel.: (34) 3334-3400</p>
                    <p style="font-weight: normal;">www.mg.senac.br</p>
                </div>
            {/section}
        </div>
    {elseif $prog == 1}
        <div id="senac_pronatec">
        senac - psg
        </div>
    {elseif $prog == 3}
        <div id="senai_pronatec">
        senai - pronatec
        </div>
    {/if}
</div>