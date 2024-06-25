<?php 
    namespace VIEW\Equipamento;
    include_once 'C:\xampp\htdocs\lpadsphpt1\lpadsphpt120240606\BLL\Equipamento.php'; 

    $id = $_GET['id']; 

    $bllEqpto = new \BLL\Equipamento(); 
    $result =  $bllEqpto->Delete($id);  
    
    header("location: lstEquipamento.php");
?>