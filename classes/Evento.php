<?php
class Evento {
    private $titulo;
    private $descricao;    
    private $dataInicio;
    private $dataFim;
    private $custo;
    private $IDlocalizacao;
    
    public function __construct($id, $titulo, $descricao, $dataInicio, $dataFim, $custo, $IDlocalizacao) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
        $this->custo = $custo;
        $this->IDlocalizacao = $IDlocalizacao;
    }
    
    public function getId() { return $this->id; }
    public function getTitulo() { return $this->titulo; }
    public function getDescricao() { return $this->descricao; }
    public function getDataInicio() { return $this->dataInicio; }
    public function getDataFim() { return $this->dataFim; }
    public function getCusto() { return $this->custo; }
    public function getIDlocalizacao() { return $this->IDlocalizacao; }
}
?>