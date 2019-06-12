<?php
require_once 'classes/Evento.php';
require_once 'classes/TabelaEvento.php';
require_once 'classes/Conexao.php';
require_once 'validarEvento.php';

$formdata = array();
$errors = array();

validarEvento(INPUT_POST, $formdata, $errors);

if (empty($errors)) {
    $titulo = $formdata['Titulo'];
    $descricao = $formdata['Descricao'];    
    $tipoEvento = $formdata['TipoEvento'];    
    $dataInicio = $formdata['DataInicio'];
    $dataFim = $formdata['DataFim'];
    $custo = $formdata['Custo'];
    $IDloc = $formdata['IDloc'];

    $event = new Evento(-1, $titulo, $descricao, $tipoEvento, $dataInicio, $dataFim, $custo, $IDloc);

    $connection = Conexao::getInstancia();
 
    $gateway = new TabelaEvento($connection);

    $id = $gateway->insert($event);

    header('Location: verEventos.php'); 
}
else {
    require 'criarEventoForm.php';
}