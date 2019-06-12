<?php
require_once 'classes/Localizacao.php';
require_once 'classes/TabelaLocalizacao.php';
require_once 'classes/Conexao.php';
require_once 'validarLocalizacao.php';

$formdata = array();
$errors = array();

validarLocalizacao(INPUT_POST, $formdata, $errors);

if (empty($errors)) {
    $locationName = $formdata['Name'];
    $locationAddress = $formdata['Address'];    
    $managerFName = $formdata['managerFName'];
    $managerLName = $formdata['managerLName'];
    $managerEmail = $formdata['managerEmail'];
    $managerNumber = $formdata['managerNumber'];
    $maxCap = $formdata['maxCap'];

    $location = new Localizacao(-1, $locationName, $locationAddress, $managerFName, $managerLName, $managerEmail, $managerNumber, $maxCap);

    $connection = Conexao::getInstancia();

    $gateway = new TabelaLocalizacao($connection);

    $id = $gateway->insert($location);

    header('Location: verLocalizacoes.php');
    echo "Criado com Sucesso";
}
else {
    require 'criarLocalizacaoForm.php';
}