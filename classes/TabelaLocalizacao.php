<?php
require_once 'Localizacao.php';

class TabelaLocalizacao {

    private $connect;
    
    public function __construct($c) {
        $this->connect = $c;
    }
    
    // executa uma query para pegar todas as localizacoes
    public function getLocations() {
        $sqlQuery = "SELECT * FROM localizacoes";
        
        $statement = $this->connect->prepare($sqlQuery);
        $status = $statement->execute();
        
        if (!$status) {
            die("nao foi possivel realizar acao");
        }
        
        return $statement;
    }
    
    //executa uma query para pegar todas as localizacoes com o id especificado
    public function getLocationsById($id) {
        $sqlQuery = "SELECT * FROM localizacoes WHERE IDlocalizacao = :id";
        
        $statement = $this->connect->prepare($sqlQuery);
        $params = array(
            "id" => $id
        );
        
        $status = $statement->execute($params);
        
        if (!$status) {
            die("nao foi possivel realizar acao");
        }
        
        return $statement;
    }
    
    //executa uma declaracao insert que insere dados pegos do usuario
    public function insert($p) {
        $sql = "INSERT INTO Localizacoes(Nome, Endereco, NomeOrganizador, SobrenomeOrganizador, EmailOrganizador, ContatoOrganizador, CapacidadeMaxima) " .
                "VALUES (:Nome, :Endereco, :NomeOrganizador, :SobrenomeOrganizador, :EmailOrganizador, :ContatoOrganizador, :CapacidadeMaxima)";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "Nome"              => $p->getNome(),
            "Endereco"           => $p->getEndereco(),            
            "NomeOrganizador"      => $p->getNomeOrganizador(),
            "SobrenomeOrganizador"      => $p->getSobrenomeOrganizador(),
            "EmailOrganizador"      => $p->getEmailOrganizador(),
            "ContatoOrganizador"     => $p->getContatoOrganizador(),
            "CapacidadeMaxima"       => $p->getCapMax()
        );
        
        echo "<pre>";
        print_r($p);
        print_r($params);
        echo "</pre>";
        
        $status = $statement->execute($params);
        
        
        if (!$status) {
            die("nao foi possivel realizar acao");
        }
        
        $id = $this->connect->lastInsertId();
        
        return $id;
    }
    
    public function update($p) {
        
        $sql = "UPDATE localizacoes SET " .
                "Nome = :Nome, " . 
                "Endereco = :Endereco, " .                
                "NomeOrganizador = :NomeOrganizador, " .
                "SobrenomeOrganizador = :SobrenomeOrganizador, " .
                "EmailOrganizador = :EmailOrganizador, " .
                "ContatoOrganizador = :ContatoOrganizador, " .
                "CapacidadeMaxima = :CapacidadeMaxima ".
                " WHERE IDlocalizacao = :id";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "Nome"              => $p->getNome(),
            "Endereco"           => $p->getEndereco(),            
            "NomeOrganizador"      => $p->getNomeOrganizador(),
            "SobrenomeOrganizador"      => $p->getSobrenomeOrganizador(),
            "EmailOrganizador"      => $p->getEmailOrganizador(),
            "ContatoOrganizador"     => $p->getContatoOrganizador(),
            "CapacidadeMaxima"       => $p->getCapMax(),
            "id"                => $p->getId()
        );
        
        echo "<pre>";
        print_r($p);
        print_r($params);
        print_r($statement);
        
        echo "</pre>";
        
        $status = $statement->execute($params);
        if (!$status) {
            die("nao foi possivel realizar acao UPDATE");
        }
    }
    
    public function delete($id) {
        $sql = "DELETE FROM localizacoes WHERE IDlocalizacao = :id";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "id" => $id
        );
        $status = $statement->execute($params);
        
        if (!$status) {
            die("nao foi possivel realizar acao");
        }
    }    

}