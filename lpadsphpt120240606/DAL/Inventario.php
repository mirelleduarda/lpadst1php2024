<?php
namespace DAL;

include_once 'C:\xampp\htdocs\lpadsphpt1\lpadsphpt120240606\DAL\conexao.php';
include_once 'C:\xampp\htdocs\lpadsphpt1\lpadsphpt120240606\MODEL\Inventario.php';

class Inventario
{
    public function Select()
    {

        $sql = "Select * from inventario;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($registros as $linha) {
            $inv = new \MODEL\Inventario();
            $inv->setId($linha['id']);
            $inv->setSoftware($linha['software']);
            $inv->setEquipamento($linha['equipamento']);
            $inv->setInstalacao($linha['instalacao']);
            $lstInv[] = $inv;
        }
        return $lstInv;

    }


    public function SelectByID(int $id)
    {
        //recuperar do banco de dados
        $sql = "Select * from inventario where id=?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $inv = new \MODEL\Inventario();
        $inv->setId($linha['id']);
        $inv->setSoftware($linha['software']);
        $inv->setEquipamento($linha['equipamento']);
        $inv->setInstalacao($linha['instalacao']);


        return $inv;

    }

    public function Insert(\MODEL\Inventario $inv)
    {
        $sql = "INSERT INTO inventario (software, equipamento, instalacao) VALUES (?,?,?) ;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($inv->getSoftware(), $inv->getEquipamento(), $inv->getInstalacao()));
        $con = Conexao::desconectar();
      
        return $result; 

    }
}

?>