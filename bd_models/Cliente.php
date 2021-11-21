<?php
    require_once("Conexao.php");

    class Cliente{
        private $idCliente;
        private $nomeCliente;
        private $cpfCliente;
        private $celularCliente;

        public function getIdCliente(){
            return $this->idCliente;
        }
        public function getNomeCliente(){
            return $this->nomeCliente;
        }
        public function getCpfCliente(){
            return $this->cpfCliente;
        }
        public function getCelularCliente(){
            return $this->celularCliente;
        }
        public function setIdCliente($idCliente){
            $this->idCliente = $idCliente;
        }
        public function setNomeCliente($nomeCliente){
            $this->nomeCliente = $nomeCliente;
        }
        public function setCpfCliente($cpfCliente){
            $this->cpfCliente = $cpfCliente;
        }
        public function setCelularCliente($celularCliente){
            $this->celularCliente = $celularCliente;
        }

        public function cadastrar($cliente){
            //prepare statement
            $con = Conexao::conectar();
            $stmt = $con->prepare("INSERT INTO tbCliente(nomeCliente, cpfCliente, celularCliente)
                                    VALUES(?,?,?)");
            $stmt->bindValue(1, $cliente->getNomeCliente());
            $stmt->bindValue(2, $cliente->getCpfCliente());
            $stmt->bindValue(3, $cliente->getCelularCliente());
            $stmt->execute();
        }

        public function atualizar($cliente){
            $con = Conexao::conectar();
            $stmt = $con->prepare("UPDATE tbCliente
                                    SET nomeCliente = ?, 
                                        cpfCliente = ?, 
                                        celularCliente = ?
                                    WHERE idCliente = ?");

            $stmt->bindValue(1, $cliente->getNomeCliente());
            $stmt->bindValue(2, $cliente->getCpfCliente());
            $stmt->bindValue(3, $cliente->getCelularCliente());
            $stmt->bindValue(4, $cliente->getIdCliente());
            $stmt->execute();

        }

        public function deletar($cliente){
            $con = Conexao::conectar();
            $stmt = $con->prepare("DELETE FROM tbCliente
                                    WHERE idCliente = ?");

            $stmt->bindValue(1, $cliente->getIdUsuario());
            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idcliente, nomecliente, cpfcliente, celularcliente FROM tbcliente";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }
    }