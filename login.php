<?php require"inc/conexao.php" ?>
<?php //require_once"_consultar_login.php" ?>

<?php
    //$infoLogin = isset($_POST[''])? $_POST[''] : "";
    //$infoSenha = isset($_POST[''])? $_POST[''] : "";
    
    ////$infL = isset($_POST["$infoLogin"])? $_POST["$infoLogin"] : ""; 
    ///$infoS = isset($_POST["$infoSenha"]) ? $_POST["$infoSenha"] : "";

     $infoLogin = " * usuraio nao encotrado "; 
     $infoSenha = " * senha incorreta ";
    
?>
            


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta charset="${project.encoding}" >

    <title> menu do sitema</title>

    <link rel="stylesheet" href="css/login.css.css" >
    <script type="text/javascript" src="js/login_senha.js"></script>

    <style>
        
        header {position: absolute;}
        
       li#login
       {
           position: relative;
           margin: 0px;
           padding: 0px;

           top: -20px;
           left: -150px;
           font-size: 14px;

           color: rgba(255,0,0, 0.5);
           font-weight: 100;
           
           background: #ccc;
           
       }
        li#senha 
        {
            position: relative;
            margin: 0px;
            padding: 0px;

            top: 0px;
            left: -300px;
            font-size: 14px;

            color: rgba(255,0,0, 0.5);
            font-weight: 100;
            
            background: #ccc;
            
        }
    </style>

</head>

<body>
	<center>

<header>

    <img id="logo" src="img/login/logo.png">


    <form  name ="cadastro"  method="post" action="_consultar_login.php">	
      <fieldset>


        <ul>
          <li class="clique"> Esqueceu sua senha ?	 <a href="#" class="clique"> Clique aqui </a></li>
          <li class="cad"> <a href="cad_aluno_ou_prof.php" class="cad"> <input type="button" name="cadastrar" value="Cadastra-se"> </input> </a> </li>
           
          <li id="info">                          </li>
          <li id="login"> <?php //echo $infoLogin ?> </li>
          <li id="senha"> <?php //echo $infoSenha ?> </li>
          
          
          <li>	<input type="text" name="user" id="user" placeholder="login"></input> </li>
          <li>	<input type="password" name="senha" id="senha" placeholder="senha"></input> </li>


          <li> 	<input type="submit" name="submit" value="Entrar"></input>  </li> 

        </ul>

      </fieldset>
    </form>
</header>

</body>
</html>