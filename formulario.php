 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
<title>Forms</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="css/cadastro.css.css" />

<!-- Omitidas outras meta tags --> 


<style type="text/css" media="all">
	table { bakground: -moz- gradiente-linear(#111, #ccc)}
</style>
</head>
<body>

	<table border="1" width="500">
		<form action=""> 

			<fieldset>
				<legend>Cadastro Geral</legend>
				<fieldset id="dp1">
					<legend>Dados pessoais</legend>
					<label for="nome">Nome completo:</label>
					<input name="text" type="text" id="nome" />
				
					
					<label for="prof">Profissão:</label>
					<select id="prof">
						<option selected="selected">Sua profissão</option>
						<optgroup label="Engenharia">
							<option>Civil</option>
							<option>Elétrica</option>
							<option>Eletrônica</option>
						</optgroup>
						
						<optgroup label="Médicas">
							<option>Clínico geral</option>
							<option>Ortopedista</option>
							<option>Cardiologista</option>
						</optgroup>
					</select>
					
					<br>
				
				<label for="fone"> Fone: </lable>
				<input type="text" name="fone" id="fone" />

					
				</fieldset>

				<br>
				
				<fieldset id="dp2">
				<legend>Localização</legend>
					<label for="email">E-mail:</label>
					<input type="text" id="email" />	
					<label for="rua">Rua:</label>
					<input type="text" id="rua" />
				</fieldset>
				
				
				
			<p><input type="submit" value="Enviar" id="enviar" />
			<input type="reset" value="Limpar" id="limpar" /></p>
		</form>
	</table>
</body>
</html>
