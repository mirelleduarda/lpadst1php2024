<?php
namespace BLL;
include_once 'C:\xampp\htdocs\lpadsphpt1\lpadsphpt120240606\DAL\Inventario.php';
include_once 'C:\xampp\htdocs\lpadsphpt1\lpadsphpt120240606\BLL\Equipamento.php';
include_once 'C:\xampp\htdocs\lpadsphpt1\lpadsphpt120240606\MODEL\Equipamento.php';

use DAL;

class Inventario
{
    public function Select()
    {   
        $dalInv = new \DAL\Inventario();   
        return $dalInv->Select();
    }

    public function SelectByID(int $id)
    {   
        $dalInv = new \DAL\Inventario();   
        return $dalInv->SelectByID($id);
    }

    public function Insert(\MODEL\Inventario $inv) {
        $dalInv = new \DAL\Inventario();   

        $bllEqpto = new \BLL\Equipamento();

        //Regra de negócio para somar um no campo quantidade da tabela equipamento
        //com base no equipamento que foi informado no campo de inventário
        $equipamento = $bllEqpto->SelectByID($inv->getEquipamento()); //recupera o queipamento

        //soma 1 no valor do campo quantidade
        $quantidade = $equipamento->getQuantidade();
        $quantidade++; //$quantidade = $quantidade + $inv->getValorQuantidade();
        $equipamento->setQuantidade($quantidade);

        $bllEqpto->Updade($equipamento); // atualiza no banco de dados o registro de equipamento
        
        return $dalInv->Insert($inv); //salva o registro de inventário
    }
}
?>