
<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset = "UTF-8">
<title> Cad cliente </title>

<style>

	body
	{ 
		zoom: 150%;
	}
	
	
	input[type="text"]
	{width: 280px; border: 1px solid #939393; padding: 5px;}
	
	table, th, tr, td 
	{
		width: 430px; font-family: tahoma; font-size: 13px;
		height: 30px; padding: 5px;
	}
	
	table caption
	{
		border: ; width: 405px; height: 30px;
		color: #fff; padding: 12px;
		font-size: 22px; font-family: tahoma;
		background: linear-gradient(#724AAA, #DBDBDB);
	}
	
	
</style>

<head>
<body>

<center>

<table WIDTH="100%" CELLPADDING="2" CELLSPACING="0" >
  <caption>
    Cadasto Clientes
  </caption>
      <tbody>
       <form method="post" action="formCadCliente_salvar.php" name="formu" id="formu">
        <tr>
          <td>Nome:</td>
          <td><input type="text" name="nome" id="nome"></td>
        </tr>
        <tr>
          <td>Endereço:</td>
          <td><input type="text" name="end" id="end"></td>
        </tr>
        <tr>
          <td>Bairro:</td>
          <td><input type="text" name="bairro" id="bairro"></td>
        </tr>
        <tr>
          <td>Complemento:</td>
          <td><input type="text" name="comp" id="comp" ></td>
        </tr>
        <tr>
          <td>Cidade:</td>
          <td><input type="text" name="cidade" id="cidade"></td>
        </tr>
        <tr>
          <td>Estado:</td>
          <td><input type="text" name="estado" id="estado"></td>
        </tr>
        <tr>
          <td>Cep:</td>
          <td><input type="text" name="cep" id="cep"></td>
        </tr>
        <tr>
          <td>Fone:</td>
          <td><input type="text" name="fone" id="fone"></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
          <td>Sexo:</td>
          <td><input type="text" name="sexo" id="sexo"></td>
        </tr>
        <tr>
          <td>Apelido:</td>
          <td><input type="text" name="apelido" id="apelido"></td>
        </tr>
        <tr>
          <td><input type="submit" name="enviar" id="enviar"></td>
          <td><input type="reset"  name="limpar" id="limpar"></td>
        </tr>
       </form> 
      </tbody>
</table>


<br>



</body>
</head>