<?php 
    namespace VIEW\Equipamento;
    include_once 'C:\xampp\htdocs\lpadsphpt1\lpadsphpt120240606\MODEL\Inventario.php'; 
    include_once 'C:\xampp\htdocs\lpadsphpt1\lpadsphpt120240606\BLL\Inventario.php'; 

    $inventario = new \MODEL\Inventario();

    $inventario->setSoftware($_POST['txtSft']);
    $inventario->setEquipamento($_POST['txtEqpto']);
    $inventario->setInstalacao($_POST['txtInst']);

    $bllInv = new \BLL\Inventario(); 
    $result =  $bllInv->Insert($inventario);  

    header("location: lstInventario.php");

  

?>