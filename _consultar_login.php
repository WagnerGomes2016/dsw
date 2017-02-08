<?php require 'inc/conexao.php'; ?>


<?php

  $login = isset($_POST["user"]) ? $_POST["user"] : "";
  $senha = isset($_POST["senha"]) ? $_POST["senha"] : "";
  
   $infoLogin = " * usuraio nao encotrado "; 
   $infoSenha = " * senha incorreta ";
  
  
  
  try 
   {
        $buscaUser = $pdo->prepare("SELECT login, senha FROM cad_aluno WHERE login=? AND senha=? ");

        $buscaUser->bindParam(1, $login, PDO::PARAM_STR);
        $buscaUser->bindParam(2, $senha, PDO::PARAM_STR);

        $buscaUser->execute();
        
 
      
       
            if(($buscaUser->rowCount() != 1))
            {
         
                echo 
                "
                    <script>
                    
                        window.onload = function()
                        {
                         var text = \" usuraio nao encotrado\";
                         //var loga = document.getElementById('login').innerHTML ;
                         alert(text);
                         location.href =\"login.php\" ;
                        }
                   
                    </script>
                ";
              
              // header("Location: login.php"); 
               
                
               
              // exit;
                
                      
            }
            
           

            
            else 
            {
                
                 header("Location: menu do sistema.php"); 
                
                
                /*
                while($linha = $buscaUser->fetch(PDO::FETCH_ASSOC))
                {

                    echo $linha['login'];
                    echo $linha['senha'];

                    echo "<br>";

                    echo $login;
                    echo $senha;
                         
                }
                 
                */
            }
        

         
   } 
   catch (Exception $ex) 
   {
      
   }
    
   
    
  
  
  //echo "senha <br> user";
  
  /*
  echo "<pre>";
  
  print_r($_POST);
  print_r($_FILES);
  
  echo"</pre>";
  
  
  ?>
    
   */