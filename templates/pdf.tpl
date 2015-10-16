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
	div.content span {
		font-family:"Courier New", Courier, monospace;
		text-decoration: underline;
	}
	div.content p {
		margin: 6 0 6 0;
	}
	div.content div.pdf_logo1 {
		text-align: center;
	}
	div.content div.pdf_logo2 {
		text-align: center;
		width: 1.5cm;
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
	
	div.content div.pdf_bloco1 {
		background: #F00;
		float: left;
		margin-bottom: 30px;
	}
	div.content div.clear {
		clear: both;
	}
	div.content div.pdf_footer1 {
		font-size: 13px;
		float: left;
		margin: 15px 0 0 15px;
	}
		div.content div.pdf_footer1 p {
		}
	div.content div.pdf_footer2 {
		font-size: 11px;
		padding-left: 20px;
		float: left;
		margin: -25px 0 0 205px;
	}
		div.content div.pdf_footer2 p {
			margin: 1 0 1 0;
			text-align: left;
		}
</style>
<div class="content">   
    <div class="pdf_logo1">
        <img src="templates/img/logo_senac.png" width="2cm" height="1.7cm" />
    </div>
    <div class="pdf_line0">
        <h1>FICHA DE CADASTRO</h1>
    </div>
    <div class="pdf_line1">
        <h2>IMPORTANTE: É imprescindível o preenchimento de todos os campos abaixo.</h2>
    </div>                        
    <div class="pdf_line2">
        <p>Curso Escolhido: <span>{$teste}</span></p>
    </div>
    <div class="pdf_line3">
        <p>Horário: (<span>X</span>)Manhã <b>  </b> (<span> </span>)Tarde <b>  </b> (<span> </span>)Noite</p>
    </div>
    <div class="pdf_bloco1"> 
        <p>CPF: <span>09478753606</span></p>
        <p>Nome: <span>Dérik Gomide Padua</span></p>
        <p>Mãe: <span>Alcione Alves Gomide de Padua</span></p>
        <p style="float: left; background-color: #093;  width: 180px;">Sexo: (<span>X</span>)Masc <b>  </b> (<span> </span>)Fem</p>
        <p style="float: left; width: 230px; background-color: #098; margin-top: -0px;">Data Nascimento: <span>21/09/1989</span></p> 
        <p style="float: right; width: 240px; background-color: #098; margin-top: -0px;">Estado Civil: (<span>X</span>)Solteiro <b>  </b> (<span> </span>)Casado</p>
        <p style="float: left; width: 13cm; background-color: #093; margin-top: -0px;">Naturalidade: <span>Sacramento</span></p>
        <p style="float: right; width: 3cm; background-color: #098; margin-top: -0px;">Estado: <span>MG</span></p>
        <div class="clear"></div>
        <p>Cor / Raça: (<span> </span>)Amarela <b>  </b> (<span>X</span>)Branca <b>  </b> (<span> </span>)Indígena <b>  </b> (<span> </span>)Negra <b>  </b> (<span> </span>)Parda</p>
        <p>Possui Deficiência: (<span> </span>)Auditiva <b>  </b> (<span> </span>)Física/Motora <b>  </b> (<span> </span>)Mental <b>  </b> (<span> </span>)Múltiplas <b>  </b> (<span> </span>)Visual <b>  </b> (<span>X</span>)Nenhuma</p>
        <p>Cursou ou cursa Programa de Aprendizagem Comercial ou outro programa gratuito oferecido pelo Senac? (<span> </span>)Sim <b>  </b> (<span> </span>)Não</p>
        <p>Faz ou já fez curso no Senac Minas? (<span> </span>)Sim <b>  </b> (<span> </span>)Não</p>
    </div>
    <div class="pdf_bloco1">
    	<p style="float: left; width: 540px; background-color: #093; margin-top: -0px;">Endereço: <span>Rua Vereador Jose Torquato</span></p>
        <p style="float: right; width: 120px; background-color: #098; margin-top: -0px;">Nº: <span>53</span></p>
        <p style="float: left; width: 210px; background-color: #093; margin-top: -0px;">Complemento: <span>   </span></p>
        <p style="float: left; width: 330px; background-color: #098; margin-top: -0px;">Bairro: <span>Euripedes Barsanulfo</span></p>
        <p style="float: right; width: 115px; background-color: #093; margin-top: -0px;">CEP: <span>38190000</span></p>
        <p style="float: left; width: 370px; background-color: #098; margin-top: -0px;">Cidade: <span>Sacramento</span></p>
        <p style="float: right; width: 290px; background-color: #093; margin-top: -0px;">Ponto de referência: <span>    </span></p>
        <p style="float: left; width: 330px; background-color: #098; margin-top: -0px;">Fone residencial: <span>34 3351-2472</span></p>
        <p style="float: right; width: 330px; background-color: #093; margin-top: -0px;">Fone comercial: <span>34 3351-4695</span></p>
        <p style="float: left; width: 330px; background-color: #098; margin-top: -0px;">Celular: <span>34 9164-1120</span></p>
        <p style="float: right; width: 330px; background-color: #093; margin-top: -0px;">Outros: <span>    </span></p>
        <p style="float: left; width: 660px; background-color: #098; margin-top: -0px;">E-mail: <span>tiger.dgp@hotmail.com</span></p>
        <p style="float: left; width: 420px; background-color: #098; margin-top: -0px;">Documento de Identidade: Nº <span>16172746</span></p>
        <p style="float: right; width: 240px; background-color: #093; margin-top: -0px;">Órgão emissor: <span>PC</span></p>
        <p style="float: left; width: 330px; background-color: #098; margin-top: -0px;">Data de Emissão: <span>01/01/2010</span></p>
        <p style="float: right; width: 330px; background-color: #093; margin-top: -0px;">UF de Expedição: <span>MG</span></p>
        <p style="float: left; width: 370px; background-color: #098; margin-top: -0px;">Título de Eleitor: Nº <span>123456789123</span></p>
        <p style="float: right; width: 290px; background-color: #093; margin-top: -0px;">Zona / Seção: <span>    </span></p>
        <p style="float: left; width: 660px; background-color: #098; margin-top: -0px;">UF e Cidade do Título de Eleitor: <span>Sacramento - MG</span></p>
        <p style="float: left; width: 330px; background-color: #098; margin-top: -0px;">Data da última eleição: <span>18/08/2000</span></p>
        <p style="float: right; width: 330px; background-color: #093; margin-top: -0px;">Certificado de Reservista: <span>12645823123356</span></p>
        <p style="float: left; width: 460px; background-color: #098; margin-top: -0px;">Escolaridade: <span>Ensino Superior</span></p>
        <p style="float: right; width: 200px; background-color: #093; margin-top: -0px;">(<span> </span>)Completo <b>  </b> (<span>X</span>)Incompleto</p>
        <p style="float: left; width: 660px; background-color: #098; margin-top: -0px;">Você estudou mais tempo em escola Pública ou Particular? <span>Pública</span></p>        
    </div>
    <div class="pdf_logo2" style="background-color: #909;">
        <img src="templates/img/logo_senac.png" width="1.4cm" height="2cm" />
    </div>
    <div class="pdf_footer1">
    	<p>Serviço Nacional de Aprendizagem Comercial</p>
    </div>
    <div class="pdf_footer2">
    	<p>Superintendência Comercial Senac Minas - Regional Triângulo</p>
        <p>SENAC Uberaba</p>
        <p>Tel.: (34) 3334-3400</p>
        <p>www.mg.senac.br</p>
    </div>
</div>