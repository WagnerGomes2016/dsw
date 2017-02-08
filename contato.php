<html>
<head>
	<style>
	  div#cont {	
			position: absolute;
			left: 50px;
			letter-spacing:px;
			
			line-height: 150%;
	}
	fieldset {
			width: 450px;
			height: 300px;
	}
	
	
	input[type=text]{     
		border-radius:4px;
		-moz-border-radius:4px;
		-webkit-border-radius:4px;
		margin-top: px;
 
		width:250px
	}
	input[type=submit] { 
			
	 background-color: #1E1E1E;
    	color: #979797;
    	height: 24px;
    	width: 103px;
    	color: #bbbbbb;
    	text-transform:uppercase;
    	box-shadow:-1px 2px #6E6B6A inset;
			
	}	
	p {
		text-indent:  cm;
		word-spacing: px;
	}
	
	</style>

	<title> </title>
</head>
<body>
<div id="cont">
	
	
   <fieldset>
	<legend>Contato</legend>
   <table width="280px">	
	<form method="get" action="pag1.recebe.php">
	
	<tr>
		<td>Nome:</td> 	
		<td><input type="text" name="nome" /></td>
	</tr>
		<td>Sexo:</td>
		<td><label> <input type="radio" name="sex" value="male" checked>Masculino</label>  <label><input type="radio" name="sex" value="female">Feminino</label></td>	
	</tr>
		
        	<tr>
		<td>Endereço:</td>
		<td><input type="text" name="end"/></td>
	</tr>
	
	<tr>	
             	<td>Email:</td>   
		<td><input type="text" name="email"/></td>
	</tr>
	
	<tr>	
	   	<td>Telefone:	</td>
		<td><input type="text" name="tel" placeholder="(00) 0000-0000"/></td>
	</tr>
	
	<tr>
		<td>Menesagem:</td>
		<td><textarea name="men" rows="6 " cols="28" ></textarea></td>
	</tr>
	
	</form>		
    </table>	
		</fieldset>
		<p><input type="submit" value="Enviar"/>&nbsp &nbsp &nbsp <input type="reset" value="Limpar" /></p>

	</br>	
</div>
	
	
</body>
</html>