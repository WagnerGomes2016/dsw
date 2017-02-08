<?php require 'inc/conexao.php'; ?>


<?php

  $login  = isset($_POST["login"]) ? $_POST[""] : "";
  $senha  = isset($_POST["senha"]) ? $_POST["senha"] : "";
  $nome   = isset($_POST["nome"]) ? $_POST["nome"] : "";
  $email  = isset($_POST["mail"]) ? $_POST["email"] : "";
  $fone	  = isset($_POST["fone"]) ? $_POST["fone"] : "";
  $cidade = isset($_POST["cidade"]) ? $_POST["cidade"] : "";
  $estado = isset($_POST["estado"]) ? $_POST["estado"] : "";
  $rm 	  = isset($_POST["rm"]) ? $_POST["rm"] : "";
  
  
  $sql = $pdo->prepare(
        "INSERT INTO cad_aluno(login, senha, nome, email, fone, cidade, estado, rm)
        VALUES(?,?,?,?,?,?,?,?)"
    );


  $sql->bindParam(1, $login, PDO::PARAM_STR);
  $sql->bindParam(2, $senha, PDO::PARAM_STR);
  $sql->bindParam(3, $nome, PDO::PARAM_STR);
  $sql->bindParam(4, $email, PDO::PARAM_STR);
  $sql->bindParam(5, $fone, PDO::PARAM_STR);
  $sql->bindParam(6, $cidade, PDO::PARAM_STR);
  $sql->bindParam(7, $estado, PDO::PARAM_STR);
  $sql->bindParam(8, $rm, PDO::PARAM_INT);
  
  $sql->execute();
  
  if($sql == true)
  {
     echo "dados inseridos com sucesso" ;
  }
  
 else
 {
     echo " erro na grvação";
 }
  
  
  
  
  //echo "senha <br> user";
  
  
  echo "<pre>";
  
  print_r($_POST);
  print_r($_FILES);
  
  echo"</pre>";
  
  
  ?>