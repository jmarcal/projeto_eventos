<?php
require_once 'classes/Evento.php';
require_once 'classes/TabelaEvento.php';
require_once 'classes/Conexao.php';
require_once 'validarEvento.php';

$formdata = array();
$errors = array();

validarEvento(INPUT_POST, $formdata, $errors);

if (empty($errors)) {
    $title = $formdata['Title'];
    $description = $formdata['Description'];    
    $sDate = $formdata['StartDate'];
    $eDate = $formdata['EndDate'];
    $cost = $formdata['Cost'];
    $locID = $formdata['LocID'];

    $event = new Evento(-1, $title, $description, $sDate, $eDate, $cost, $locID);

    $connection = Conexao::getInstancia();

    $gateway = new TabelaEvento($connection);

    $id = $gateway->insert($event);

    header('Location: verEventos.php'); 
}
else {
    require 'criarEventoForm.php';
}