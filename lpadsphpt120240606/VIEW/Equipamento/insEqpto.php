<?php 
    namespace VIEW\Equipamento;
    include_once 'C:\xampp\htdocs\lpadsphpt1\lpadsphpt120240606\MODEL\Equipamento.php'; 
    include_once 'C:\xampp\htdocs\lpadsphpt1\lpadsphpt120240606\BLL\Equipamento.php'; 

    $equipamento = new \MODEL\Equipamento();

    $equipamento->setDescricao($_POST['txtDesc']);
    $equipamento->setResponsavel($_POST['txtResp']);
    $equipamento->setDepartamento($_POST['slcDep']);
    $equipamento->setCompra($_POST['txtCompra']);

    $bllEqpto = new \BLL\Equipamento(); 
    $result =  $bllEqpto->Insert($equipamento);  

    if ($result->errorCode() == '00000') {
        header("location: lstEquipamento.php");
      }
      else echo $result->errorInfo();
  

?>