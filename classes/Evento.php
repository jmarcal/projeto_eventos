<?php
class Evento {
    private $titulo;
    private $descricao;
    private $tipoevento;    
    private $dataInicio;
    private $dataFim;
    private $custo;
    private $IDlocalizacao;
    
    public function __construct($id, $titulo, $descricao, $tipoEvento, $dataInicio, $dataFim, $custo, $IDlocalizacao) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->tipoevento = $tipoEvento;
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
        $this->custo = $custo;
        $this->IDlocalizacao = $IDlocalizacao;
    }
    
    public function getId() { return $this->id; }
    public function getTitulo() { return $this->titulo; }
    public function getDescricao() { return $this->descricao; }
    public function getTipoEvento() { return $this->tipoevento; }
    public function getDataInicio() { return $this->dataInicio; }
    public function getDataFim() { return $this->dataFim; }
    public function getCusto() { return $this->custo; }
    public function getIDlocalizacao() { return $this->IDlocalizacao; }
}
?>