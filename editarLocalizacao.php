<?php
require_once 'classes/Localizacao.php';
require_once 'classes/TabelaLocalizacao.php';
require_once 'classes/Conexao.php';

$id = $_POST['id'];
$Nome = $_POST['Nome'];
$Endereco = $_POST['Endereco'];
$NomeOrganizador = $_POST['NomeOrganizador'];
$SobrenomeOrganizador = $_POST['SobrenomeOrganizador'];
$EmailOrganizador = $_POST['EmailOrganizador'];
$ContatoOrganizador = $_POST['ContatoOrganizador'];
$CapacidadeMaxima = $_POST['CapacidadeMaxima'];

$location = new Localizacao($id, $Nome, $Endereco, $NomeOrganizador, $SobrenomeOrganizador,  $EmailOrganizador, $ContatoOrganizador
, $CapacidadeMaxima);

$connection = Conexao::getInstancia();

$gateway = new TabelaLocalizacao($connection);

$id = $gateway->update($location);

header('Location: verLocalizacoes.php');