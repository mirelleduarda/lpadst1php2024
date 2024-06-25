<?php
namespace BLL;

include_once 'C:\xampp\htdocs\lpadsphpt1\lpadsphpt120240606\DAL\Departamento.php';
use DAL;

class Departamento
{
    public function Select()
    {
        $dalDpto = new \DAL\Departamento();
    
        return $dalDpto->Select();
    }
}

?>