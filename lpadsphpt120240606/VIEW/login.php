<?php 
    include_once 'C:\xampp\htdocs\lpadsphpt1\lpadsphpt120240606\DAL\conexao.php'; 

    $usuario = $_POST['usuario']; 
    $senha = $_POST['senha'];

    echo "Usuario: " . $usuario . "</br></br>"; 
    echo "Senha: " . $senha . "  -  ".  md5("fema@2024") . " <br/><br/>";
    echo "Senha: " . $senha . "  -  ".  sha1("fema@2024") . " <br/><br/>";

    $sql = "Select * from usuario where usuario=?;";
    $con = \dal\Conexao::conectar(); 
    $query = $con->prepare($sql);

    try{
       $query->execute (array($usuario));
       $linha = $query->fetch(\PDO::FETCH_ASSOC);
    }
    catch (Exception $e) { echo "usuario inexistente"; }

    \dal\Conexao::desconectar(); 

   if ($linha!= null){
      echo "Usuario: " . $linha['usuario'] . "</br></br>"; 
      echo "Senha: " . $linha['fema@2024'] . " <br/><br/>";
   }

  if (md5($senha) == $linha['senha']){
       session_start();
       $_SESSION['login'] = $usuario ;
       //$_SESSION['nivel'] = $linha['nivel']; 
       header("location:menu.php"); 
    }
    else header("location:index.php"); 

    ?>