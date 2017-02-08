
<?php
    
   
    try 
    {
      $pdo = new PDO("mysql:host=localhost; dbname=etec", "root", "");
      //echo "<html><body>Conexao bem sucedida</body></html>";
    }
    catch (PDOException $erro) 
    {
        echo $erro->getMessage();
    }
    
       
?>
