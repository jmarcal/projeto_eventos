<?php
require_once 'Evento.php';

class TabelaEvento {

    private $connect;
    
    public function __construct($c) {
        $this->connect = $c;
    }
    
    public function getEventos() {
        // executa uma query para pegar todos os eventos
        $sqlQuery = "SELECT e.*, l.Nome " .
                    "FROM eventos e " .
                    "LEFT JOIN localizacoes l ON e.IDlocalizacao = l.IDlocalizacao";
        
        $statement = $this->connect->prepare($sqlQuery);
        $status = $statement->execute();
        
        if (!$status) {
            die("nao foi possivel realizar acao");
        } 
        
        return $statement;
    }
    
    public function getEventsPorIdlocalizacao($id) {
        // executa uma query para pegar todos eventos por identificacao
        $sqlQuery = "SELECT e.*, l.nome " .
                    "FROM eventos e " .
                    "LEFT JOIN localizacoes l ON e.IDlocalizacao = l.IDlocalizacao " .
                    "WHERE e.IDlocalizacao=:IDlocalizacao";
        
        $params = array(
            "IDlocalizacao" => $id
        );
        $statement = $this->connect->prepare($sqlQuery);
        $status = $statement->execute($params);
        
        if (!$status) {
            die("nao foi possivel realizar acao by ID");
        }
        
        return $statement;
    }
    
    public function getEventsPorId($id) {
        // executa uma query para pegar todos os eventos com id especificado
        $sqlQuery = "SELECT * FROM eventos WHERE IDevento = :id";
        
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
    
    public function insert($p) {
        $sql = "INSERT INTO eventos(Titulo, Descricao, TipoEvento, DataInicio, DataFim, Custo, IDlocalizacao) " .
                "VALUES (:Titulo, :Descricao, :TipoEvento, :DataInicio, :DataFim, :Custo, :IDlocalizacao)";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "Titulo"           => $p->getTitulo(),
            "Descricao"     => $p->getDescricao(),
            "TipoEvento"     => $p->getTipoEvento(),            
            "DataInicio"       => $p->getDataInicio(),
            "DataFim"         => $p->getDataFim(),
            "Custo"            => $p->getCusto(),
            "IDlocalizacao"      => $p->getIDlocalizacao()
        );
        
        echo "<pre>";
        print_r($p);
        print_r($params);
        echo "</pre>";
        
        $status = $statement->execute($params);
        
        
        if (!$status) {
            die("nao foi possivel realizar acao aff 
            ");
        }
        
        $id = $this->connect->LastInsertID();
        
        return $id;
    }

    public function update($p) {
        $sql = "UPDATE eventos SET " .
                "Titulo = :Titulo, " . 
                "Descricao = :Descricao, " .                
                "DataInicio = :DataInicio, " .
                "EndDate = :EndDate, " .
                "Custo = :Custo, " .
                "IDlocalizacao = :IDlocalizacao, " .
                " WHERE IDevento = :id";
        
        $statement = $this->connect->prepare($sql);
        $params = array(
            "Titulo"          => $p->getTitulo(),
            "Descricao"    => $p->getDescricao(),            
            "DataInicio"      => $p->getDataInicio(),
            "DataFim"        => $p->getDataFim(),
            "Custo"           => $p->getCusto(),
            "IDlocalizacao"     => $p->getIDlocalizacao(),
            "id"             => $p->getId()
        );
        
        echo "<pre>";
        print_r($p);
        print_r($params);
        print_r($statement);
        echo "</pre>";
        
        $status = $statement->execute($params);
        
        if (!$status) {
            die("nao foi possivel realizar acao");
        }
    }
    
    public function delete($id) {
        $sql = "DELETE FROM eventos WHERE IDevento = :id";
        
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