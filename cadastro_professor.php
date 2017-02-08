<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title> CADASTRO </title>

	<style>
div
{ 	
	position: relative;
	top: 100px;
	width: 490px;
	height: 205px;
	
	/* border: 1px solid red; */
	box-shadow: 12px 14px 8px grey;
	
}




fieldset
{
	position: relative;
	
	width: 420px; font-family: tahoma; 
	font-size: 32px; color: #999;
	margin: 35px 0px; height: 220px;
	
	/* http://www.w3schools.com/css/css3_gradients.asp */
   background: -webkit-linear-gradient(#ccc, #fafafa, #666);/* For Safari 5.1 to 6.0 */
   background: -o-linear-gradient(#ccc, #fafafa, #666); 	/* For Opera 11.1 to 12.0 */
   background: -moz-linear-gradient(#ccc, #fafafa, #666); 	/* For Firefox 3.6 to 15 */
   background: linear-gradient(#ccc, #999, #666); 		/* Standard syntax */
  
   top:5px;

}


legend
{
	position: relative;
	float: left;
	margin: 0px 30px;
	font-family: tahoma;
	font-size: 33px;
	font-variant: 900;
	font-weight: 100;
	letter-spacing: 0.05em;

	
}


table, tr, td
{
	position: relative;
	width: 420px;
	height: 40px;
	font-size: 17px;
    /*text-shadow: 0.00em  2px #777; */	
	color: #000;
	margin: 10px 25px;
	left: 0px;
	text-align: left;
	padding: 5px 4px;
}



input[type="text"]
{
	position: relative;
	float: left;
	left: 0px;
	top: 0px;
	width: 210px;
	padding: 4px;
	font-size: 14px; 
}

input[type="password"]
{
	
	position: relative;
	float: left;
	left: -65px;
	width: 210px;
	padding: 4px;
	font-size: 14px; 
}

input[type="submit"]
{
	position: relative;
	width: 90px;
	margin: 0px 0px;
	left: 33px;
}

a
{ 
	position:relative; left: 50px;
	text-decoration: none; font-size: 12px; color: #ccc;
}
	</style>
</head>



<body>
	<center>
	

<div>
<form method="Post" Action="#">
	<fieldset style="width: 500px">
	<legend>  Cadastro Pofessor</legend>

		<table border="0">
			<tr>
				<td> Nome: </td>
				<td> <input type="text"> </td>
				<td> E-mail: </td>
				<td> <input type="text"> </td>
			</tr>
		
			<tr>
				<td> Fone: </td>
				<td> <input type="text"> </td>
				<td> RM: </td>
				<td> <input type="text"> </td>
			</tr>
		
			<tr>
				<td> Cidade: </td>
				<td> <input type="text"> </td>
				<td> Estado: </td>
				<td>
				  <select width="50" tabindex="60">
				  	<option>Rj </option>
				  	<option>MG </option>
				  	<option>SP </option>
				  </select>
				</td>
			</tr>
			</tr>
			  <td> <input type="submit" value="Cadastrar"> </td>
			  <td> <a href="cad_aluno_ou_prof.php"><input type="button" value="Voltar"></input></a> </td>
			</tr>
	
		</table>
		<br><br>
		
			
		<br><br>
			
		</fieldset>

</form>
</div>
	</body>
</html>