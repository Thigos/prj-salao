<?php

require_once('Conexao.php');

class Servico{

    private $idServico;
    private $descServico;

    public function getIdServico(){
        return $this->idServico;
    }
    public function getDescServico(){
        return $this->descServico;
    }
    public function setIdServico($idServico){
        $this->idServico = $idServico;
    }
    public function setDescServico($descServico){
        $this->descServico = $descServico;
    }

    public function cadastrar($servico){
        $con = Conexao::conectar();
        $query = "INSERT INTO tbServico(descServico) 
                    VALUES ('".$servico->getDescServico()."')";
        $con->exec($query);
    }
}