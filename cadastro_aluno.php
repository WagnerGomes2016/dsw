<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title> CADASTRO </title>

	<link rel="stylesheet" href="css/cadastro_aluno.css" />


</head>


<body style="background: #999">
	

<div>
    <form name="cadastro_aluno" method="post" action="_gravar_cadastro_aluno.php">
	<fieldset >
	<legend>  Cadastro Aluno</legend>

		<table border="0">
                    
                    <tr>
                        <td> Login: </td>
                        <td> <input type="text" name="login"> </td>
                        <td> Senha: </td>
                        <td> <input type="password" name="senha"> </td>
                    </tr>
                    
                    <tr>
                  
                        <td> Nome: </td>
                        <td> <input type="text" name="nome"> </td>
                        <td> E-mail: </td>
                        <td> <input type="text" name="email"> </td>
                    </tr>

                    <tr>
                            <td> Fone: </td>
                            <td> <input type="text" name="fone"> </td>
                            <td> RM: </td>
                            <td> <input type="text" name="rm"> </td>
                    </tr>

                    <tr>
                            <td> Cidade: </td>
                            <td> <input type="text" name="cidade"> </td>
                            <td> Estado: </td>
                            <td>
                              <select tabindex="60" name="estado">
                                    <option selected >UF </option>
                                    <option>SP </option>
                                    <option>Rj </option>
                                    <option>MG </option>
                                    <option>SP </option>
                              </select>
                            </td>
                    </tr>
                    </tr>
                      <td> <input type="submit" value="Cadastrar"> </td>
                      <td> <input type="button" value="Pesquisar"> </td>
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