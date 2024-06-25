<?php 
  namespace VIEW\Equipamento;
  include_once 'C:\xampp\htdocs\lpadsphpt1\lpadsphpt120240606\MODEL\Equipamento.php'; 
  include_once 'C:\xampp\htdocs\lpadsphpt1\lpadsphpt120240606\BLL\Equipamento.php'; 

  $equipamento = new \MODEL\Equipamento();

  $equipamento->setId($_POST['txtID']);
  $equipamento->setDescricao($_POST['txtDesc']);
  $equipamento->setResponsavel($_POST['txtResp']);
  $equipamento->setDepartamento($_POST['txtDep']);
  $equipamento->setCompra($_POST['txtCompra']);

  $bllEqpto = new \BLL\Equipamento(); 
  $result =  $bllEqpto->Update($equipamento);  


  header("location: lstEquipamento.php");

?>