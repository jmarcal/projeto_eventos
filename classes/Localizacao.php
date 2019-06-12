<?php
class Localizacao {
    private $Nome;
    private $Endereco;    
    private $NomeOrganizador;
    private $SobrenomeOrganizador;
    private $EmailOrganizador;
    private $ContatoOrganizador;
    private $CapaciadeMaxima;
    
    public function __construct($id, $nome, $endereco, $nomeOrganizador, $sobrenomeOrganizador, $emailOrganizador, $contatoOrganizador, $capMax) {
        $this->id = $id;
        $this->Nome = $nome;
        $this->Endereco = $endereco;
        $this->NomeOrganizador = $nomeOrganizador;
        $this->SobrenomeOrganizador = $sobrenomeOrganizador;
        $this->EmailOrganizador = $emailOrganizador;
        $this->ContatoOrganizador = $contatoOrganizador;
        $this->CapaciadeMaxima = $capMax;
    }
    
    public function getId() { return $this->id; }
    public function getNome() { return $this->Nome; }
    public function getEndereco() { return $this->Endereco; }
    public function getNomeOrganizador() { return $this->NomeOrganizador; }
    public function getSobrenomeOrganizador() { return $this->SobrenomeOrganizador; }
    public function getEmailOrganizador() { return $this->EmailOrganizador; }
    public function getContatoOrganizador() { return $this->ContatoOrganizador; }
    public function getCapMax() { return $this->CapaciadeMaxima; }
}
?>